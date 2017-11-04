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
                    <li><a href="chef.php">Chef</a></li>
                    <li class="active"><a href="menu.php">Menu</a></li>
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
            </div>
            <div class="col-md-8 middle">
            <div>
                <h1>Menu</h1>
                <p>The menu changes daily according to the availability of fresh ingredients from locally sourced Central Florida farms and artisans. The K menu is New-American cuisine.
                    <br><br>
                    Please call ahead of time if you need any food accommodations. </p>
                    <br><br>

               <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#menu">Menu</a></li>
                    <li><a data-toggle="tab" href="#menu1">Sweet Endings</a></li>
                    <li><a data-toggle="tab" href="#menu2">Bar List</a></li>
                    <li><a data-toggle="tab" href="#menu3">Happy Hour Menu</a></li>

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

                </div> <!--end of tab content-->

              <!--  <a href="https://onedrive.live.com/view.aspx?cid=6df4eaf32db52c86&id=documents&resid=6DF4EAF32DB52C86%21376&app=Word&authkey=!AK7iPULt3zDUSvY&&wdAccPdf=0" target="_blank">
                    <input type="button" class="btn btn-default" value="K Menu" /></a>

                <a href="https://onedrive.live.com/view.aspx?cid=6df4eaf32db52c86&id=documents&resid=6DF4EAF32DB52C86%21378&app=Word&authkey=!AL0Id_C-8U6oLwA&&wdAccPdf=0" target="_blank">
                    <input type="button" class="btn btn-default" value="Dessert Menu" /></a>

                <a href="https://onedrive.live.com/view.aspx?cid=6df4eaf32db52c86&id=documents&resid=6DF4EAF32DB52C86%21386&app=Word&authkey=!APfonfwsNLzwBeY&&wdAccPdf=0" target="_blank">
                    <input type="button" class="btn btn-default" value="Happy Hour Menu" /></a>

                <a href="https://onedrive.live.com/view.aspx?cid=6df4eaf32db52c86&id=documents&resid=6DF4EAF32DB52C86%21379&app=Word&authkey=!AG78UAWFhjUQctI&&wdAccPdf=0" target="_blank">
                    <input type="button" class="btn btn-default" value="Wine & Beer Menu" /></a>-->

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

</body>
</html>