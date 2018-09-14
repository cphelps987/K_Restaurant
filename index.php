<!DOCTYPE html>
<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<?php include 'include/header.php';?>

<body>
    <span itemscope itemtype="http://schema.org/Restaurant" itemscope="" itemtype="http://schema.org/Restaurant">

<div class="wrap">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid navBar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    </button>
    </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-left">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="staff.php">Staff</a></li>
            <li><a href="menu.php">Menu</a></li>
            <li><a href="awards.php">Awards</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="events.php">Events</a></li>
            <li><a href="gardenHouse.php">Catering</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right rightNav">
            <?php include 'include/nav_reservation.php';?>
        </ul>
    </div>
            <!-- /.navbar-collapse -->
    </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php include 'include/logo.php';?>
            </div>
            <!--end of col 2 K logo-->

            <div class="col-md-8 middle middle1">

                <div class="w3-content w3-display-container" style="max-width:800px">

                    <img class="mySlides" src="assets/images/brunch_banner.gif" style="width:100%">
                    <img class="mySlides" src="assets/images/happyhour_banner.gif" style="width:100%">
                    <img class="mySlides" src="assets/images/front1.jpg" style="width:100%">
                    <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                        <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                        <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                        <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>


                    </div>
                </div>

                <script>
                    var slideIndex = 1;
                    showDivs(slideIndex);

                    function plusDivs(n) {
                        showDivs(slideIndex += n);
                    }

                    function currentDiv(n) {
                        showDivs(slideIndex = n);
                    }

                    function showDivs(n) {
                        var i;
                        var x = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        if (n > x.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = x.length
                        }
                        for (i = 0; i < x.length; i++) {
                            x[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" w3-white", "");
                        }
                        x[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " w3-white";
                    }
                </script>


                <div class="col-md-6 col-lg-6">

                    <h1>Hours of Operation</h1>
                    <table>
                        <tbody itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification" itemprop="openingHoursSpecification" itemscope="" itemtype="http://schema.org/OpeningHoursSpecification">

                            <meta itemprop="openingHours" content="Mo-Th 17:00-21:00" />
                            <meta itemprop="openingHours" content="Fri-Sa 17:00-22:00" />

                            <tr>
                                <td>Monday</td>
                                <td>5:00 PM - 9:00 PM</td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>5:00 PM - 9:00 PM</td>
                            </tr>
                            <tr>
                                <td>Wednesday </td>
                                <td>5:00 PM - 9:00 PM</td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>5:00 PM - 9:00 PM</td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>5:00 PM - 10:00 PM</td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>5:00 PM - 10:00 PM</td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>10:00 AM - 2:00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <a href="https://www.opentable.com/k-restaurant-reservations-orlando?restref=23929&lang=en-US" target="_blank" style="text-decoration: none">
                        <input type="button" class="btn buttonPage" value="Reservation" />
                    </a><br><br>
                    <br>
                    <h4>Happy Hour</h4>
                    <p>
                        Monday – Friday<br> 5:00 PM – 7:00 PM<br> Location at K Bar, Porch & Garden Patio<br>
                    </p>
                    <br>
                    <p>
                        Closed July 2 through July 5<br> Reopen July 6<br> 5:00 PM - 10:00 PM<br>

                    </p>
                    <br>
                    <div>
                        <!--start of modal-->
    <!-- Trigger the modal with a button -->
                        <button type="button" class="btn buttonPage" data-toggle="modal" data-target="#myModal">Parking</button>

    <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h1 class="modal-title" style="color:black">Free Parking Areas</h1>
                                    </div>
                                    <div class="modal-body">
                                        <p style="color:black">Located in Red - Gravel Parking lot, Post Office, & Street Parking</p>
                                        <img src="assets/images/parking.jpg" style="width:100%">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn buttonPage" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
    <!--end of modal--fade-->
                    </div><!--end of modal--><br>
                    <a href="http://krestaurant.net/menu.php" style="text-decoration: none">
                        <input type="button" class="btn buttonPage" value="Menus" />
                    </a><br>
                    <br>

                    <div>
                    </div>
                    <br>

                    <br><br>


                </div>
                <!--end of col-2-hours-left-->

                <div class="col-md-6 col-lg-6">
                    <h1>Join Email List</h1>
                    <p>We keep our guests updated about events and happenings via our email list which you can easily be a part of! Simply subscribe to the K email list! We send out event emails every other week to inform interested guests on upcoming events, specials, limited menu items, etc.</p><br>

                    <div class="createsend-button" style="height:27px;display:inline-block;" data-listid="j/B9/E3E/25F/821144290EB6C8C5">
                    </div>
                    <script type="text/javascript">
                        (function() {
                            var e = document.createElement('script');
                            e.type = 'text/javascript';
                            e.async = true;
                            e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3';
                            e.className = 'createsend-script';
                            var s = document.getElementsByTagName('script')[0];
                            s.parentNode.insertBefore(e, s);
                        })();
                    </script>



                    <h1>Future Events</h1>
                    <a href="events.php"><img src="assets/images/instagram_grilling.gif" alt="Upcoming Event Poster" style="width: 100%">
                    </a><br><br>
                    <!--instagram_yappyHour.gif     WFF.gif      instagram_brunch.gif        instagram_yappyHour_PA.gif        instagram_grilling.gif-->

                    <br>

                </div>
                <!--end of col-2-info-right-->


            </div>
            <!--end of md-8 middle-->

            <div class="col-md-2">



            </div>
            <!--end of col 2-->

        </div>
        <!--end of main row-->
    </div>
    <!--end of container-->
    </div>
        <!--end of wrap-->


        <?php include 'include/footer.php';?>

</body>

</html>