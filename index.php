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
                <img src="assets/images/k_restaurant_Web.svg">
            </div>

            <div class="col-md-8 middle middle1">
                <img src="assets/images/K.jpg" style="width:100%">

                <div class="col-sm-2 hours pull-left">

                    <h1>Hours of Operation</h1>
                    <table>
                        <tbody>
                            <p>
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
                            </p>
                        </tbody>
                    </table>
                    <br>
                    <a href="https://www.opentable.com/k-restaurant-reservations-orlando?restref=23929&lang=en-US" target="_blank">
                        <input type="button" class="btn btn-default" value="Reservation" />
                    </a>
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
                                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1">Happy Hour Menu</button>

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
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div> <!--end of modal--fade-->
                            </div><!--end of happy hour menu modal-->
                            <br>
                        </div>

                    <div><!--start of modal-->
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Parking</button>

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
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div> <!--end of modal--fade-->
                    </div><!--end of modal-->
                </div><!--end of col-2-hours-left-->

                <div class="col-sm-2 info pull-right">
                    <h1>Join K's Email List</h1>
                        <p>We keep our guests updated about events and happenings via our email list which you can easily be a part of! Simply subscribe to the K email list! We send out event emails every other week to inform interested guests on upcoming events, specials, limited menu items, etc.</p><br>
                        <form action="https://krestaurantwinebar.createsend.com/t/j/s/vyukuy/" method="post" id="subForm">
                            <p>
                                <label for="fieldName">Name</label><br />
                                <input id="fieldName" name="cm-name" type="text" required/>
                            </p>
                            <p>
                                <label for="fieldEmail">Email</label><br />
                                <input id="fieldEmail" name="cm-vyukuy-vyukuy" type="email" required />
                            </p>
                                <button type="button" class="btn btn-default">Subscribe</button>
                        </form>

                    <h1>Upcoming Events</h1>
                    <a href="events.php">
                        <img src="assets/images/web_wild_game.gif" alt="Upcoming Event Poster" style="width: 100%">
                    </a>

                </div> <!--end of col-2-info-right-->
            </div><!--end of md-8 middle-->

            <div class="col-md-2">

            </div> <!--end of col 2 of main row-->

        </div> <!--end of main row-->
    </div> <!--end of container-->

</div> <!--end of wrap-->

<div class="push"></div>
<?php include 'include/footer.php';?>

</body>
</html>