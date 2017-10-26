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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="chef.php">Chef</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gardenHouse.php">Contact</a></li>
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
                <h1>Chefs</h1>
                <div class="staff">
                    <img src="assets/images/Chad.jpg" alt="Chad" class="Chef">
                    <div class="overlay">
                        <div class="text">Chad Phelps
                            <p>Owner and Executive Chef</p>
                        </div>
                    </div>
                </div>
                <div class="staff">
                    <img src="assets/images/Ryan.jpg" alt="Ryan" class="Chef">
                    <div class="overlay">
                        <div class="text">Ryan McLaughlin
                            <p>Sous Chef</p>
                        </div>
                    </div>
                </div>
                <div class="staff">
                    <img src="assets/images/Michelle.jpg" alt="Michelle" class="Chef">
                    <div class="overlay">
                        <div class="text">Michelle Hulbert
                            <p>Pastry Chef</p>
                        </div>
                    </div>
                </div>
                <p></p>
            </div> <!--end of col-md-8 middle-->
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</div> <!--end of wrap-->
<div class="push"></div>

<?php include 'include/footer.php';?>

</body>
</html>