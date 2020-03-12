<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="cache-control" content="no-cache" />
    <meta name="description"
        content="blackjackbasses; Custom Made and Refurbished Basses, www.blackjackbasses.com, www.ui-design-engineering.com, www.myuikit.com, front-end web design and development.">
    <meta name="author" content="adam-marsh.com">
    <meta name='apple-mobile-web-app-capable' content='yes'>
    <meta name='apple-touch-fullscreen' content='yes'>
    <meta name='apple-mobile-web-app-status-bar-style' content='black'>
    <meta name='format-detection' content='telephone=no'>
    <link rel="dns-prefetch" href="http://www.blackjackbasses.com/">
    <title>BlackJackBasses - blackjackbasses.com</title>

    <?php include '../sitewide/globals-top.php'; ?>

</head>

<body id="top">
    <!--header start-->
    <?php include '../sitewide/main-nav.php'; ?>
    <!--header end-->
    <!--mega menu end-->
    <main class="mt-0 pt-0">

        <section id="top"
            class="scrollspy banner-wrapper parallax-bg banner-me-bridge fullscreen-banner valign-wrapper overlay"
            data-stellar-background-ratio="0.5">
            <div class="valign-cell">
                <div class="container">
                    <div class="text-center padding-top-50">
                        <h1 class="tt-headline clip is-full-width">
                            <!-- you can use "rotate-1", "letters type", "letters rotate-2", "letters rotate-3", "letters scale", "loading-bar", "slide", "clip is-full-width", "push" -->
                            <span>Custom Built &amp; Refurbished<br />Bad-Ass Basses</span><br />
                            <hr class="testimony" />
                            <span class="tt-words-wrapper">

                                <b class="is-visible"><img src="../dist/img/slider3.jpg" class="slider" />
                                    <hr class="testimony mt-15" /></b>
                                <b><img src="../dist/img/slider5.jpg" class="slider" />
                                    <hr class="testimony mt-15" /></b>
                                <b><img src="../dist/img/slider1.jpg" class="slider" />
                                    <hr class="testimony mt-15" /></b>
                                <b><img src="../dist/img/slider4.jpg" class="slider" />
                                    <hr class="testimony mt-15" /></b>
                                <b><img src="../dist/img/slider2.jpg" class="slider" />
                                    <hr class="testimony mt-15" /></b>
                                <b><img src="../dist/img/slider6.jpg" class="slider" />
                                    <hr class="testimony mt-15" /></b>
                            </span>
                        </h1>
                        <span class="tt-sub-intro">Vintage / Classic / Today</span>
                        <!-- <a href="#contact" class="btn btn-lg orange waves-effect waves-light">Hire Me</a> -->
                    </div>
                </div>
                <!-- /.container -->
            </div>
            <!-- /.valign-cell -->
            <div class="mouse-icon hidden-sm hidden-xs">
                <div class="wheel"></div>
            </div>
        </section>
        <!-- Hero Section End -->
        <!-- Topbar -->
        <?php include '../sitewide/top-bar.php'; ?>
        <!-- Marker Marker Marker Marker Marker Marker Marker Marker Marker -->

        <section id="about"
            class="scrollspy animatedParent section-padding banner-wrapper parallax-bg banner-12 valign-wrapper bg-fixed overlay dark-5"
            data-stellar-background-ratio="0.5" style="height:900px;">
            <?php include '../inc/intro.php'; ?>
        </section>

        <hr />
        <section id="gallery"
            class="scrollspy animatedParent section-padding banner-film parallax-bg bg-fixed overlay dark-5"
            data-stellar-background-ratio="0.5">
            <?php include '../inc/gallery.php'; ?>
        </section>

        <hr />
        <section id="contact" class="scrollspy animatedParent section-padding banner-4 parallax-bg bg-fixed overlay"
            data-stellar-background-ratio="0.5">
            <?php include '../inc/reachout.php'; ?>
        </section>

        <hr />

    </main>
    <footer class="footer footer-four">
        <div class="primary-footer text-center">
            <div class="container">
                <a href="#top"
                    class="page-scroll btn-floating btn-large orange back-top waves-effect waves-light tt-animate btt"
                    data-section="#top">
                    <i class="material-icons">&#xE316;</i>
                </a>
                <ul id="mobile-social-icons" class="social-link tt-animate ltr mt-20" style="text-align:center;">
                    <li>
                        <a href="https://www.facebook.com/david.e.drake" target="_blank">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="http://reverb.com/shop/blackjackbasses" target="_blank">
                            <img class="footer-reverb" src="../dist/img/footer-logo.svg" />
                        </a>
                    </li>
                    <li>
                        <a href=#">
                            <i class="fa fa-music"></i>
                        </a>
                    </li>
                    <li>
                        <a href=#">
                            <i class="fa fa-music"></i>
                        </a>
                    </li>
                    <li>
                        <a href=#">
                            <i class="fa fa-music"></i>
                        </a>
                    </li>
                    <li>
                        <a href=#">
                            <i class="fa fa-music"></i>
                        </a>
                    </li>
                </ul>
                <hr class="mt-15">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-logo">
                            <img src="../dist/img/logo-colored.png" alt="">
                        </div>
                        <span>Copyright &copy; 2020 <a href="#">www.blackjackbasses.com</a> &nbsp; |
                            &nbsp;
                            Designed and Built By <a href="http://www.ui-design-engineering.com"
                                target="_blank">ui-design-engineering.com</a></span>

                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <p id="counter" class="text-center">
                <span>
                    sesid=bjb.v2:&nbsp; <?php
/* counter */
/* opens countlog.txt to read the number of hits */
$data = fopen("../counter.txt", "r");
$count = fgets($data,1000);
fclose($data);
$count = $count + 1;
echo "$count";
echo "\n";
/* opens countlog.txt to change new hit number */
$data = fopen("../counter.txt", "w");
fwrite($data, $count);
fclose($data);
?> &nbsp;.030320
                </span>
            </p>
        </div>

    </footer>


    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-position">
            <img src="../dist/img/logo-colored.png" alt="logo">
            <div class="progress">
                <div class="indeterminate"></div>
            </div>
        </div>
    </div>
    <!-- End Preloader -->
    <div class="links-sites">
        <h1>Adam L Marsh - http://www.adam-marsh.com</h1>
        <h1>Adam L Marsh - http://www.ui-design-engineering.com</h1>
        <h1>GW Latimer - Author, Walking Through Brambles</h1>
        <h1>G. Webster Latimer - Author, Walking Through Brambles</h1>
        <h1>Adam L Marsh - http://www.milkandbourbon.com</h1>
        <h1>Adam L Marsh - http://www.myuikit.com</h1>
        <h1>G.W. Latimer - http://www.thefogandwave.com</h1>
    </div>
    <!-- jQuery -->
    <?php include '../sitewide/globals-bottom.php'; ?>
    <script type="text/javascript" src="../dist/js/animated-headline.min.js"></script>
    <script>

    </script>

</body>

</html>