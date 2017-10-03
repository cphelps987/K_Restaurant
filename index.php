<!DOCTYPE html>
<html lang="en">

<?php include 'include/header.php';?>

<body>
<div class="wrap">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid navBar">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapseTYUIO-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
            <div class="col-md-8 middle">
                <img src="assets/images/K.jpg" style="width:100%">

                <div class="col-sm-2 hours pull-left">
               <!-- <script type='text/javascript' src='//www.opentable.com/widget/reservation/loader?rid=347401&domain=com&type=button&theme=standard&lang=en-US&overlay=false&iframe=true'></script>-->
                <h1>Hours of Operation</h1>
                    <p>
                        Monday 5:00-9:00<br>
                        Tuesday 5:00-9:00<br>
                        Wednesday 5:00-9:00<br>
                        Thursday 5:00-9:00<br>
                        Friday 5:00-10:00<br>
                        Saturday 5:00-10:00<br>
                        Sunday Closed<br>
                    </p>
                    <div>
                        <h1>Happy Hour</h1>
                        <p>Monday – Friday 5PM – 7PM</p>
                    </div>
                    <div>
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Parking</button>

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
                        </div>
                    </div>

                </div>
                <div class="col-sm-2 info pull-right">
                    <h1>Join K's Email List</h1>
                    <form id="contact-form" method="post" action="contact.php" role="form">

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!--<div class="col-md-6">
                                </div>-->
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input class="btn btn-default" type="submit" value="Submit">
                                </div>
                            </div>


                        </div>

                    </form>

                </div>
            </div>

            </div>
            <div class="col-md-2">

            </div>

        </div>
    </div>
<div class="push"></div>
</div> <!--end of wrap-->

<?php include 'include/footer.php';?>

</body>
</html>