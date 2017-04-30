<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Creative Responsive Bootstrap Multi-Purpose HTML Template">
    <meta name="keywords" content="H2O, Creative, Agency, Portfolio, Freelancer, Shop, Store,Bootstrap, HTML, Template, One page">
    <meta name="author" content="Vadzim Liashkevich">

    <!-- SITE TITLE -->
    <title>American Clinic</title>

    <!-- =========================
          FAV AND TOUCH ICONS
    ============================== -->
    <link rel="shortcut icon" href="{{URL::to('webassets/images/ac.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/css/ac_style.css')}}" />

    <!-- <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png"> -->

    <!-- =========================
         STYLESHEETS
    ============================== -->

    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/css/master.css')}}" />

</head>

<body data-spy="scroll" data-target=".navbar">

<div class="preloader" id="preloader">
    <img src="{{URL::to('webassets/images/preloader.gif')}}" alt="" />
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


            <div class="doctor-b">
                <img src="{{URL::to('webassets/icons/ac_2.svg')}}" alt="">
            </div>

            <!-- HEADER BUTTONS -->


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
                            <li><a href="art.php">ART</a></li>
                            <li><a href="lindjet.php">Lindjet</a></li>
                            <li><a href="gjinekologjia.php">Gjinekologjia</a></li>
                            <li><a href="dermatologjia.php">Dermatologjia</a></li>
                            <li><a href="neonatologjia.php">Neonatologjia</a></li>
                            <li><a href="laboratori.php">Laboratori Biokimik</a></li>
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
                        <a href="doctors.php">STAFI</a>
                        <!-- <ul class="dropdown-menu" role="menu">
							<li><a href="doctors.html">Our doctors</a></li>
                            <li><a href="doctor.html">Doctor</a></li>
                        </ul> -->
                    </li>
                    <li class="dropdown">
                        <a id="latest_news" href="#">LAJMET E FUNDIT</a>
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
                        <a href="gallery.php">GALERIA</a>
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
<!-- =========================
     END MAIN MENU
============================== -->


<!-- =========================
     HEADER SLIDER
============================== -->
<div id="slider" class="slider">
    <div class="sp-slides">

        <!-- HEADER SLIDER ITEM -->
        <div class="sp-slide">
            <img class="sp-image" src="{{URL::to('webassets/css/images/blank.gif')}}" alt=""
                 data-src="{{URL::to('webassets/images/1slider.png')}}" />
            <div class="container">
                <!--   <h3 class="sp-layer slider-welcome"
                      data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                      data-show-transition="left" data-hide-transition="left"
                      data-show-delay="0" data-hide-delay="0">
                     Welcome to american clinic
                  </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Ne e bëjmë të mundur
                </h1>

                <h2 class="sp-layer slider-subtitle"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="400" data-hide-delay="400">

                </h2>

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600">
                    Me një staf të trajnuar me standardet më të larta etike dhe shëndetësore, <br> nën udhëhaqejen e Dr. Spec. Behar Kusari jemi të gatshëm të ju ndihmojmë në çdo kohë.
                </p>

                <p class="sp-layer slider-button"
                   data-position="leftCenter" data-horizontal="15" data-vertical="300"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="800" data-hide-delay="800">
                    <a href="about.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                </p>

            </div>
        </div>

        <!-- HEADER SLIDER ITEM -->
        <div class="sp-slide">
            <img class="sp-image" src="{{URL::to('webassets/css/images/blank.gif')}}" alt=""
                 data-src="{{URL::to('webassets/images/2slider.jpg')}}" />
            <div class="container">
                <!--           <h3 class="sp-layer slider-welcome"
                              data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                              data-show-transition="left" data-hide-transition="left"
                              data-show-delay="0" data-hide-delay="0">
                              Healthy kids
                          </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Lindje normale pa dhimbje
                </h1>

                <!--     <h2 class="sp-layer slider-subtitle"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="400" data-hide-delay="400">
                        Special price for children - $99
                    </h2> -->

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600">
                    Lindja normale është proces natyral fiziologjik i trupit të njeriut. <br>Ne, në American Clinic i inkurajojmë të gjitha nënat për lindje normale me anestezion lokal epidural. <br> Në rastet kur mjeku specialist për shkaqe shëndetësore propozon lindje me prerje cezariane, <br> stafi është gjithmonë i gatshëm për ndërhyrje.
                </p>

                <p class="sp-layer slider-button"
                   data-position="leftCenter" data-horizontal="15" data-vertical="300"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="800" data-hide-delay="800">
                    <a href="lindjet.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                </p>

            </div>
        </div>

        <!-- HEADER SLIDER ITEM -->
        <div class="sp-slide">
            <img class="sp-image arp-image-slider" src="{{URL::to('webassets/css/images/blank.gif')}}" alt=""
                 data-src="{{URL::to('webassets/images/arp_slider.jpg')}}" />
            <div class="container">
                <!--        <h3 class="sp-layer slider-welcome"
                           data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                           data-show-transition="left" data-hide-transition="left"
                           data-show-delay="0" data-hide-delay="0">
                           Healthy kids
                       </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Asistimi I Reprodukuar <br> Mjekësor
                </h1>

                <!--      <h2 class="sp-layer slider-subtitle"
                         data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                         data-show-transition="left" data-hide-transition="left"
                         data-show-delay="400" data-hide-delay="400">
                         Special price for children - $99
                     </h2> -->

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600">
                    Me një laborator të teknologjisë së fundit dhe nën mbikqyrjen e Dr. Spec. Behar Kusari, <br> jemi këtu të ju ndihmojmë në udhëtimin tuaj familjar.

                </p>

                <p class="sp-layer slider-button"
                   data-position="leftCenter" data-horizontal="15" data-vertical="300"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="800" data-hide-delay="800">
                    <a href="art.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                </p>

            </div>
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="{{URL::to('webassets/css/images/blank.gif')}}" alt=""
                 data-src="{{URL::to('webassets/images/prp_slider.jpg')}}" />
            <div class="container">

                <!--    <h3 class="sp-layer slider-welcome"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="0" data-hide-delay="0">
                        A beautiful smile is our task!
                    </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Dermatologjia <br> dhe Kozmetika
                </h1>

                <!--       <h2 class="sp-layer slider-subtitle"
                          data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                          data-show-transition="left" data-hide-transition="left"
                          data-show-delay="400" data-hide-delay="400">
                          Healthy teeth - healthy body
                      </h2> -->

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600" id="prp-paragraph">
                    Regjenero lëkurën tuaj në mënyrë natyrale <br> me trajtimin PRP përmes plazmës dhe trombocideve të gjakut.
                </p>

                <p class="sp-layer slider-button"
                   data-position="leftCenter" data-horizontal="15" data-vertical="300"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="800" data-hide-delay="800">
                    <a href="dermatologjia.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                </p>

            </div>
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="css/images/blank.gif" alt=""
                 data-src="{{URL::to('webassets/images/4_slider.jpg')}}" />
            <div class="container">
                <!--        <h3 class="sp-layer slider-welcome"
                           data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                           data-show-transition="left" data-hide-transition="left"
                           data-show-delay="0" data-hide-delay="0">
                           Healthy kids
                       </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Neonatologjia
                </h1>

                <!--      <h2 class="sp-layer slider-subtitle"
                         data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                         data-show-transition="left" data-hide-transition="left"
                         data-show-delay="400" data-hide-delay="400">
                         Special price for children - $99
                     </h2> -->

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600">
                    Në American Clinic mjekët tonë specialist të Pediatrisë dhe Neonatologjisë janë në <br>krye të detyrës për përkujdesjen e fëmiut tuaj  gjatë 24 orëve në 7 ditët e javës.
                </p>

                <p class="sp-layer slider-button"
                   data-position="leftCenter" data-horizontal="15" data-vertical="300"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="800" data-hide-delay="800">
                    <a href="neonatologjia.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                </p>

            </div>
        </div>
        <div class="sp-slide">
            <img class="sp-image" src="{{URL::to('webassets/css/images/blank.gif')}}" alt=""
                 data-src="{{URL::to('webassets/images/bo_slider.jpg')}}" />
            <div class="container">
                <!--        <h3 class="sp-layer slider-welcome"
                           data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                           data-show-transition="left" data-hide-transition="left"
                           data-show-delay="0" data-hide-delay="0">
                           Healthy kids
                       </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Blloku operativ
                </h1>

                <!--      <h2 class="sp-layer slider-subtitle"
                         data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                         data-show-transition="left" data-hide-transition="left"
                         data-show-delay="400" data-hide-delay="400">
                         Special price for children - $99
                     </h2> -->

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600">
                    I paisur me aparaturen më moderne dhe gjithmonë i mirëmbajtur për ndërhyrje. <br> Pa marr parasysh kohën, stafi ynë është gjithmonë i gatshëm për ndërhyrje.
                </p>

                <!--     <p class="sp-layer slider-button"
                        data-position="leftCenter" data-horizontal="15" data-vertical="300"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="800" data-hide-delay="800">
                        <a href="blloku.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                    </p> -->

            </div>
        </div>
        <!-- HEADER SLIDER ITEM -->
        <div class="sp-slide">
            <img class="sp-image" src="{{URL::to('webassets/css/images/blank.gif')}}" alt=""
                 data-src="{{URL::to('webassets/images/3slider.jpg')}}" />
            <div class="container">

                <!-- 	<h3 class="sp-layer slider-welcome"
                        data-position="leftCenter" data-horizontal="15" data-vertical="-370"
                        data-show-transition="left" data-hide-transition="left"
                        data-show-delay="0" data-hide-delay="0">
                        A beautiful smile is our task!
                    </h3> -->

                <h1 class="sp-layer slider-title text-shadow"
                    data-position="leftCenter" data-horizontal="15" data-vertical="-230"
                    data-show-transition="left" data-hide-transition="left"
                    data-show-delay="200" data-hide-delay="200">
                    Laboratori Biokimik
                </h1>

                <!--       <h2 class="sp-layer slider-subtitle"
                          data-position="leftCenter" data-horizontal="15" data-vertical="-120"
                          data-show-transition="left" data-hide-transition="left"
                          data-show-delay="400" data-hide-delay="400">
                          Healthy teeth - healthy body
                      </h2> -->

                <p class="sp-layer slider-text text-shadow"
                   data-position="leftCenter" data-horizontal="15" data-vertical="80"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="600" data-hide-delay="600">
                    Laboratori ynë i paisur me të gjitha paisjet për analiza biokimike <br> që ju mundëson t’i kryeni të gjitha analizat biokimike në një vend.
                </p>

                <p class="sp-layer slider-button"
                   data-position="leftCenter" data-horizontal="15" data-vertical="300"
                   data-show-transition="left" data-hide-transition="left"
                   data-show-delay="800" data-hide-delay="800">
                    <a href="laboratori.php" class="btn btn-primary btn-me-shume">ME SHUME</a>
                </p>

            </div>
        </div>
    </div>
</div>
<!-- =========================
     END HEADER SLIDER
============================== -->

<!-- =========================
     SERVICES
============================== -->
<div class="services" id="services">
    <div class="container-fluid">
        <div class="row">

            <!-- SERVICES ITEM -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-primary-2">
                <div class="service-icon">
                    <img src="{{URL::to('webassets/images/fertility.png')}}">
                </div>
                <div class="service-title">
                    <h3>ART</h3>
                </div>
                <div class="service-text">
                    Me një laborator të teknologjisë së fundit dhe nën mbikqyrjen e Dr. Spec. Behar Kusari, jemi këtu të ju ndihmojmë në udhëtimin tuaj familjar.s
                </div>
            </div>

            <!-- SERVICES ITEM -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-2">
                <div class="service-icon">
                    <img src="{{URL::to('webassets/images/laboratory.png')}}">
                </div>
                <div class="service-title">
                    <h3>Laboratori Biokimik</h3>
                </div>
                <div class="service-text">
                    Laboratori ynë i paisur me të gjitha paisjet për analiza biokimike që ju mundëson t’i kryeni të gjitha analizat biokimike në një vend.
                </div>
            </div>

            <!-- SERVICES ITEM -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-3">
                <div class="service-icon">
                    <img src="{{URL::to('webassets/images/cream.png')}}">
                </div>
                <div class="service-title">
                    <h3>Dermatologjia</h3>
                </div>
                <div class="service-text">
                    Regjenero lëkurën tuaj në mënyrë natyrale me trajtimin PRP përmes plazmës dhe trmbocideve të gjakut.
                </div>
            </div>

            <!-- SERVICES ITEM -->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 service bg-child-4">
                <div class="service-icon">
                    <img src="{{URL::to('webassets/images/baby.png')}}">
                </div>
                <div class="service-title">
                    <h3>Lindjet</h3>
                </div>
                <div class="service-text">
                    Lindja normale është proces natyral fiziologjik i trupit të njeriut. Ne, në American Clinic i inkurajojmë të gjitha nënat për lindje normale me anestezion lokal epidural. <br> Gjithashtu, stafi ynë gjithmonë është i gatshëm për lindje me prerje cezariane.
                </div>
            </div>

        </div>
    </div>
</div>
<!-- =========================
     END SERVICES
============================== -->


<!-- =========================
     ABOUT
============================== -->
<div class="about">
    <div class="container">
        <div class="row">

            <!-- ABOUT TEXT -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-text">
                <h2 class="section-title"><span class="bold700">Për</span> klinikën</h2>
                <p>

                    Që nga viti 1996 nën udhëheqjen e Dr. Spec. Behar Kusari dhe përmes trajnimeve të stafit e zhvillimit të teknologjisë, të paisur me aparaturën më të sofistikuar, jemi të përkushtuar të ju ndimojmë në sfidat e reja jetësore. Në fillim në trajtimin e infertilitetit femror dhe mashkullor e tani edhe me trajtimet e dermatologjisë, me repartin e neonatologjisë bllokun operativ dhe bllokun e lindjeve. <br><br>
                    Më 8 mars 2017, në dhjetë vjetorin e hapjes së klinkës për infertilitet dhe gjinekologji, i përuruam hapësirat e reja të spitalit special për gjinekologji, obstetrikë dhe infertilitet. Me një hapësirë të rehatshme dhe luksoze tani spitali special është i paisur me teknologjinë më moderne të sallave të lindjes dhe bllokut operativ për ndërhyrje të lindjeve me prerje cezariane.


                </p>
                <a class="readmore" href="about.php">Më shumë…</a></p>
            </div>

            <!-- ABOUT BACKGROUND -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 about-bg">
            </div>

        </div>
    </div>
</div>
<!-- =========================
     END ABOUT
============================== -->





<!-- =========================
     DOCTORS
============================== -->
<div class="doctors doktorat">
    <div class="container">
        <div class="row">

            <h2 class="section-title">Stafi ynë <span class="bold700">mjekësor</span></h2>
            <p class="section-subtitle">
                Nën udhëheqjen e Dr. Spec. Behar Kusari dhe një stafi të gjërë nga fusha të tjera të mjekësisë si Neonatolog e Pediatër, Gjinekolog, Embriolog, Anesteziolog, Dermatolog, dhe një staf teknik e administrativ të trajnuar sipas standardeve më të larta botërore.
            </p>

            <div class="doctors-container">
                <div class="owl-doctors" id="owl-doctors">

                    <!-- DOCTORS ITEM -->
                    <div class="doctors-item">
                        <div class="doctors-item-container">
                            <div class="doctors-item-image">
                                <img src="{{URL::to('webassets/images/stafi/nexhmije-kusari.jpg')}}" alt="" />
                            </div>
                            <div class="doctors-item-name">Dr. Nexhmije Kusari</div>
                            <div class="doctors-item-position">Embriologe</div>
                        </div>
                        <!-- <div class="doctors-item-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                        <div class="doctors-item-button">
                            <a href="#bookform2" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
                        </div> -->
                    </div>

                    <!-- DOCTORS ITEM -->
                    <div class="doctors-item">
                        <div class="doctors-item-container">
                            <div class="doctors-item-image">
                                <img src="{{URL::to('webassets/images/stafi/behar-kusari.jpg')}}" alt="" />
                            </div>
                            <div class="doctors-item-name">Dr.Spec. Behar Kusari</div>
                            <div class="doctors-item-position">Specialist i Infertilitetit</div>
                        </div>
                        <!--  <div class="doctors-item-social">
                             <a href="#"><i class="fa fa-facebook"></i></a>
                             <a href="#"><i class="fa fa-twitter"></i></a>
                             <a href="#"><i class="fa fa-skype"></i></a>
                         </div>
                         <div class="doctors-item-button">
                             <a href="#bookform3" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
                         </div> -->
                    </div>

                    <!-- DOCTORS ITEM -->
                    <div class="doctors-item">
                        <div class="doctors-item-container">
                            <div class="doctors-item-image">
                                <img src="{{URL::to('webassets/images/stafi/nehat-kusari.jpg')}}" alt="" />
                            </div>
                            <div class="doctors-item-name">Dr. Spec. Nehat Kusari</div>
                            <div class="doctors-item-position">Specialist Internist - Ultrasonist</div>
                        </div>
                        <!-- <div class="doctors-item-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                        <div class="doctors-item-button">
                            <a href="#bookform4" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
                        </div> -->
                    </div>

                    <!-- DOCTORS ITEM -->
                    <div class="doctors-item">
                        <div class="doctors-item-container">
                            <div class="doctors-item-image">
                                <img src="{{URL::to('webassets/images/stafi/faton-xhiha.jpg')}}" alt="" />
                            </div>
                            <div class="doctors-item-name">Dr. Faton Xhiha</div>
                            <div class="doctors-item-position">Doktor Specialist</div>
                        </div>
                        <!-- <div class="doctors-item-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                        <div class="doctors-item-button">
                            <a href="#bookform4" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
                        </div> -->
                    </div>

                    <!-- DOCTORS ITEM -->
                    <!-- <div class="doctors-item">
                        <div class="doctors-item-container">
                            <div class="doctors-item-image">
                                <img src="images/doctor5.jpg" alt="" />
                            </div>
                            <div class="doctors-item-name">Leslie Adams</div>
                            <div class="doctors-item-position">Prosthodontics</div>
                        </div>
                        <div class="doctors-item-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                        <div class="doctors-item-button">
                            <a href="#bookform6" class="fancybox-1 btn btn-default"><span class="plus">+</span> BOOK APPOINTMENT</a>
                        </div>
                    </div>
         -->

                </div>
                <!-- DOCTORS BUTTONS -->
                <div class="carousel-btn carousel-next" id="next-doctors"><i class="fa fa-angle-right"></i></div>
                <div class="carousel-btn carousel-prev" id="prev-doctors"><i class="fa fa-angle-left"></i></div>
            </div>

        </div>
    </div>
</div>
<!-- =========================
     END DOCTORS
============================== -->






<!-- =========================
    REVIEW
============================== -->
<!-- <div class="review">
    <div class="container">
        <div class="row">

            <h2 class="section-title"><span class="bold700">TESTIMONIALS</span></h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  </p>

            <div class="review-container">
                <div class="owl-review" id="owl-review">


                    <div class="review-item">
                        <div class="review-item-image">
                            <img src="images/review1.png" alt="" />
                        </div>
                        <div class="review-item-text">This was my first dental treatment in many years and Dr. Callahan made me feel relaxed and calm. It was completely painless and issue free. I thoroughly recommend both Dr. Callahan and Dental clinic. Excellent caring staff! </div>
                        <div class="review-item-name">George Clooney</div>
                        <div class="review-item-position">American Clinic Patient</div>
                        <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                    </div>

                    <div class="review-item">
                        <div class="review-item-image">
                            <img src="images/review2.png" alt="" />
                        </div>
                        <div class="review-item-text">I would like to say a big thank you to all the team at Dental Clinic, from the charming and efficient reception staff to all the dental team. Dr Wyatt's is a truly first class outfit that are the epitome of professionalism. Satisfied with the service. </div>
                        <div class="review-item-name">Tom Hardy</div>
                        <div class="review-item-position">General Dentistry</div>
                        <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                    </div>



                    <div class="review-item">
                        <div class="review-item-image">
                            <img src="images/review3.jpg" alt="" />
                        </div>
                        <div class="review-item-text">I'm new to Dental Clinic and I have got to say that I am rather impressed with their team's professionalism. I booked online through their website, and I immediately got a call from Diana, their receptionist, confirming my appointment. </div>
                        <div class="review-item-name">Tracey Todd</div>
                        <div class="review-item-position">Teeth Whitening</div>
                        <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                    </div>



                    <div class="review-item">
                        <div class="review-item-image">
                            <img src="images/review4.jpg" alt="" />
                        </div>
                        <div class="review-item-text">Hands down the best dental clinic I've been to. You'll pay a little more than other clinics but you'll get it right the first time. From the reception to the coffee and down to the dentists; simply awesome! Great customer service. Very satisfied. </div>
                        <div class="review-item-name">William Murphy</div>
                        <div class="review-item-position">Crown, Root Canal</div>
                        <div class="review-item-quote"><img src="images/quote.png" alt="" /></div>
                    </div>

                </div>
                <!-- REVIEW BUTTONS -->
<!--           <div class="carousel-btn carousel-next news-buttons" id="next-review"><i class="fa fa-angle-right"></i></div>
          <div class="carousel-btn carousel-prev news-buttons" id="prev-review"><i class="fa fa-angle-left"></i></div> -->
</div>

</div>
</div>
</div> -->
<!-- =========================
    END REVIEW
============================== -->


<!-- =========================
    BLOG
============================== -->
<div class="blog" id="ac_news">
    <div class="container">
        <div class="row">

            <h2 class="section-title">LAJMET <span class="bold700">E FUNDIT</span></h2>
            <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim <br> ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

            <div class="blog-container">
                <div class="owl-blog" id="owl-blog">

                    <!-- BLOG ITEM -->
                    <div class="blog-item news-item">
                        <div class="blog-item-image news-image">
                            <img src="{{URL::to('webassets/images/news/american-clinic.png')}}" alt="" />
                            <div class="blog-item-date data"><i class="fa fa-calendar-o"></i> 08.03.2017</div>
                            <!--  <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 7</div> -->
                        </div>
                        <div class="blog-item-title"><h3><a href="news_1.php">Përurohet objekti i ri i Klinikës Amerikane (Video)</a></h3></div>
                        <div class="blog-item-author"><a href="#"></a></div>
                        <div class="blog-item-text">Në dhjetëvejtorin e punës Klinika Amerikane në Prishtinë ka përuruar objektin e ri. Me kushte të standardeve më të larta dhe me staf të specializuar tani janë krijuar edhe kushtet për ofrimin e shërbimeve të nivelit më të lartë për shëndetin e femrës.</div>
                        <div class="blog-item-button"><a href="news_1.php" class="btn btn-primary-1">Më shumë</a></div>
                    </div>

                    <div class="blog-item news-item">
                        <div class="blog-item-image news-image">
                            <img src="{{URL::to('webassets/images/news/n_k.png')}}" alt="" />
                            <div class="blog-item-date data"><i class="fa fa-calendar-o"></i> 25.03.2017</div>

                        </div>
                        <div class="blog-item-title"><h3><a href="news_4.php">Këshilla dermatologjike nga Dr.Spec. Nexhmije Kusari për emisionin Imazh në RTK</a></h3></div>
                        <div class="blog-item-author"><a href="#"></a></div>
                        <div class="blog-item-text">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus
                        </div>
                        <div class="blog-item-button"><a href="news_4.php" class="btn btn-primary-1">Më shumë</a></div>
                    </div>

                    <!-- BLOG ITEM -->
                    <div class="blog-item news-item">
                        <div class="blog-item-image news-image">
                            <img src="{{URL::to('webassets/images/news/news_1.jpg')}}" alt="" />
                            <div class="blog-item-date data"><i class="fa fa-calendar-o"></i> 12.03.2017</div>
                            <!--          <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 12</div> -->
                        </div>
                        <div class="blog-item-title"><h3><a href="news_2.php">Lindja e Binjakëve</a></h3></div>
                        <div class="blog-item-author"><a href="#"></a></div>
                        <div class="blog-item-text">Familja Sylejmani pas dhjetë viteve pritje u gëzuan me ardhjen në jetë të binjakëve pranë Klinikës Amerikane.</div>
                        <div class="blog-item-button"><a href="news_2.php" class="btn btn-primary-1">Më shumë</a></div>
                    </div>



                    <!-- BLOG ITEM -->
                    <div class="blog-item news-item">
                        <div class="blog-item-image news-image">
                            <img src="{{URL::to('webassets/images/news/news_2.jpg')}}" alt="" />
                            <div class="blog-item-date data"><i class="fa fa-calendar-o"></i> 14.03.2017</div>
                            <!--   <div class="blog-item-comments"><i class="fa fa-comments-o"></i> 7</div> -->
                        </div>
                        <div class="blog-item-title"><h3><a href="news_3.php">Lindja vogëlushit Kron</a></h3></div>
                        <div class="blog-item-author"><a href="#"></a></div>
                        <div class="blog-item-text">Familja Pllana u gëzua me ardhjen në jetë të vogëlushit të tyre Kroni.</div>
                        <div class="blog-item-button"><a href="news_3.php" class="btn btn-primary-1">Më shumë</a></div>
                    </div>

                </div>
                <!-- BLOG BUTTONS -->
                <div class="carousel-btn carousel-next" id="next-blog"><i class="fa fa-angle-right"></i></div>
                <div class="carousel-btn carousel-prev" id="prev-blog"><i class="fa fa-angle-left"></i></div>
            </div>

        </div>
    </div>
</div>
<!-- =========================
    END BLOG
============================== -->


<!-- =========================
    TIPS AND FAQ
============================== -->
<!-- <div class="tipsfaq">
    <div class="container">
        <div class="row">

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 tips">
            </div>

            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 tips">
                <h2 class="section-title"><span class="bold700">TOP TIPS</span> FROM DOCTORS</h2>

                <div class="tips-tabs">
                    <ul class="nav nav-tabs tabs-carousel">
                        <li class="active"><a href="#tips1" data-toggle="tab">Lorem Ipsum</a></li>
                        <li><a href="#tips2" data-toggle="tab">Dolor Sit Amet</a></li>
                        <li><a href="#tips3" data-toggle="tab">Cunecum ases</a></li>
                        <li><a href="#tips4" data-toggle="tab">Asterius as</a></li>

                    </ul>
                    <div class="tips-btn tips-next" id="next-tips"><i class="fa fa-angle-right"></i></div>
                    <div class="tips-btn tips-prev" id="prev-tips"><i class="fa fa-angle-left"></i></div>
                </div>

                <div class="tips-content">
                    <div class="tab-content">


                        <div class="tab-pane fade active in tips-content-item" id="tips1">
                            <div class="tips-content-item-text">
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. <span class="inner-text-color">Aenean massa.</span> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <span class="inner-text-color">Nulla consequat massa quis enim.</span> Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                <div class="tips-content-item-btn">
                                    <a href=# class="btn btn-primary-1">READ MORE</a>
                                </div>
                            </div>
                            <div class="tips-content-item-image">
                                <img src="images/blog_author1.png" alt="" />
                                <div class="tips-content-item-name">
                                    <a href="#">Dr.Spec. Behar Kusari</a>
                                </div>
                                <div class="tips-content-item-position">
                                    Specialist i Infertilitetit
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade tips-content-item" id="tips2">
                            <div class="tips-content-item-text">
                               <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. <span class="inner-text-color">Aenean massa.</span> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
                                <p>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. <span class="inner-text-color">Nulla consequat massa quis enim.</span> Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                                <div class="tips-content-item-btn">
                                    <a href=# class="btn btn-primary-1">READ MORE</a>
                                </div>
                            </div>
                            <div class="tips-content-item-image">
                                <img src="images/blog_author2.jpg" alt="" />
                                <div class="tips-content-item-name">
                                    <a href="#">Arnie Alban</a>
                                </div>
                                <div class="tips-content-item-position">
                                    Pedodontics
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade tips-content-item" id="tips3">
                            <div class="tips-content-item-text">
                                <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                                <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                                <div class="tips-content-item-btn">
                                    <a href=# class="btn btn-primary-1">READ MORE</a>
                                </div>
                            </div>
                            <div class="tips-content-item-image">
                                <img src="images/blog_author3.jpg" alt="" />
                                <div class="tips-content-item-name">
                                    <a href="#">Dustin Callahan</a>
                                </div>
                                <div class="tips-content-item-position">
                                    Orthodontist
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade tips-content-item" id="tips4">
                            <div class="tips-content-item-text">
                                <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                                <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                                <div class="tips-content-item-btn">
                                    <a href=# class="btn btn-primary-1">READ MORE</a>
                                </div>
                            </div>
                            <div class="tips-content-item-image">
                                <img src="images/blog_author4.jpg" alt="" />
                                <div class="tips-content-item-name">
                                    <a href="#">Kristin Weaver</a>
                                </div>
                                <div class="tips-content-item-position">
                                    Hygienist
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade tips-content-item" id="tips5">
                            <div class="tips-content-item-text">
                                <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                                <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                                <div class="tips-content-item-btn">
                                    <a href=# class="btn btn-primary-1">READ MORE</a>
                                </div>
                            </div>
                            <div class="tips-content-item-image">
                                <img src="images/blog_author5.jpg" alt="" />
                                <div class="tips-content-item-name">
                                    <a href="#">Leslie Adams</a>
                                </div>
                                <div class="tips-content-item-position">
                                    Prosthodontics
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade tips-content-item" id="tips6">
                            <div class="tips-content-item-text">
                                <p>Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.</p>
                                <p>Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish".</p>
                                <div class="tips-content-item-btn">
                                    <a href=# class="btn btn-primary-1">READ MORE</a>
                                </div>
                            </div>
                            <div class="tips-content-item-image">
                                <img src="images/blog_author6.jpg" alt="" />
                                <div class="tips-content-item-name">
                                    <a href="#">Helen Edwards</a>
                                </div>
                                <div class="tips-content-item-position">
                                    Pediatric Dentistry
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12 tips">
            </div>



        </div>
    </div>
</div> -->
<!-- =========================
    END TIPS AND FAQ
============================== -->


<!-- =========================
    CLIENTS
============================== -->

<!-- =========================
    END CLIENTS
============================== -->

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
                    <i class="flaticon-navigation-arrow"></i> Magjistralja Prishtinë - Shkup<br>
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
    POPUP FORMS
============================== -->






<!-- =========================
    END POPUP FORMS
============================== -->

<div class="totop" id="totop">
    <i class="fa fa-angle-up"></i>
</div>

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
    $("#latest_news").click(function() {
        $('html, body').animate({
            scrollTop: $("#ac_news").offset().top
        }, 2000);
    });
</script>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>