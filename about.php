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
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="chef.php">Chef</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="events.php">Events</a></li>
                    <li><a href="contact.php">Contact</a></li>
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
                <h1>About</h1>
                <p>K Restaurant & Wine Bar is a locally owned and operated. The menu changes daily according to the availability of fresh ingredients from locally sourced Central Florida farms and artisans. The K menu is New-American cuisine with an Italian flare. We pride ourselves on our quality food and service. K Restaurant also accommodates private parties and events.</p>

                <!--MAP-->
                <iframe class="map" width="100%" height="350" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ0cg9ymZ654gRpPJc2TTCufo&key=AIzaSyCeel10zfVvCOhrrUG_3ArjQNGQC2sKelw" allowfullscreen></iframe>

                        <h1>Awards & Reviews</h1>
                        <p>
                            <a target="_blank" href="https://www.opentable.com/best-orlando-florida-restaurants?topic=Best%20Overall"><img src="assets/images/openTable.png" style="height: 50px; width: auto"></a>&nbsp;&nbsp;OpenTable -Diners Choice Best of Orlando / Central Florida East Best Overall Restaurants
                            <br>
                            Best Overall, Best Food, Best Service, Best Ambiance, & Best Value
                            <br><br>
                            <a target="_blank" href="http://goodfood100restaurants.org/work/k-restaurant/"> <img src="assets/images/goodFood100.jpg" style="height: 50px; width: auto"></a>&nbsp;&nbsp;2017 Good Food 100 Restaurants list
                            <br><br>
                            <a target="_blank" href="https://www.10best.com/destinations/florida/orlando/restaurants/best-restaurants/"> <img src="assets/images/USAToday.jpg" style="height: 50px; width: auto">&nbsp;&nbsp;Orlando's Best Restaurants: Top-Tier Tables to Lauded Local Faves
                        </p>



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
            </div><!--end of col-md-8 middle-->

            <div class="col-md-2"></div>
        </div>
    </div>
</div> <!--end of wrap-->
<div class="push"></div>
<?php include 'include/footer.php';?>

</body>
</html>