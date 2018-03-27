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
                    <li class="active"><a href="about.php">About</a></li>
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
            </div>
            <div class="col-md-8 middle">
                <h1>About</h1>
                <p>K Restaurant & Wine Bar is a locally owned and operated since 2001. The menu changes daily according to the availability of fresh ingredients from locally sourced Central Florida farms and artisans. The K menu is New-American cuisine. We pride ourselves on our quality food and service. K Restaurant also accommodates private parties and events.</p>

                <!--MAP-->
                <iframe class="map" width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ0cg9ymZ654gRpPJc2TTCufo&key=AIzaSyCeel10zfVvCOhrrUG_3ArjQNGQC2sKelw" allowfullscreen></iframe>


                <form class="form-inline">
                    <div class="form-group reviews">
                        <div id="yelp-biz-badge-rrc-P1UhY20Phe5rf-0FDN8yZw"><a href="http://yelp.com/biz/k-restaurant-orlando?utm_medium=badge_star_rating_reviews&amp;utm_source=biz_review_badge" target="_blank">Check out K Restaurant on Yelp</a></div>
                        <script>(function(d, t) {var g = d.createElement(t);var s = d.getElementsByTagName(t)[0];g.id = "yelp-biz-badge-script-rrc-P1UhY20Phe5rf-0FDN8yZw";g.src = "//yelp.com/biz_badge_js/en_US/rrc/P1UhY20Phe5rf-0FDN8yZw.js";s.parentNode.insertBefore(g, s);}(document, 'script'));</script>
                    </div>
                    <div class="form-group reviews">
                        <div id="TA_cdsratingsonlynarrow153" class="TA_cdsratingsonlynarrow">
                            <ul id="tu3OAF48tz2x" class="TA_links 6IxlOVbpz">
                                <li id="ZOszBigvb" class="VyffWF4TF3QQ">
                                    <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/tripadvisor_logo_transp_340x80-18034-2.png" alt="TripAdvisor"/></a>
                                </li>
                            </ul>
                        </div>
                        <script src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=153&amp;locationId=456852&amp;lang=en_US&amp;border=true&amp;display_version=2"></script>
                    </div>
                    <div class="form-group reviews">
                        <div id="TA_certificateOfExcellence406" class="TA_certificateOfExcellence trip">
                            <ul id="1xcLnxAQ1kCE" class="TA_links tYVNML4NtbB">
                                <li id="58VjD5Etcvb" class="z5Gzkz">
                                    <a target="_blank" href="https://www.tripadvisor.com/Restaurant_Review-g34515-d456852-Reviews-K_Restaurant_Wine_Bar-Orlando_Florida.html"><img src="https://www.tripadvisor.com/img/cdsi/img2/awards/CoE2017_WidgetAsset-14348-2.png" alt="TripAdvisor" class="widCOEImg" id="CDSWIDCOELOGO"/></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="form-group reviews">
                        <div class="widget_wrap" style="width:auto;height:auto;"><a href="https://www.zomato.com/orlando/k-restaurant-orlando?utm_source=referral-widget-17062605&utm_medium=review_badge&utm_campaign=widget-business" target="_newtab"><img src="https://www.zomato.com/widgets/review_badge?badge_type=rating_large&res_id=17062605&widget_lang=en"></a></div>
                    </div>
                </form>

                <br><br>
                <p>
                    <a target="_blank" href="http://www.orlandosentinel.com/food-restaurants/os-et-k-restaurant-college-park-review-20171213-story.html">Orlando Sentinel - New owner, same high quality at K Restaurant</a>
                    <br><br>
                    <a target="_blank" href="https://www.scottjosephorlando.com/reviews/recent-reviews/51-american/4110-k-restaurant-wine-bar">Scott Joseph - K Restaurant & Wine Bar</a>
                    <br><br>
                    <a target="_blank" href="http://www.orlandodatenightguide.com/2017/11/k-restaurant-happy-hour-test-drive/">Orlando Date Night - Happy Hour Test Drive: K Restaurant</a>
                    <br><br>
                    <a target="_blank" href="http://www.10best.com/destinations/florida/orlando/restaurants/best-restaurants/">USA Today 10Best - Orlando's Best Restaurants: Top-Tier Tables to Lauded Local Faves (K Restaurant Ranked #1)</a>
                    <br><br>
                </p>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <a target="_blank" href="http://www.community-paper.com/2016/09/06/dixie-highway-through-college-park/"><img src="http://www.community-paper.com/wp-content/uploads/2016/09/1977-116-0002_web.jpg" style="height: auto; width: 100%"></a>
                    </div>
                    <div class="col-md-6">
                        <p class="history">The Roy S. Yates home at 1710 Edgewater Drive in Orlando. A group of men and women can be seen standing in the yard in front of the home. There are cars in the driveway at right and the road in front of the home is brick. Information on the photograph indicates that this was the first home built on Edgewater Drive (formerly Dixie Avenue).
                            Photo courtesy of the Historical Society of Central Florida, Inc.</p>
                    </div>
                </div><!--end of col-md-8 middle-->

                <div class="col-md-2"></div>
            </div>
        </div>
    </div> <!--end of wrap-->
    <div class="push"></div>
    <?php include 'include/footer.php';?>

</body>
</html>