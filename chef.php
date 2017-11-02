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
                    <li class="active"><a href="chef.php">Chef</a></li>
                    <li><a href="menu.php">Menu</a></li>
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
                            <h3>Chad Phelps - Owner & Executive Chef</h3>
                            <p style="padding-top: 15px;">K Restaurant has recently been purchased in July by the new owner, Chad Phelps, who plans to keep the same great food and service the community knows and loves. Same concept and values of farm to table.

                            Phelps comes from a culinary arts and business background. He retired after 21 years in the Navy as a Chef on submarines. He moved to Florida in the 1990's and began working at Florida Hospital Celebration as an Executive Chef and won awards for his vegetarian recipes. Phelps furthered his career by owning and operating a catering business. He spent the last 13 years teaching and creating a culinary curriculum for federal prison program to teach prisoners culinary skills to be able to get a job after prison. Chad Phelps loved visiting K Restaurant as a customer. Once he heard about the sale he knew he wanted to continue the great work the previous owner started with the help of Ryan McLaughlin (Chef de Cuisine) and Michelle Hulbert (Pastry Chef) and the amazing K Restaurant staff.
                            </p>
                        </div>
                    </div>
                </div> <!--end of row1-->

                <div class="row">
                    <div class="col-md-4">
                        <div class="staff">
                            <img src="assets/images/Ryan.jpg" alt="Ryan" class="Chef">
                            <div class="overlay">
                                <div class="text">Ryan McLaughlin
                                    <p>Chef de Cuisine</p>
                                </div>
                            </div>
                        </div>
                    </div> <!--end of sm 4-->
                    <div class="col-md-8">
                        <div class="bio">
                            <h3>Ryan McLaughlin - Chef de Cuisine</h3>
                            <p style="padding-top: 15px;">Coming Soon</p>
                        </div>
                    </div> <!--end of sm 8-->
                </div> <!--end of row2-->

                <div class="row">
                    <div class="col-md-4">
                        <div class="staff">
                            <img src="assets/images/Michelle.jpg" alt="Michelle" class="Chef">
                            <div class="overlay">
                                <div class="text">Michelle Hulbert

                                    <p>Pastry Chef</p>
                                </div>
                            </div>
                        </div>
                    </div><!--end of md 4-->
                    <div class="col-md-8">
                        <div class="bio">
                            <h3>Michelle Hulbert - Pastry Chef</h3>
                            <p style="padding-top: 15px;">Michelle Hulbert has been K Restaurant’s Pastry Chef for 6.5 years. Her passion for cooking started when she wanted to learn to cook for her family. Hulbert’s enjoyment for cooking led her to make cooking a career. She attended Le Cordon Bleu College of Culinary Arts graduating with the highest honors in January 2011. While in college Hulbert worked at Café Murano in Altamonte working in garde manger and the grill. Hulbert heard of K Restaurant and the owner Kevin Fonzo who had brought a new way of eating to Orlando called “farm to table”. K Restaurant was a way for her to be as creative as possible and stay true to herself in the kitchen. After graduation, Hulbert set a goal to work at K Restaurant. Six months to the day, Hulbert landed the Pastry Chef position and has been at K Restaurant ever since. She loves working at K Restaurant because it gives her the flexibility to use seasonal and fresh ingredients. Her desserts can be nostalgic or playful but she makes them her own. Hulbert has represented K Restaurant in the James Beard Kitchen (2014), Emeril Lagasse Boudin Bourbon & Beer (2016), and Pastry in the Park (2017) as she strives to establish herself as one of top Pastry Chefs in Orlando. </p>
                        </div>
                    </div><!--end of sm 8-->
                </div> <!--end of row3-->
                <br><br>
                <img src="assets/images/group3.jpg" style="width:100%" class="group">
             </div> <!--end of col-md-8 middle-->
            <div class="col-md-2"></div>
        </div>
    </div> <!--end of container-->
</div> <!--end of wrap-->
<div class="push"></div>

<?php include 'include/footer.php';?>

</body>
</html>