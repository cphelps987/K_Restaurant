<!DOCTYPE html>
<html lang="en">

<?php include 'include/header.php';?>

<body>
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
                    <li><a href="chef.php">Chef</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="awards.php">Awards</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gardenHouse.php">The Garden House</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right rightNav">
                    <?php include 'include/nav_reservation.php';?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php include 'include/logo.php';?>
            </div><!--end of col 2 K logo-->

            <div class="col-md-8 middle middle1">
                <img src="assets/images/K.jpg" style="width:100%">

                <div class="col-md-6 col-lg-6">

                    <h1>Hours of Operation</h1>
                    <table>
                        <tbody>

                        <tr>
                            <td>Monday</td><td>5:00-9:00</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td><td>5:00-9:00</td>
                        </tr>
                        <tr>
                            <td>Wednesday </td><td>5:00-9:00</td>
                        </tr>
                        <tr>
                            <td>Thursday</td><td>5:00-9:00</td>
                        </tr>
                        <tr>
                            <td>Friday</td><td>5:00-10:00</td>
                        </tr>
                        <tr>
                            <td>Saturday</td><td>5:00-10:00</td>
                        </tr>
                        <tr>
                            <td>Sunday</td><td>Closed</td>
                        </tr>

                        </tbody>
                    </table>
                    <br>
                    <a href="https://www.opentable.com/k-restaurant-reservations-orlando?restref=23929&lang=en-US" target="_blank" style="text-decoration: none">
                        <input type="button" class="btn" value="Reservation" />
                    </a>
                    <br>
                    <h1>Holiday Hours</h1>
                    <p>
                        Closed:<br> December 24-26 <br>January 1, 2018
                        <br><br>
                        Open: <br>December 31 - Prix Fixe/ A La Carte Menu
                    </p>

                    <div>
                        <h1>Happy Hour</h1>
                        <p>
                            Monday – Friday<br>
                            5:00 – 7:00<br>
                            Location at K Bar, Porch & Garden Patio<br>
                        </p>
                        <br>
                        <div><!--start of modal-->
                            <!-- Trigger the modal with a button -->
                            <button type="button" class="btn" data-toggle="modal" data-target="#myModal1">Happy Hour Menu</button>

                            <!-- Modal -->
                            <div class="modal fade" id="myModal1" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h1 class="modal-title" style="color:black">Happy Hour Menu</h1>
                                        </div>
                                        <div class="modal-body">
                                            <?php include 'include/happyHour.php';?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div> <!--end of modal--fade-->
                        </div><!--end of happy hour menu modal-->
                        <br>
                    </div>

                    <div><!--start of modal-->
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Parking</button>

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
                                        <button type="button" class="btn" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div> <!--end of modal--fade-->
                    </div><!--end of modal-->
                </div><!--end of col-2-hours-left-->

                <div class="col-md-6 col-lg-6">
                    <h1>Join K's Email List</h1>
                    <p>We keep our guests updated about events and happenings via our email list which you can easily be a part of! Simply subscribe to the K email list! We send out event emails every other week to inform interested guests on upcoming events, specials, limited menu items, etc.</p><br>

                    <div class="createsend-button" style="height:27px;display:inline-block;" data-listid="j/B9/E3E/25F/821144290EB6C8C5">
                    </div><script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == 		document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>

                    <h1>Upcoming Events</h1>
                    <a href="events.php">
                        <img src="assets/images/WFF.gif" alt="Upcoming Event Poster" style="width: 100%">
                    </a>

                </div> <!--end of col-2-info-right-->
            </div><!--end of md-8 middle-->

            <div class="col-md-2">

            </div> <!--end of col 2-->
        </div> <!--end of main row-->
    </div> <!--end of container-->
</div> <!--end of wrap-->


<?php include 'include/footer.php';?>

</body>
</html>