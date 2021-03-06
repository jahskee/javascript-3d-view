<!DOCTYPE html>
<html>
<head>

    <title>3D Demo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="packages/three.js"></script>
    <script src="packages/Detector.js"></script>
    <script src="packages/OrbitControls.js"></script>
    <script src="packages/TrackBallControls.js"></script>
    <script src="packages/OBJLoader.js"></script>
    <script src="packages/MTLLoader.js"></script>

    <script src="js/heartcode-canvasloader-min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/3dloading.css">
    <link rel="stylesheet" type="text/css" href="css/3dcontainer.css">



    <!-- Horizontal Menuu -->
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="menu/hstyles.css">

    <!-- Vertical Menuu -->

    <link rel="stylesheet" type="text/css" href="menu/vstyles.css">
    <!--  <script src="menu/script.js"></script>-->


    <!-- magnifying glass -->
    <link rel="stylesheet" type="text/css" href="css/magnifying_glass.css">
    <script src="js/magnifying_script.js"></script>

  </head>

<body >


<table border="1" style="background-color:lightgray; width:800px">
    <tr>

        <td style="width:500px" colspan="2">
            <div w3-include-html="header.html"></div>
            <image src="images/header00.jpg"> </image>
        </td>


    </tr>

    <tr>

        <td id="menu_bar" class="mid_panel" colspan="2">
            <div id="cssmenu">
                <ul>
                    <li><a href="#" target="_blank"><i class="fa fa-fw fa-home"></i> Home</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-rocket"></i> Project Info</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-graduation-cap"></i> What is CS 50</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-database"></i> Archives</a>
                        <ul>
                            <li><a href="#">Menu 1</a>
                                <ul>
                                    <li><a href="#">Menu 1.1</a></li>
                                    <li><a href="#">Menu 1.2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Menu 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-fw fa-phone"></i> Contact</a></li>
                </ul>
            </div>

        </td>
    </tr>


    <tr>
        <td class="left_panel_grp" >

        </td>

        <td  class="mid_panel_grp">

        </td>

    </tr>


    <tr>
        <td  class="left_panel_grp" style="vertical-align:top;width:350">
            <div id="cssmenuv">
                <ul>
                    <li><a href="#"><span><i class="fa fa-fw fa-taxi"></i> Top Consumer SUVs</span></a>
                        <ul>
                            <li><a href="#"><span>Acura RDX</span></a></li>
                            <li><a href="#"><span>Dodge Charger</span></a></li>
                            <li><a href="#"><span>Ford Edge 2016</span></a></li>
                            <li><a href="#"><span>Ford Explorer</span></a></li>
                            <li><a href="#"><span>GMC Acadia</span></a></li>
                            <li><a href="#"><span>Jeep Cherokee</span></a></li>
                            <li><a href="#"><span>Jeep Compass</span></a></li>
                            <li><a href="#"><span>Lincoln MKX</span></a></li>
                            <li><a href="#"><span>Mercedez GLX 350</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span><i class="fa fa-fw fa-bolt"></i> POWER CARS</span></a>
                        <ul>
                            <li><a href="#"><span>Porsche Carrera</span></a></li>
                            <li><a href="#"><span>Chevrolet Camaro</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span><i class="fa fa-fw fa-car"></i> Sedan</span></a>
                        <ul>
                            <li><a href="#"><span>Toyota Corolla</span></a></li>
                            <li><a href="#"><span><i class="fa fa-fw fa-book"></i> Acura</span></a></li>
                        </ul>
                    </li>
                    <li><a href="#"><span><i class="fa fa-fw fa-truck"></i> Pickup Trucks</span></a>
                        <ul>
                            <li><a href="#"><span><i class="fa fa-fw fa-phone"></i> Ford F-150</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </td>

        <td id="product_panel" class="mid panel_grp">

            <table border="1" width="100%">
                <tr>
                    <td width="3%"></td>
                    <td style="text-align:center">
                        <h3>Ford Edge 2016</h3>
                    </td>
                    <td width="3%"></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="3d_view_panel" align="center">

                        <div class = "loading-container">
                            <div id="container" style="border-color:red; text-align:center" align="center">

                            </div>
                        </div>
                        <div id="loading-msg"><i>Please wait, 3D loading... </i><div>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td id="photo_view_panel" width="50%" align="left" style="-moz-column-fill: auto; column-fill: auto;">

                        <h3>Auto Review: 2016 Ford Edge Sport AWD - News Sentinel</h3>
                        <p>
                            For 2016, Ford stocks its Edge SUV with more technology, including an adaptive steering feature and park assist that can handle even perpendicular spaces.
                            The five-passenger Edge also gets a Sync 3 touchscreen infotainment system that's easier to use, responds faster than its predecessor and has two slick,
                            customizable dashboard displays.The Edge's dimensions and three engine choices haven't changed, retaining its comfort and a range of power.
                            It's a recommended buy of Consumer Reports, which projects the vehicle's reliability will be "good," and it earned an overall five out of five stars in
                            the federal government's frontal and side crash tests for occupant crash protection. The Edge is not as big and unwieldy as a full-size SUV, though it is
                            larger than many mid-size SUVs. In fact, the 40.6 inches of back-seat legroom are as much as some cars provide for front-seat passengers. Up front, there's
                            42.6 inches of legroom.All 2016 Edge SUVs come with a six-speed automatic transmissionThe starting manufacturer's suggested retail price, including
                            destination charge, is $29,595 for a front-wheel drive, 2016 Edge SE with the base, 245-horsepower, turbocharged, four-cylinder EcoBoost engine.
                            The lowest starting retail price, including destination charge, for a 2016 Edge SE with the same engine and all-wheel drive is $31,090.Ford also offers
                            one non-turbo engine — a 280-horsepower V-6. And the 315-horsepower, twin-turbo EcoBoost V-6 is available only on the top-of-the-line Edge Sport.
                            The good news is the top-end engine doesn't require premium gasoline.The test vehicle was the Edge Sport, which comes standard with all-wheel drive and
                            has a starting retail price of $41,295. It impressed immediately with its wide, stocky stance and 21-inch wheels, which cost an extra $995, filling the
                            wheel wells.Front-seat passengers had to contend with thick pillars at the sides of the windshield that can obscure pedestrians and bicyclists when making
                            turns.The Sport has a firmer ride than what you'd expect from a vehicle its size, and, with the test vehicle, the heavier wheels at the corners.The 2.7-liter,
                            twin-turbo V-6 was pleasing, with strong acceleration moving the nearly 4,100-pound SUV as if it were a much lighter vehicle. Peak torque of 350 foot-pounds
                            comes on at 2,750 rpm.The six-speed automatic shifted smoothly much of the time. The new adaptive steering is Ford's next-generation variable ratio power
                            steering and lets drivers select between normal and sport steering modes for both the regular "Drive" gear and the "Sport" gear on the transmission.
                            The result is a sizable SUV that takes a bit less arm movement to maneuver into garage-parking spaces and yet has a more precise steering feel than
                            expected at highway speeds.But the Edge's turning circle is large, and the tester's fuel economy was lackluster at 17.6 mpg in driving mostly on country
                            roads and in the city. This amounted to a measly 338 miles on a 19.2-gallon tank of gasoline. More Information
                            2016 Ford Edge Sport AWD
                        </p>
                        <br>
                        <p>
                            BASE PRICE: $28,700 for SE FWD; $20,195 for SE AWD; $31,790 for SEL FWD; $33,285 for SEL AWD; $35,600 for Titanium FWD; $37,095 for Titanium AWD; $40,400 for Sport AWD.

                            PRICE AS TESTED: $49,990.

                            TYPE: Front-engine, all-wheel drive, five-passenger, mid-size sport utility vehicle.

                            ENGINE: 2.7-liter, twin-turbocharged, EcoBoost V-6.

                            MILEAGE: 17 mpg (city), 24 mpg (highway).

                            TOP SPEED: 132 mph.
                        </p>
                        <br>
                        <p>
                            OPTIONS: Equipment group 401A (includes voice-activated navigation system, lane-keep assist, enhanced park assist, rain-sensing wipers, heated rear seats, remote start, blind spot monitoring) $3,150; panoramic vista roof $1,595; adaptive cruise control and collision warning with brake support $1,150; 21-inch, premium painted aluminum wheels $995; P265/40R21 summer tires; $995; cold weather package (includes heated steering wheel, all-weather floor mats) $325; cargo accessory package (includes cargo cover, cargo floor protector) $290; inflatable rear seat belts $195.
                        </p>
                    </td>.
                    <td></td>
                </tr>
            </table>

        </td>

    </tr>
    <tr>
        <td class="left_panel_grp"></td>
        <td >
            <br>
            <br>
            <hr>
            <center> <p>©2016 CS50 Project.
                    <br>

                    All rights reserved.</p> </center>
            <br>
            <br>
            <br>
        </td>

    </tr>


</table>

<?php
    include('includes/load3dmodel.php');
?>
<script>
    // to display loading animation before it's ready
    $(document).ready(function() {

        if($(".loading-container").length){
            // to show loading animation
            $imgloader = $('.loading-container');
            //$loadingimg = $("<div id='canvasloader-container' class='onepix-imgloader'></div>");

            $imgloader.prepend('<div id="canvasloader-container" class="onepix-imgloader"></div>');

            // canvas loader code
            var cl = new CanvasLoader("canvasloader-container");
            cl.setColor('#4f4f4f');
            cl.setDiameter(30);
            cl.setDensity(75);
            cl.setRange(0.7);
            cl.setSpeed(10);
            cl.setFPS(22);
            cl.show();
        }
    });
</script>

<script>
    $(document).ready(function() {
        $('#cssmenuv > ul > li ul').each(function(index, e){
            var count = $(e).find('li').length;
            var content = '<span class=\"cnt\">' + count + '</span>';
            $(e).closest('li').children('a').append(content);
        });
        $('#cssmenuv ul ul li:odd').addClass('odd');
        $('#cssmenuv ul ul li:even').addClass('even');
        $('#cssmenuv > ul > li > a').click(function() {
            $('#cssmenuv li').removeClass('active');
            $(this).closest('li').addClass('active');
            var checkElement = $(this).next();
            if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
                $(this).closest('li').removeClass('active');
                checkElement.slideUp('normal');
            }
            if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
                $('#cssmenuv ul ul:visible').slideUp('normal');
                checkElement.slideDown('normal');
            }
            if($(this).closest('li').find('ul').children().length == 0) {
                return true;
            } else {
                return false;
            }
        });
    });
</script>

</body>
</html>
