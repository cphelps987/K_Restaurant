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
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <?php include 'include/logo.php';?>
            </div><!--end of col 2 K logo-->

            <div class="col-md-8 middle middle1">

                <h3>Contact List</h3>
                <p>Courtney Phelps<br>
                    Catering, Marketing, & Other <br>

                    <a href="mailto:courtney.phelps@kwinebar.com">
                        <input type="button" class="btn buttonPage" value="Email" /></a> <br><br>

                <p>Austin Jecko<br>
                    Front of House - Employment or Concerns<br>

                    <a href="mailto:austin@kwinebar.com">
                        <input type="button" class="btn buttonPage" value="Email" /></a> <br><br>


                </p>

            </div><!--end of md-8 middle-->

            <div class="col-md-2">

            </div> <!--end of col 2-->
        </div> <!--end of main row-->
    </div> <!--end of container-->
</div> <!--end of wrap-->


<?php include 'include/footer.php';?>

</body>
</html>