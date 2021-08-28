<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Nanny Management System</title>
    <!--

    Template 2103 Central

	http://www.tooplate.com/view/2103-central

    -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <link rel="stylesheet" href="css/tooplate-style.css">
    <!-- tooplate style -->

    <script>
        var renderPage = true;

        if (navigator.userAgent.indexOf('MSIE') !== -1
            || navigator.appVersion.indexOf('Trident/') > 0) {
            /* Microsoft Internet Explorer detected in. */
            alert("Please view this in a modern browser such as Chrome or Microsoft Edge.");
            renderPage = false;
        }
    </script>

</head>

<body>
    <!-- Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <div class="container">
        <section class="tm-section-head" id="top">
            <header id="header" class="text-center tm-text-gray">
                <h1>NANNY</h1>
                <p>MANAGEMENT SYSTEM</p>
            </header>

            <nav class="navbar narbar-light">
                <a class="navbar-brand tm-text-gray" href="#">
                    Menu
                </a>
                <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-navicon tm-fa-toggler-icon"></i>
                    </span>
                </button>
                <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link tm-text-gray" href="#top">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-text-gray" href="#tm-section-2">Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-text-gray" href="#tm-section-6">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link tm-text-gray" href="login.php">Login</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="navbar navbar-default navbar-fixed-top">
                <a href="/index.html" class="navbar-brand"></a>
                <botton class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mydropdown">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </botton>

            </div>

            <div class="collapse navbar-collapse" id="mydropdown">

                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">info</a>
                    </li>
                    <li>
                        <a href="#">contact</a>
                    </li>
                </ul>
            </div>
        </section>

        <section class="row" id="tm-section-1">
            <div class="col-lg-12 tm-slider-col">
                <div class="tm-img-slider">
                    <div class="tm-img-slider-item" href="static/images/nanny.jpg">
                        <p class="tm-slider-caption">No one can be better than the one who raised you.</p>
                        <img src="static/images/nanny.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="static/images/image1.jpg">
                        <p class="tm-slider-caption"></p>
                        <img src="static/images/image1.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="static/images/image2.jpg">
                        <p class="tm-slider-caption"></p>
                        <img src="static/images/image2.jpg" alt="Image" class="tm-slider-img">
                    </div>
                    <div class="tm-img-slider-item" href="static/images/image3.jpg">
                        <p class="tm-slider-caption"></p>
                        <img src="static/images/image3.jpg" alt="Image" class="tm-slider-img">
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="tm-section-2 tm-section-mb" id="tm-section-2">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-md-5 mb-5 pr-md-5">
                    <header class="text-center">
                        <i class="fa fa-4x fa-power-off pl-5 pb-5 pr-5 pt-2"></i>
                    </header> -->

                    <!-- <h2>Lorem ipsum dolor</h2>
                    <p>Central Template is provided by <a href="https://www.facebook.com/tooplate" target="_blank">Tooplate</a>. Vestibulum sit amet tortor velit.
                        Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat
                malesuada. </p>

                    <a href="#tm-section-3" class="btn tm-btn-pad-2 float-right">Learn More</a>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-lg-0 mb-md-5 mb-5 pr-md-5">
                    <header class="text-center">
                        <i class="fa fa-4x fa-bolt pl-5 pb-5 pr-5 pt-2"></i>
                    </header>
                    <h2>Lorem ipsum dolor</h2>
                    <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit.
                        Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat
                        malesuada.
                    </p>

                    <a href="#tm-section-4" class="btn tm-btn-pad-2 float-right">Learn More</a>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12">
                    <h2>Nulla maximus hendrerit</h2>
                    <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit.</p>
                    <p>Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada, iaculis est.</p>
                    <p>+ Curabitur a massa malesuada, ullamcorper nisi tempus.</p>
                    <p>+ Maecenas ultricies magna sed suscipit pulvinar.</p>
                    <p>+ Nulla malesuada elit nec nisi aliquet pretium.</p>
                </div>
            </div> -->
        <!-- </section> -->

        <!-- <section class="tm-section-3 tm-section-mb" id="tm-section-3">
            <div class="row">
                <div class="col-md-6 tm-mb-sm-4 tm-2col-l">
                    <div class="image">
                        <img src="img/tm-img-1.jpg" class="img-fluid" />
                    </div>
                    <div class="tm-box-3">
                        <h2>Lorem ipsum dolor</h2>
                        <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor
                            velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat
                            lacus placerat malesuada.</p>
                        <div class="text-center">
                            <a href="#tm-section-5" class="btn btn-big">Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 tm-2col-r">
                    <div class="image">
                        <img src="img/tm-img-2.jpg" class="img-fluid" />
                    </div>
                    <div class="tm-box-3">
                        <header>
                            <h2>Vestibulum sit amet</h2>
                        </header>
                        <p> Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor
                            velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat
                            lacus placerat malesuada.</p>
                        <div class="text-center">
                            <a href="#tm-section-5" class="btn btn-big">Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- <section class="tm-section-4 tm-section-mb" id="tm-section-4">
            <div class="row">

            </div>
        </section> -->

        <section class="tm-section-5" id="tm-section-5">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="image fit">
                        <img src="static/images/nanny.jpg" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12 col-sm-12 pl-lg-0">
                    <div class="media tm-media">
                        <img src="static/images/image1.jpg" class="img-responsive tm-media-img">
                        <div class="media-body tm-box-5">
                            <h2></h2>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <div class="media tm-media">
                        <img src="static/images/image2.jpg" class="img-responsive tm-media-img">
                        <div class="media-body tm-box-5">
                            <h2></h2>
                            <p class="mb-0"></p>
                        </div>
                    </div>
                    <div class="media tm-media">
                        <img src="static/images/image3.jpg" class="img-responsive tm-media-img">
                        <div class="media-body tm-box-5">
                            <h2></h2>
                            <p class="mb-0"> </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="tm-section-6" id="tm-section-6">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-xs-12">
                    <div class="contact_message">
                        <form action="" method="post" class="contact-form">
                            <div class="row mb-2">
                                <div class="form-group col-xl-6">
                                    <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Name" required/>
                                </div>
                                <div class="form-group col-xl-6 pl-xl-1">
                                    <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Email" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="6" placeholder="Message" required></textarea>
                            </div>
                            <button type="submit" class="btn  tm-btn-submit float-right btn-big">Send It Now</button>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5 col-xs-12 tm-contact-right">
                    <div class="tm-address-box">
                        <h2 class="mb-4">Contact Us</h2>
                        <p class="mb-5"></p>
                        <address>
                            we are located at Nairobi West,
                            <br> along Gandhi Avenue road,
                            <br> opposite Summerdale inn.
                        </address>
                    </div>
                </div>
            </div>
        </section>
        <footer class="mt-5">
            <p class="text-center">Copyright © 2021 Nanny Management System - Design: Template</p>
        </footer>
    </div>

    <!-- load JS files -->
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script src="js/popper.min.js"></script>
    <!-- https://popper.js.org/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <!-- Slick Carousel -->

    <script>
        function setCarousel() {
            var slider = $('.tm-img-slider');

            if (slider.hasClass('slick-initialized')) {
                slider.slick('destroy');
            }

            if ($(window).width() > 991) {
                // Slick carousel
                slider.slick({
                    autoplay: true,
                    fade: true,
                    speed: 800,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            } else {
                slider.slick({
                    autoplay: true,
                    fade: true,
                    speed: 800,
                    infinite: true,
                    slidesToShow: 1,
                    slidesToScroll: 1
                });
            }
        }

        $(document).ready(function () {
            if (renderPage) {
                $('body').addClass('loaded');
            }

            setCarousel();

            $(window).resize(function () {
                setCarousel();
            });

            // Close menu after link click
            $('.nav-link').click(function () {
                $('#mainNav').removeClass('show');
            });

            // https://css-tricks.com/snippets/jquery/smooth-scrolling/
            // Select all links with hashes
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top + 1
                            }, 1000, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });
        });
    </script>

</body>

</html>