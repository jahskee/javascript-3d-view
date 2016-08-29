<script>
        if (!Detector.webgl) {
            Detector.addGetWebGLMessage();
        }

        var container;
        var canvas_width = 600;
        var canvas_height = 350;


        var camera, controls, scene, renderer;
        var lighting, ambient, keyLight, fillLight, backLight;

        var windowHalfX = window.innerWidth / 2;
        var windowHalfY = (window.innerHeight / 2);

        init();
        animate();

        function init() {

            container = document.createElement('div');
            // document.body.appendChild(container);

            document.getElementById("container").appendChild(container);

            /* Camera */

            camera = new THREE.PerspectiveCamera(45, window.innerWidth / window.innerHeight, 1, 1000);
            camera.position.z = 500;
            //  camera.position.y = -300;

            /* Scene */

            scene = new THREE.Scene();

            // lights

            light = new THREE.DirectionalLight( 0xffffff );
            light.position.set( 1, 1, 1 );
            scene.add( light );

            light = new THREE.DirectionalLight( 0xffffff );
            light.position.set( -500, -500, -1 );
            scene.add( light );

            /* Model */

            var mtlLoader = new THREE.MTLLoader();
            mtlLoader.setBaseUrl('cars/ford/edge2016');
            mtlLoader.setPath('cars/ford/edge2016');
            mtlLoader.load('3dmodel.mtl', function (materials) {

                materials.preload();

                // initialize the manager to handle all loaded events
                manager = new THREE.LoadingManager();

                manager.onProgress = function(item, loaded, total){
                    console.log(item, loaded, total);
                };

                manager.onLoad = function() {
                    console.log("all items loaded");
                    allItemsLoaded();
                };

                manager.onError = function() {
                    console.log("there has been an error");
                };

                var objLoader = new THREE.OBJLoader(manager);
                objLoader.setMaterials(materials);
                objLoader.setPath('cars/ford/edge2016');

                objLoader.load('3dmodel.obj', function (object) {


                    // perspective view
                    object.rotation.x = -1.00;
                    object.rotation.y = -0.06;
                    object.rotation.z = 0.70;

                    object.position.x = -25;
                    object.position.y = -20;
                    object.position.z = -50;
                    // end of perspective view

                    scene.add(object);


                });

            });


            renderer = new THREE.WebGLRenderer({ alpha: false });
            renderer.setPixelRatio(window.devicePixelRatio);

            renderer.setSize(canvas_width, canvas_height);
            renderer.setClearColor(new THREE.Color("hsl(0, 0%, 10%)"));
            //renderer.setClearColor( 0xffffff, 0);
            container.appendChild(renderer.domElement);

            /* Controls */
            controls = new THREE.TrackballControls( camera );

            controls.rotateSpeed = 10.0;
            controls.zoomSpeed = 1.2;
            controls.panSpeed = 0.8;

            controls.noZoom = false;
            controls.noPan = false;

            controls.staticMoving = true;
            controls.dynamicDampingFactor = 0.3;

            controls.keys = [ 65, 83, 68 ];

            controls.addEventListener( 'change', render );

            /* Events */

            window.addEventListener('resize', onWindowResize, false);

        }

        function onWindowResize() {

            windowHalfX = window.innerWidth / 2;
            windowHalfY = window.innerHeight / 2;

            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(canvas_width, canvas_height);
            //renderer.setSize(window.innerWidth, window.innerHeight);

        }

        function onKeyboardEvent(e) {

            if (e.code === 'KeyL') {

                lighting = !lighting;

                if (lighting) {

                    ambient.intensity = 0.25;
                    scene.add(keyLight);
                    scene.add(fillLight);
                    scene.add(backLight);

                } else {

                    ambient.intensity = 1.0;
                    scene.remove(keyLight);
                    scene.remove(fillLight);
                    scene.remove(backLight);

                }

            }

        }

        function allItemsLoaded() {
            $('.onepix-imgloader').fadeOut();
            $('.loading-container > *:not(.onepix-imgloader)').fadeTo(8000, 100);
            $('#loading-msg').empty();
        }

        function animate() {

            requestAnimationFrame(animate);

            controls.update();

            render();

        }

        function render() {

            renderer.render(scene, camera);
        }

</script>