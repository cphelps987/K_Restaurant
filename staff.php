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
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li class="active"><a href="staff.php">Staff</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="awards.php">Awards</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="gardenHouse.php">Catering</a></li>
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
            </div>
            <div class="col-md-8 middle">
                <h1>Meet the Chefs</h1>

                <div class="row">
                    <div class="col-md-4">
                        <div class="staff">
                            <img src="assets/images/Chad.jpg" alt="Chad" class="Chef">
                            <div class="overlay">
                                <div class="text">Chad Phelps
                                    <p>Owner & Executive Chef</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--end of sm 4-->
                    <div class="col-md-8">
                        <div class="bio">
                            <h3>Chad Phelps</h3>
                            <h4>Owner & Executive Chef</h4>
                            <p style="padding-top: 15px;">K Restaurant has recently been purchased in July by the new owner, Chad Phelps, who plans to keep the same great food and service the community knows and loves. Same concept and values of farm to table.

                                Phelps comes from a culinary arts and business background. He retired after 21 years in the Navy as a Chef on submarines. He moved to Florida in the 1990's and began working at Florida Hospital Celebration as an Executive Chef and won awards for his vegetarian recipes. Phelps furthered his career by owning and operating a catering business. He spent the last 13 years teaching and creating a culinary curriculum for federal prison program to teach prisoners culinary skills to be able to get a job after prison. Chad Phelps loved visiting K Restaurant as a customer. Once he heard about the sale he knew he wanted to continue the great work the previous owner started with the help of Ryan McLaughlin (Chef de Cuisine) and Michelle Hulbert (Pastry Chef) and the amazing K Restaurant staff.
                            </p>
                        </div>
                    </div>
                </div> <!--end of row1-->
                <br><br>
                <!--<img src="assets/images/group3.jpg" style="width:100%" class="group">-->
                <br><br>
                <h1>Meet the Staff</h1>

                <div class="row">
                    <div class="col-md-4">
                        <div class="staff">
                            <img src="assets/images/Austin.jpg" alt="Austin" class="Chef">
                            <div class="overlay">
                                <div class="text">Austin Jecko
                                    <p>Front of House Manager</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--end of sm 4-->
                    <div class="col-md-8">
                        <div class="bio">
                            <h3>Austin Jecko</h3>
                            <h4>Front of House Manager</h4>
                            <p style="padding-top: 15px;">
                                Austin Jecko started his career as a bartender at age 18 and has worked on Park Ave and Restaurant Row. While living in College Park his curiosity for the converted house on the main street captured his interest. Jecko started at K Restaurant as a bartender when it served only beer and wine.  As the Front of the House Manager for the past 4 years, he stated that the atmosphere has pushed him to grow and learn more about beer and wine. Jecko's goal for K Restaurant was to get a full-liquor license to be able to demonstrate his creative and experimental side for craft cocktails. As K Restaurant achieved that goal, Jecko enjoys the ability to make spirit mixtures as a drink chemist to make new creations taste amazing. Jecko expressed the K staff is like a family and it is rare to find a group of people who work well together. He loves being able to work alongside his work family and the talented chefs in the kitchen. He hopes to continue to cater to the community and give the best dining experience Orlando has to offer.
                            </p>
                        </div>
                    </div>
                </div> <!--end of row1-->


            </div> <!--end of col-md-8 middle-->
            <div class="col-md-2"></div>
        </div>
    </div> <!--end of container-->
</div> <!--end of wrap-->
<div class="push"></div>

<?php include 'include/footer.php';?>

</body>
</html>