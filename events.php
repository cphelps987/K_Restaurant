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
                    <li><a href="staff.php">Staff</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="awards.php">Awards</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class="active"><a href="events.php">Events</a></li>
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
                <h1>Events</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p>We keep our guests updated about events and happenings via our email list which you can easily be a part of! Simply subscribe to the K email list! We send out event emails every other week to inform interested guests on upcoming events, specials, limited menu items, etc.  </p>

                        <br>

                        <div class="createsend-button" style="height:27px;display:inline-block;" data-listid="j/B9/E3E/25F/821144290EB6C8C5">
                        </div><script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>
                    </div> <!--end of md 6-->
                    <div class="col-md-6">
                        <img src="assets/images/event1.jpg" style="width: 100%">
                        <!--other image is : gardenPatio.jpg-->
                    </div> <!-- end of md 6-->
                </div> <!--end of row1-->

                <br><br><hr>
                <!--PaintNight-->
                <div class="row">
                    <?php include 'include/PaintNite.php';?>
                </div> <!--end of Paint Nite-->


                <br><br><hr>
                <!--Wine Flight Firday-->
                <div class="row">
                    <?php include 'include/wff.php';?>
                </div> <!--end of wine flight friday-->

                <br><br><hr>
                <!--Yappy Hour-->
                <div class="row">
                    <?php include 'include/yappyHour.php';?>
                </div> <!--end of yappyhour-->


                <br><br><hr>
                <!--Grilling in the Garden-->
                <div class="row">
                    <?php include 'include/event3.php';?>
                </div> <!--end of grillinginthegarden-->



                <br><br><hr>
                <!--Artist-->
                <div class="row">

                </div> <!--end of Artists-->



                <!--<br><br><hr>-->
                <!--Yappy Hour-->
                <div class="row">
                </div> <!--end of row3-->


            </div> <!--  end of col-md-8-->
            <div class="col-md-2"></div>
        </div>
    </div>
</div> <!--end of wrap-->
<div class="push"></div>

<?php include 'include/footer.php';?>

</body>
</html>