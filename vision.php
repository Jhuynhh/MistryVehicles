<!DOCTYPE html>
<html>
<head>
	<?php include_once './head.php'; ?>
	<?php include_once './head-styles-inventory.php'; ?>
</head>
<body>
<div class="container-fluid">

	<?php include_once './header.php'; ?>
	<?php include_once './feedback-template.php'; ?>

    <div class="container container-first">
        <div class="row">
            <div class="container">
                <h1 style="color: #C0C0C0">BMW Vision100</h1>
                <hr>
            </div>
        </div>

        <!-- Product Picture -->
        <div class="row">
            <div class="col-sm-6">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Vision NEXT100 BMW/Vision_Img_1.jpg" alt="McLaren Image 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Vision NEXT100 BMW/Vision_Img_2.jpg" alt="McLaren Image 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Vision NEXT100 BMW/Vision_Img_3.jpg" alt="McLaren Image 3">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>



            <!-- Product Specs -->
            <div class="col-sm-6">
                <div class="container" style="width:100%">
                    <h2 style="text-align:left; color: #F0F0F0;">Tech Specs</h2>
                    <table class="table" style="table-layout:fixed; color: #F0F0F0;">
                        <tbody>
                        <tr>
                            <td><b>Acceleration</b></td>
                            <td>0 - 100 km/h < 3.5 sec <br> 0 - 200 km/h <12 sec </td>
                        </tr>
                        <tr>
                            <td><b>Top Speed</b></td>
                            <td> >250 km/h </td>
                        </tr>
                        <tr>
                            <td><b>Power</b></td>
                            <td> > 440 kW (> 600hp) </td>
                        </tr>
                        <tr>
                            <td><b>Range</b></td>
                            <td> > 500 km (300 miles) </td>
                        </tr>
                        <tr>
                            <td><b>System voltage</b></td>
                            <td> 800V </td>
                        </tr>
                        <tr>
                            <td><b>Charging time </b></td>
                            <td>80% in < 15 min</td>
                        </tr>
                        <tr>
                            <td><b>Price</b></td>
                            <td>$50,000 (Cash Preferred)</td>
                        </tr>
                        <tr>
                            <td><b>Description/Details</b></td>
                            <td>
                                In the Concept Study Mission E, principles come to bear which have actually been intrinsic to every Porsche since the birth of the 356 in 1948: lightness, openness, purism, clear architecture, driver-orientation and day-to-day usability.
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

	<?php include_once './scripts.php'; ?>
</div>
</body>
</html>
