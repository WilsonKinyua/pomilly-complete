<!doctype html>
<html class="no-js" lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!--
    ========================================================================
        Developed and created by Developer Wilson
        Reach me through email: wilsonkinyuam@gmail.com for any question or something
        Phone Number: +254717255460
    =======================================================================================
     -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ENVIRONMENTAL, OCCUPATIONAL SAFETY & PUBLIC HEALTH CONSULTANCY | Pomilly East African Limited</title>
    @yield("title")
    <meta name="description" content="Content and Theme maintained By Developer Wilson">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="pomilly.com">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    @yield("styles")
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/img/PomillyLogo1.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <!-- Left Social -->
                <div class="header-left-social">
                    <ul class="header-social">
                        <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://www.linkedin.com/" target="_blank"><i
                                    class="fab fa-linkedin-in"></i></a></li>
                        <li> <a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>
                                    <li>info@pomilly.com</li>
                                    <li>+254 751 877 377 | +254 745 462 781</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <!-- Logo -->
                <div class="logo d-none d-lg-block">
                    <a href="/"><img src="{{asset('assets/img/PomillyLogo2.jpg')}}" width="180px" height="98px"
                                     alt=""></a>
                </div>
                <div class="container">
                    <div class="menu-wrapper">
                        <!-- Logo -->
                        <div class="logo logo2 d-block d-lg-none">
                            <a href="/"><img src="{{asset('assets/img/PomillyLogo2.jpg')}}" width="180px"
                                             height="98px" alt=""></a>
                        </div>
                        <!-- Main-menu -->
                        <div class="main-menu d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/">HOME</a></li>

                                    <li><a href="#">COMPANY</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route("aboutus.index") }}">About Us</a></li>
                                            <li><a href="{{ route('missionandvision.index') }}">Mission & Vision</a></li>
                                            <li><a href="{{ route('corevalues.index') }}">Core Values</a></li>
                                            <li><a href="{{ route('motto.index') }}">Motto</a></li>
                                            <li><a href="{{ route('ourhistory.index') }}">Our History</a></li>
                                            <li><a href="{{ route('whatisfoodrecycling.index') }}">What is food Recycling</a></li>
                                            <li><a href="{{ route('whatwedo.index') }}">What We do</a></li>
                                            <li><a href="{{route('depositfood.index')}}">Deposit Food</a></li>
                                            <li><a href="{{route('volunteer.index')}}">Volunteer</a></li>
                                            <li><a href="{{route('donate.index')}}">Donate</a></li>
                                            <li><a href="{{route('whatsnew.index')}}">What's New</a></li>
                                            <li><a href="{{route('careers.index')}}">Careers</a></li>
                                        </ul>
                                    </li>

                                    <li><a href="{{route('team.index')}}">TEAM</a></li>

                                    <li><a href="{{route('ourgoals.index')}}">OUR GOALS</a></li>

                                    <li><a href="#">SERVICES</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('sustainableagricultural.index') }}">SUSTAINABLE
                                                    AGRICULTURAL CONSULTANCY</a></li>
                                            <li><a href="{{ route('foodwasterecyclingindustry.index') }}">FOOD WASTE RECYCLING
                                                    INDUSTRY</a></li>
                                            <li><a href="{{ route('foodbankingfoodsecurity.index') }}">FOOD BANKING & FOOD SECURITY
                                                    CONSULTANCY</a></li>
                                            <li><a href="{{ route('eosphconsultancy.index') }}">ENVIRONMENTAL, OCCUPATIONAL SAFETY &
                                                    PUBLIC HEALTH CONSULTANCY</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="{{route('blog.index')}}">BLOG</a></li>
                                    <li><a href="{{route('contactus.index')}}">CONTACT US</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Header-btn -->
                        <div class="header-search d-none d-lg-block">

                            <div class="hero__btn">
                                <a href="http://www.pomilly.com/webmail" class="btn hero-btn"
                                   data-animation="fadeInLeft" data-delay=".8s">Staff Email</a>
                            </div>

                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Header End -->
</header>
<main>

    @yield("content")

</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        <div class="container">
            <div class="footer-top footer-padding">
                <!-- Footer Menu -->
                <div class="row d-flex justify-content-between">
                    <div class="col-sm-3">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Company</h4>
                                <ul>
                                    <li><a href="{{route('aboutus.index')}}" style="color:white">About Us</a></li>
                                    <li><a href="{{route('missionandvision.index')}}" style="color:white">Mission & Vision</a>
                                    </li>
                                    <li><a href="{{route('corevalues.index')}}" style="color:white">Core Values</a></li>
                                    <li><a href="http://www.pomilly.com/webmail" style="color: white !important;" >Staff Email</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Services</h4>
                                <ul>
                                    <li><a href="{{ route('sustainableagricultural.index') }}"
                                           style="color:white">SUSTAINABLE AGRICULTURAL CONSULTANCY</a></li>
                                    <li><a href="{{ route('foodwasterecyclingindustry.index') }}" style="color:white">FOOD WASTE
                                            RECYCLING INDUSTRY</a></li>
                                    <li><a href="{{ route('foodbankingfoodsecurity.index') }}" style="color:white">FOOD BANKING &
                                            FOOD SECURITY CONSULTANCY</a></li>
                                    <li><a href="{{ route('eosphconsultancy.index') }}" style="color:white">ENVIRONMENTAL,
                                            OCCUPATIONAL SAFETY & PUBLIC HEALTH CONSULTANCY</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="{{route('contactus.index')}}" style="color:white">Contact Us</a></li>
                                    <li><a href="{{route('team.index')}}" style="color:white">Our Team</a></li>
                                    <li><a href="{{route('ourgoals.index')}}" style="color:white">Our Goals</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Let’s Get Social</h4>
                                <!-- <a href="http://www.pomilly.com/webmail" class="genric-btn primary e-large">Staff
                                        Email
                                    </a> -->
                                <div class="footer-social mt-3">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a style="background: rgb(136, 136, 50);" href="#"><i class="fab fa-linkedin"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer Heading -->


            </div>
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p>
                                <!-- Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved -->
                                Copyright © Pomilly East African Limited
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+254 745 462781", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
            pre_filled_message: "Hi there 👋 Welcome to Pomilly East Africa Limited", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<!-- JS here -->


<script src="{{asset('assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{asset('assets/js/wow.min.js')}}"></script>
<script src="{{asset('assets/js/animated.headline.js')}}"></script>
<script src="{{asset('assets/js/jquery.magnific-popup.js')}}"></script>

<!-- Date Picker -->
<script src="{{asset('assets/js/gijgo.min.js')}}"></script>
<!-- Nice-select, sticky -->
<script src="{{asset('assets/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>

<!-- counter , waypoint -->
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/waypoints.min.js')}}"></script>

<!-- contact js -->
<script src="{{asset('assets/js/contact.js')}}"></script>
<script src="{{asset('assets/js/jquery.form.js')}}"></script>
<script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/mail-script.js')}}"></script>
<script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>
