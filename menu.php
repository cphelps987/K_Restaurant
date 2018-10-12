<!DOCTYPE html>
<html lang="en">

<?php include 'include/header.php';?>

<body>
<span itemscope itemtype="http://schema.org/Restaurant">
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
                    <li><a href="staff.php">Staff</a></li>
                    <li class="active"><a href="menu.php">Menu</a></li>
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
            <div>
                <h1>Menu</h1>
                <p>The menu changes daily according to the availability of fresh ingredients from locally sourced Central Florida farms and artisans. The K menu is <span itemprop="servesCuisine">New-American cuisine</span>. <span itemprop="priceRange" content="$$">Price range $$</span>.
                    <br><br>
                    Please call ahead of time if you need any food accommodations. </p>
                    <br><br>





               <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu">Menu</a></li>
                    <li><a data-toggle="tab" href="#menu1">Sweet Endings</a></li>
                    <li><a data-toggle="tab" href="#menu2">Bar List</a></li>
                    <li><a data-toggle="tab" href="#menu3">Happy Hour Menu</a></li>
                    <li><a data-toggle="tab" href="#menu4">Brunch Menu</a></li>

                </ul>

                <div class="tab-content">
                    <div id="menu" class="tab-pane fade in active">
                        <?php include 'include/K_menu.php';?>
                    </div>

                    <div id="menu1" class="tab-pane fade">
                        <?php include 'include/dessert.php';?>
                    </div>

                    <div id="menu2" class="tab-pane fade">
                        <?php include 'include/bar.php';?>
                    </div>

                    <div id="menu3" class="tab-pane fade">
                        <?php include 'include/happyHour.php';?>

                    </div>

                    <div id="menu4" class="tab-pane fade">
                        <?php include 'include/brunch.php';?>

                    </div>

                </div> <!--end of tab content-->


                    <br><br><hr>



                <br><br>

                <div style="padding: 5px;">
                    <h1>Our Local Partners</h1>
                    <p>Orlando's Original Artisan Bakery</p>
                    <p>Frog Song Organics - Hawthorne, FL</p>
                    <p>Palmetto Creek Farms</p>
                    <p>Bradley's Country Store</p>
                    <p>Florida & Co </p>
                    <p>Lake Meadow Naturals</p>
                    <p>The Barefoot Farmer of Samsula / Tomazin Farms​</p>
                </div>
            </div> <!--end of md 8-->

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div> <!--end of wrap-->
<div class="push"></div>

    <?php include 'include/footer.php';?>
</span>
</body>
</html>