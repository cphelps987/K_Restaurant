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
                    <li><a href="chef.php">Chef</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li class="active"><a href="awards.php">Awards</a></li>
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
            <div class="col-md-8 middle">
                <h1>Awards</h1>
                <p>
                    <!--opentable-->
                    <a target="_blank" href="https://www.opentable.com/best-orlando-florida-restaurants?topic=Best%20Overall"><img src="assets/images/openTable.jpg" style="height: 50px; width: auto"></a>&nbsp;&nbsp;OpenTable -Diners Choice Best of Orlando / Central Florida East Best Overall Restaurants
                    <br>
                    <div class="OTA">Best Overall, Best Food, Best Service, Best Ambiance, & Best Value</div>
                    <br><br>
                    <!--goodfood-->
                    <a target="_blank" href="http://goodfood100restaurants.org/work/k-restaurant/"> <img src="assets/images/goodFood100.jpg" style="height: 50px; width: auto"></a>&nbsp;&nbsp;2017 Good Food 100 Restaurants list
                    <br><br>
                    <!--usatoday-->
                    <a target="_blank" href="https://www.10best.com/destinations/florida/orlando/restaurants/best-restaurants/"> <img src="assets/images/USAToday.jpg" style="height: 50px; width: auto"></a>&nbsp;&nbsp;Orlando's Best Restaurants: Top-Tier Tables to Lauded Local Faves
                    <br><br>
                    <!--fodors-->
                    <a target="_blank" href="http://www.fodors.com/world/north-america/usa/florida/orlando/restaurants/reviews/k-restaurant-wine-bar-430210"><img src="assets/images/fodors.png" style="height: 50px; width: auto"></a>&nbsp;&nbsp;Fordor's Travel - Fodor's Choice for Restaurant in Orlando, Florida

                </p>

            </div><!--end of col-md-8 middle-->

            <div class="col-md-2"></div>
        </div>
    </div>
</div> <!--end of wrap-->
<div class="push"></div>

<?php include 'include/footer.php';?>

</body>
</html>