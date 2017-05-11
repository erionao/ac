<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- SITE TITLE -->
    <title>American Clinic</title>

    <!-- =========================
          FAV AND TOUCH ICONS
    ============================== -->
    <link rel="shortcut icon" href="{{URL::to('webassets/images/ac.ico')}}">
    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->

    <!-- =========================
         STYLESHEETS
    ============================== -->

    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/css/master.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/css/ac_style.css')}}" />
</head>

<body data-spy="scroll" data-target=".navbar">

<div class="preloader" id="preloader">
    <img src="{{URL::to('webassets/images/preloader1.gif')}}" alt="" />
</div>

<!-- =========================
     TOP BAR
============================== -->
<div class="top-bar" id="top-bar">
    <div class="container">
        <div class="row">

            <!-- TOP BAR LEFT -->


            <!-- TOP BAR RIGHT -->



        </div>
    </div>
</div>
<!-- =========================
     END TOP BAR
============================== -->


<!-- =========================
     HEADER
============================== -->
<div class="header" id="header">
    <div class="container">
        <div class="row">

            <!-- HEADER LOGO -->
            <div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
                <div class="header-logo">
                    <a href="index.php"><img src="{{URL::to('webassets/icons/ac_1.svg')}}" alt="" />
                        <span class="bold600 color-child-6"></span><span class="color-child-5"></span>
                    </a>
                </div>
            </div>

            <!-- HEADER BUTTONS -->

            <div class="doctor-b">
                <img src="{{URL::to('webassets/icons/ac_2.svg')}}" alt="">
            </div>


        </div>
    </div>
</div>
<!-- =========================
     END HEADER
============================== -->


<!-- =========================
     MAIN MENU
============================== -->
<div class="top-menu" id="top-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="mobile-bar-cont">

                    <div class="mobile-bar">
                        <div class="show-menu" id="show-menu">
                            <i class="fa fa-bars"></i>
                        </div>
                        <div class="color-sw-open-1" id="color-sw-open-1">
                            <i class="fa fa-gear"></i>
                        </div>
                    </div>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('/') }}" class="active">BALLINA</a></li>
                    <li><a href="{{ url('/about') }}">PËR KLINIKËN</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" href="#">SHËRBIMET</a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/art') }}">ART</a></li>
                            <li><a href="{{ url('/lindjet') }}">Lindjet</a></li>
                            <li><a href="{{ url('/gjinekologjia') }}">Gjinekologjia</a></li>
                            <li><a href="{{ url('/dermatologjia') }}">Dermatologjia</a></li>
                            <li><a href="{{ url('/neonatologjia') }}">Neonatologjia</a></li>
                            <li><a href="{{ url('/laboratori') }}">Laboratori Biokimik</a></li>
                            <!--  <li><a href="services.html">X-rays</a></li>
                             <li><a href="services.html">Crowns</a></li>
                             <li><a href="services.html">Fillings and bridges</a></li>
                             <li><a href="services.html">Implants</a></li>
                             <li><a href="services.html">Extractions</a></li>
                             <li><a href="services.html">Root canals</a></li>
                             <li><a href="services.html">Surgical implant placements</a></li> -->
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/doctors') }}">STAFI</a>
                        <!-- <ul class="dropdown-menu" role="menu">
							<li><a href="doctors.html">Our doctors</a></li>
                            <li><a href="doctor.html">Doctor</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/') }}#ac_news">LAJMET E FUNDIT</a>
                        <!--  <ul class="dropdown-menu" role="menu">
                             <li><a href="blog1.html">Right sidebar</a></li>
                             <li><a href="blog2.html">Left sidebar</a></li>
                             <li><a href="blog3.html">No sidebar</a></li>
                             <li><a href="blog4.html">Column right sidebar</a></li>
                             <li><a href="blog_item.html">Post with sidebar</a></li>
                             <li><a href="blog_item2.html">Post no sidebar</a></li>
                         </ul> -->
                    </li>
                    <li class="dropdown">
                        <a href="{{ url('/gallery') }}">GALERIA</a>
                        <!--  <ul class="dropdown-menu" role="menu">
                             <li><a href="gallery1.html">Gallery 1</a></li>
                             <li><a href="gallery2.html">Gallery 2</a></li>
                             <li><a href="prices.html">Prices</a></li>
                             <li><a href="timetable.html">Timetable</a></li>
                             <li><a href="payment.html">Payments</a></li>
                             <li><a href="404.html">404 Page</a></li>
                         </ul> -->
                    </li>
                    <li><a href="#footer" id="contact">KONTAKTI</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a  href="">SQ</a></li>
                    <li><a href="">EN</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<div class="doctors-text">
    <div class="container-fluid doctors-img-container">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 staff-header">

                <!--   <h1 class="sp-layer col-lg-12 col-md-12 col-sm-12 col-xs-12 staff-header-title">we have <span>well trained staff</span> and <span>qualified</span></h1> -->
                <img class="staff-img" src="{{URL::to('webassets/images/services/gjnk1.png')}}">


            </div>
        </div>

    </div>
</div>



<div class="doctors doctors-2">
    <div class="container">
        <div class="row">
            <div class="col-md-2">   </div>
            <div class="col-md-8">
                <h2 class="section-title titulli"><span class="bold700">Gjinekologjia</span></h2>
                <h3 class="qs-text">

                    Kujdesi gjinekologjik përfshinë jo vetëm kontrollat rutinore vjetore, por edhe parashikimin dhe planifikimin për nevojat tuaja shëndetësore për planifikim familjar e veçanërisht në sistemin riprodhues të femrës. <br><br>
                    Mjekët specialist të udhëhequr nga Dr. Spec. Behar Kusari në reaprtin e gjinekologjisë janë të gatshëm gjithmonë të ju ndihmojnë dhe këshillojnë për problemet e përgjithëshme gjinekologjike, të ndonjë problemi shëndetësor më të veçantë të sistemit reproduktiv apo edhe vetëm këshillim për planifikim të shtatzanisë.
                    Reparti i gjinekologjisë i paisur me aparaturat më të sofistikuara për ekzaminime gjnekologjike me ultra tingull 3D dhe 4D nga prodhuesi  me renome botërore General Electic. Paisjet tona të ultra tingullit janë të prodhuara që të mundësojnë ekzaminime të detajuara për shëndetin e femrës, si: <br><br>
                    •   Rezolucion dhe kontrast të lartë të fotografisë <br>
                    •   Efiçiencë dhe saktësi të lartë të diagnostifikimit <br>
                    •   Mundësinë e matjes intrakraniale gjatë tremujorit të parë të shtatzanisë <br>
                    •   Vizualizimi dhe matja e strukturave hipoekoike si trurit të fetusit etj. <br>
                    •   Transparencë dinamike në strukturat anatomike <br>
                    •   Pamje të pastër të sistmit të imët vaskular <br>
                    •   Tingull të pastër për dëgjimin e lëvizjes së foshnjës <br>
                    •   Kryerjen e matjeve gjysëm të automatizuara (BPD, HC, AC, FL and HL)<br><br>

                    Ndërsa Laboratori Biokimik i paisur me aparaturën moderne laboratorike per analiza si PAP test, triple test, analiza biokimike, hormonale që ju bënë të mundur t’i kryeni të gjitha kontrollat në një vend, pa pasur nevojë të vizitoni laboratore e klinika të ndryshme.
                    <br><br><br><br>

                    Me aparaturën tonë të ultra tingullit ju do ta keni mundësinë ta shikoni fytyrën e fëmiut tuaj në detaje
                    <br><br>
                    <img src="{{URL::to('webassets/images/gj-img-bottom.png')}}" alt="" style="width:100%;">





                </h3> </div>

            <div class="col-md-2">   </div>
        </div>
    </div>



    <div class="bookform" id="bookform5">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name5" id="name5" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone5" id="phone5" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email5" id="email5" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker5" name="date5" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker5" name="time5" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message5" id="message5" placeholder="Your message.."></textarea>
                    </div>
                </div>

                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close5" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="{{URL::to('webassets/images/doctor4.jpg')}}" alt="" />
                </div>
                <div class="doctor-info-name">
                    Kristin Weaver
                </div>
                <div class="doctor-info-position">
                    Hygienist
                </div>
                <div class="doctor-info-hours-title">
                    OPENING HOURS
                </div>
                <div class="doctor-info-hours">
                    <div class="doctor-info-hours-clock">
                        <img src="{{URL::to('webassets/images/clock.png')}}" alt="" />
                    </div>
                    <div class="doctor-info-hours-left">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday
                    </div>
                    <div class="doctor-info-hours-right">
                        Closed<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        Closed
                    </div>
                </div>
                <div class="doctor-info-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>



    <div class="bookform" id="bookform6">
        <div class="bookform-left">
            <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
            <form>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                        <input type="text" name="name6" id="name6" data-validation="required" placeholder="Your name" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                        <input type="text" name="phone6" id="phone6" data-validation="required" placeholder="Phone" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                        <input type="text" name="email6" id="email6" placeholder="E-mail" />
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                        <input type="text" class="datepicker-f" id="datepicker6" name="date6" data-validation="required" placeholder="Date" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                        <input type="text" class="timepicker-f" id="timepicker6" name="time6" data-validation="required" placeholder="Time" />
                        <div class="help help-sm help-red">!</div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <textarea name="message6" id="message6" placeholder="Your message.."></textarea>
                    </div>
                </div>

                <div class="row latest-row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                        <button class="btn btn-primary">SUBMIT</button>
                        <a class="fb-close" id="fb-close6" href="javascript:jQuery.fancybox.close();">Cancel</a>
                    </div>
                </div>

            </form>
        </div>
        <div class="bookform-right">

            <div class="doctor-info">
                <div class="doctor-info-image">
                    <img src="{{URL::to('webassets/images/doctor5.jpg')}}" alt="" />
                </div>
                <div class="doctor-info-name">
                    Leslie Adams
                </div>
                <div class="doctor-info-position">
                    Prosthodontics
                </div>
                <div class="doctor-info-hours-title">
                    OPENING HOURS
                </div>
                <div class="doctor-info-hours">
                    <div class="doctor-info-hours-clock">
                        <img src="{{URL::to('webassets/images/clock.png')}}" alt="" />
                    </div>
                    <div class="doctor-info-hours-left">
                        Monday<br>
                        Tuesday<br>
                        Wednesday<br>
                        Thursday<br>
                        Friday<br>
                        Saturday<br>
                        Sunday
                    </div>
                    <div class="doctor-info-hours-right">
                        Closed<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        9:00 am - 7:15 pm<br>
                        Closed
                    </div>
                </div>
                <div class="doctor-info-desc">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </div>
            </div>

        </div>
    </div>
    <!-- =========================
        END POPUP FORMS
    ============================== -->

    <div class="totop" id="totop">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- =========================
   FOOTER
============================== -->
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="row">

                        <!-- FOOTER ITEM 1 -->


                        <!-- FOOTER ITEM 2 -->
                        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 footer-item footer-item-2">
                            <h3 class="footer-title footer-title-line"><i class="fa fa-clock-o"></i> OPENING HOURS</h3>
                            <div class="opening-left">
                                <h3 style="font-size:20px" >  Monday - Sunday</h3> <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <span class="footer_closed"></span>
                            </div>
                            <div class="opening-right">
                                <h3 style="font-size:20px">  24h</h3> <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                                <span class="footer_closed"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer-copyright">
                            <div>
                                Copyrights ©2016 | All Rights Reserved American Clinic
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER ITEM 3 -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-item footer-item-3" id="footer-item-3">
                    <h3 class="footer-title"><i class="fa fa-map-marker"></i> CONTACTS</h3>
                    <div class="footer-item-3-phone">
                        <i class="fa fa-phone"></i> +381 38  248 917  <br>
                        <i class="fa fa-phone"></i> +377 44 126 188 <br>
                        <i class="fa fa-phone"></i> +377 45 126 188
                    </div>
                    <div class="footer-item-3-location">
                        <i class="flaticon-navigation-arrow"></i> Magjistralja Prishtinë - Shkup <br>
                        <i class=""></i>&nbsp;&nbsp;&nbsp;&nbsp; 10.000, Prishtinë, Kosovo
                    </div>
                    <div class="footer-item-3-mail">
                        <i class="fa fa-envelope"></i> <a href="#">info@american-art.com</a>
                    </div>
                    <div class="footer-item-3-socials">
                        <a target="_blank" href="https://www.facebook.com/dr.beharkusari"><i class="fa fa-facebook"></i></a>
                        <a target="_blank" href="https://www.youtube.com/channel/UCs--UA3OD27VbH-P4FNJQig"><i class="fa fa-youtube"></i></a>
                    </div>
                </div>

                <!-- FOOTER ITEM 4 -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 footer-item footer-item-4" id="footer-item-4">
                </div>

            </div>
        </div>
    </div>
    <!-- =========================
        END FOOTER
    ============================== -->
    <!-- =========================
         RESPONSIVE STYLE
     ============================== -->

    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/css/responsive.css')}}" />

    <!-- =========================
         SCRIPTS
    ============================== -->
    <!-- JQUERY -->
    <script src="{{URL::to('webassets/js/jquery-2.2.0.min.js')}}"></script>

    <!-- BOOTSTRAP -->
    <script src="{{URL::to('webassets/js/bootstrap.min.js')}}"></script>

    <!-- SLIDER PRO -->
    <script src="{{URL::to('webassets/js/jquery.sliderPro.min.js')}}"></script>

    <!-- LIGHTBOX -->
    <script src="{{URL::to('webassets/js/jquery.fancybox.pack.js')}}"></script>

    <!-- CAROUSEL -->
    <script src="{{URL::to('webassets/js/owl.carousel.min.js')}}"></script>

    <!-- STAR RATING -->
    <script src="{{URL::to('webassets/js/jquery.barrating.min.js')}}"></script>

    <!-- ISOTOPE FILTER -->
    <script src="{{URL::to('webassets/js/isotope.pkgd.min.js')}}"></script>

    <!-- SCROLLSPY -->
    <script src="{{URL::to('webassets/js/scrollspy.js')}}"></script>

    <!-- DATEPICKER -->
    <script src="{{URL::to('webassets/js/moment.js')}}"></script>
    <script src="{{URL::to('webassets/js/bootstrap-datetimepicker.min.js')}}"></script>

    <!-- FORM VALIDATOR -->
    <script src='{{URL::to('webassets/js/jquery.form-validator.js')}}'></script>

    <!-- SELECT STYLING -->
    <script src='{{URL::to('webassets/js/jquery.selectBox.js')}}'></script>

    <!-- CUSTOM SCRIPT -->
    <script src="{{URL::to('webassets/js/theme.js')}}"></script>

    <script src="{{URL::to('webassets/js/script.js')}}"></script>
    <!-- GOOGLE MAPS -->
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyC1N87a_NHjocaepKKcovPAYTMUkJBr9pQ&amp;language=en&amp;sensor=true"></script>


    <script>
        $("#contact").click(function() {
            $('html, body').animate({
                scrollTop: $("#footer").offset().top
            }, 2000);
        });
    </script>
    <script>
        if($(window).width() > 768)
        {
            $("html, body").animate({ scrollTop: 600 }, 800);
        }
    </script>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</body>
</html>