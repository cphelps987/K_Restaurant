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
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="awards.php">Awards</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li class="active"><a href="events.php">Events</a></li>
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
                <h1>Events</h1>
                <div class="row">
                    <div class="col-sm-6">
                        <p>We keep our guests updated about events and happenings via our email list which you can easily be a part of! Simply subscribe to the K email list! We send out event emails every other week to inform interested guests on upcoming events, specials, limited menu items, etc.  </p>

                        <br>

                        <div class="createsend-button" style="height:27px;display:inline-block;" data-listid="j/B9/E3E/25F/821144290EB6C8C5">
                        </div><script type="text/javascript">(function () { var e = document.createElement('script'); e.type = 'text/javascript'; e.async = true; e.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://btn.createsend1.com/js/sb.min.js?v=3'; e.className = 'createsend-script'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(e, s); })();</script>
                    </div> <!--end of md 6-->
                    <div class="col-sm-6">
                        <img src="assets/images/gardenPatio.jpg" style="width: 100%">
                   </div> <!-- end of md 6-->
                </div> <!--end of row1-->

                <br><br>

                <div class="row">
                    <div class="col-sm-6">
                        <h3>Wild Game Dinner</h3>
                        <p>First Annual Wild Game Dinner
                            Five Courses with wine pairing- featuring rabbit, boar, and elk. November 16, 2017, at 6:30 PM. Ticket price includes sales tax and gratuity.
                            <br>
                            Reservations Required</p>

                        <a href="https://www.eventbrite.com/e/wild-game-dinner-tickets-39262119055" target="_blank">
                            <input type="button" class="btn btn-default" value="RSVP" /></a> <br><br>

                    </div> <!--end of md 6-->
                    <div class="col-sm-6">
                        <img src="assets/images/web_wild_game.gif" style="width: 100%">
                    </div> <!--end of md 6-->
                </div> <!--end of row2-->

                <br><br>

                <div class="row">
                    <div class="col-sm-6">
                        <h3>Wine Flight Friday</h3>
                            <p>Wine Flight Friday is hosted on the third Friday of the Month. Each month is themed by a region/state/country/continent. November 17 theme France Wines - you can expect a Bubble, White, and two Reds. Ticket for the flight is $25 per person. <br>Reservations not required.​</p>

                        <h3>Future Wine Flight Friday</h3>
                            <p>​December 15<br>
                                January 19<br>
                             ​</p>

                    </div><!--end of md 6-->
                    <div class="col-sm-6">
                        <img src="assets/images/WFF.gif" style="width: 100%">
                    </div><!--end of md 6-->
                </div> <!--end of row3-->

                <br><br>

                <div class="row">
                    <div class="col-sm-6">
                        <h3>Truffle Dinner</h3>
                        <p>Annual Truffle Dinner
                            Five Courses with wine pairing- featuring truffles from Italy, France, and United States. December 4, 2017, at 6:30 PM. Ticket price includes sales tax and gratuity.
                            <br>
                            Reservations Required</p>

                        <a href="https://www.eventbrite.com/e/truffle-dinner-tickets-39060767808" target="_blank">
                            <input type="button" class="btn btn-default" value="RSVP" /></a> <br><br>

                    </div><!--end of md 6-->
                    <div class="col-sm-6">
                        <img src="assets/images/instagram_truffle.gif" style="width: 100%">
                    </div><!--end of md 6-->
                </div> <!--end of row4-->

            </div> <!--  end of col-md-8-->
            <div class="col-md-2"></div>
        </div>
    </div>
</div> <!--end of wrap-->
<div class="push"></div>
<?php include 'include/footer.php';?>

</body>
</html>