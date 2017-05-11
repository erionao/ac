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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/core.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lazyload/2.0.3/lazyload.js">
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
                    <li><a href="{{ url('/') }}" class="active">BALLINA</a></li>
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
                    <li class="dropdown active">
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

                <h1 class="sp-layer col-lg-12 col-md-12 col-sm-12 col-xs-12 staff-header-title">we have <span>well trained staff</span> and <span>qualified</span></h1>
                <img class="staff-img" src="{{URL::to('webassets/images/doctors.png')}}">


            </div>
        </div>

    </div>
</div>



<div class="doctors doctors-2">
    <div class="container">
        <div class="row">

            <h2 class="section-title">Stafi ynë <span class="bold700">mjekësor</span></h2>
            <h3 class="qs-text">Nën udhëheqjen e Dr. Spec. Behar Kusari dhe një stafi të gjërë nga fusha të tjera të mjekësisë si Neonatolog e Pediatër, Gjinekolog, Embriolog, Anesteziolog, Dermatolog dhe një staf teknik dhe administrative të trajnuar sipas standardeve më të larta botërore.</h3>
            <div class="doctors-container stafi-container">

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/nexhmije-kusari.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Dr. Nexhmije Kusari</div>
                        <div class="doctors-item-position">Embriologe</div>
                    </div>

                    <!--     <div class="doctors-item-button">
                            <a href="#bookform2" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                        </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
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
                     </div> -->
                    <!--        <div class="doctors-item-button">
                             <a href="#bookform3" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                         </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/nehat-kusari.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Dr.Spec. Nehat Kusari</div>
                        <div class="doctors-item-position">Specialist Internist - Ultrasonist</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--    <div class="doctors-item-button">
                        <a href="#bookform4" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                    </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/faton-xhiha.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Dr. Faton Xhiha</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>

                    <!--     <div class="doctors-item-button">
                            <a href="#bookform5" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                        </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/1s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--        <div class="doctors-item-button">
                             <a href="#bookform6" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                         </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/2s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--     <div class="doctors-item-button">
                         <a href="#bookform7" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/4s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--  <div class="doctors-item-button">
                      <a href="#bookform8" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                  </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/5s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--   <div class="doctors-item-button">
                        <a href="#bookform9" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                    </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/6s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--      <div class="doctors-item-button">
                          <a href="#bookform10" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                      </div> -->
                </div>


                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/7s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--   <div class="doctors-item-button">
                       <a href="#bookform11" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                   </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/8s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--    <div class="doctors-item-button">
                         <a href="#bookform12" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/9s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!-- <div class="doctors-item-button">
                     <a href="#bookform13" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                 </div> -->
                </div>


                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/10s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--      <div class="doctors-item-button">
                          <a href="#bookform14" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                      </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/11s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--    <div class="doctors-item-button">
                         <a href="#bookform15" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/12s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!-- <div class="doctors-item-button">
                     <a href="#bookform16" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                 </div> -->
                </div>


                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/13s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--     <div class="doctors-item-button">
                         <a href="#bookform17" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/14s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--    <div class="doctors-item-button">
                         <a href="#bookform18" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/15s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--     <div class="doctors-item-button">
                         <a href="#bookform19" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/16s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--       <div class="doctors-item-button">
                           <a href="#bookform20" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                       </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/17s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--       <div class="doctors-item-button">
                            <a href="#bookform21" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                        </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/18s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--     <div class="doctors-item-button">
                         <a href="#bookform22" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/19s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--      <div class="doctors-item-button">
                          <a href="#bookform23" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                      </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/20s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--           <div class="doctors-item-button">
                                <a href="#bookform24" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                            </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/21s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--     <div class="doctors-item-button">
                         <a href="#bookform25" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                     </div> -->
                </div>


                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/22s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--        <div class="doctors-item-button">
                            <a href="#bookform26" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                        </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/23s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--   <div class="doctors-item-button">
                        <a href="#bookform27" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                    </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/24s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--   <div class="doctors-item-button">
                       <a href="#bookform28" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                   </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/25s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Filan Fisteku</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--     <div class="doctors-item-button">
                          <a href="#bookform29" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                      </div> -->
                </div>

                <div class="doctors-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="doctors-item-container">
                        <div class="doctors-item-image">
                            <img src="{{URL::to('webassets/images/stafi/26s.jpg')}}" alt="" />
                        </div>
                        <div class="doctors-item-name">Vullnet Kusari</div>
                        <div class="doctors-item-position">Doktor</div>
                    </div>
                    <!--  <div class="doctors-item-social">
                         <a href="#"><i class="fa fa-facebook"></i></a>
                         <a href="#"><i class="fa fa-twitter"></i></a>
                         <a href="#"><i class="fa fa-skype"></i></a>
                     </div> -->
                    <!--       <div class="doctors-item-button">
                           <a href="#bookform30" class="fancybox-1 btn btn-default btn-view">VIEW</a>
                       </div> -->
                </div>


            </div>

        </div>
    </div>
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
<!-- <div class="bookform bookform-1" id="bookform1">
    <div class="bookform-left">
        <h2 class="section-title"><span class="bold700">BOOK APPOINTMENT</span></h2>
                <form>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item f-doctor">
                            <select id="form-doctor" class="form-doctor" name="form-doctor">
                                <option value="1" selected="selected">Select doctor</option>
                                <option value="2">Arnie Alban</option>
                                <option value="3">Wyatt Esmond</option>
                                <option value="4">Dustin Callahan</option>
                                <option value="5">Kristin Weaver</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item name">
                            <input type="text" name="name1" id="name1" data-validation="required" placeholder="Your name" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item phone">
                            <input type="text" name="phone1" id="phone1" data-validation="required" placeholder="Phone" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item email">
                            <input type="text" name="email1" id="email1" placeholder="E-mail" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item date">
                            <input type="text" class="datepicker-f" id="datepicker1" name="date1" data-validation="required" placeholder="Date" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 booking-form-item time-f">
                            <input type="text" class="timepicker-f" id="timepicker1" name="time1" data-validation="required" placeholder="Time" />
                            <div class="help help-sm help-red">!</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                            <textarea name="message1" id="message1" placeholder="Your message.."></textarea>
                        </div>
                    </div>

                    <div class="row latest-row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 booking-form-item">
                            <button class="btn btn-primary">SUBMIT</button>
                            <a class="fb-close" id="fb-close1" href="javascript:jQuery.fancybox.close();">Cancel</a>
                        </div>
                    </div>

                </form>
    </div>
    <div class="bookform-right">

        <div class="bookform-right-info-1">
            <h5>Please select a doctor</h5>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

        </div>

        <div class="bookform-right-info-2">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>

    </div>
</div>



<div class="bookform" id="bookform2">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Dr.  Nexhmije Kusari</span><p class="doc-profession">Embriologe</p></h2>

                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.

                    </div>

                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/nexhmije_kusari.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                       Dr. Nexhmije Kusari
                    </div>
                    <div class="doctor-info-position">
                        Embriologe
                    </div>

                </div>

    </div>
</div>

<div class="bookform" id="bookform3">
       <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Dr.Spec. Behar Kusari</span><p class="doc-profession">Specialist i Infertilitetit</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>

                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/behar_kusari.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Dr.Spec. Behar Kusari
                    </div>
                    <div class="doctor-info-position">
                        Specialist i Infertilitetit
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform4">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Dr.Spec. Nehat Kusari</span><p class="doc-profession">Specialist Internist - Ultrasonist</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/nehat_kusari.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Dr.Spec. Nehat Kusari
                    </div>
                    <div class="doctor-info-position">
                        Specialist Internist - Ultrasonist
                    </div>
                </div>

    </div>
</div>


<div class="bookform" id="bookform5">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Dr. Faton  Xhiha</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/faton_xhiha.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Faton Xhiha
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform6">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/1.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform7">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/2.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform8">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/4.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform9">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/5.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform10">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/6.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform11">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/7.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div><div class="bookform" id="bookform12">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/8.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div><div class="bookform" id="bookform13">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/9.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>


</div><div class="bookform" id="bookform14">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/10.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
</div><div class="bookform" id="bookform15">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/11.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
</div><div class="bookform" id="bookform16">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/12.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>


</div><div class="bookform" id="bookform17">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/13.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
</div><div class="bookform" id="bookform18">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/14.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
</div>

<div class="bookform" id="bookform19">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/15.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform20">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/16.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform21">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/17.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform22">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/18.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform23">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/19.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform24">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/20.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform25">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/21.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>

<div class="bookform" id="bookform26">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/22.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform27">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/23.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>
<div class="bookform" id="bookform28">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/24.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div>


<div class="bookform" id="bookform29">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Filan Fisteku</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/25.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Filan Fisteku
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div><div class="bookform" id="bookform30">
    <div class="bookform-left">
        <h2 class="section"><span class="bold700 doctor-info-header">Vullnet Kusari</span><p class="doc-profession">Doktor</p></h2>
                <form>

                    <div class="row">
                       Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br><br>

                       Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. <br><br>

                       Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.<br><br>

                       Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. <br><br>

                       Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus.
                    </div>


                </form>
    </div>
    <div class="bookform-right">

        <div class="doctor-info">
                    <div class="doctor-info-image">
                        <img src="images/stafi/26.jpg" alt="" />
                    </div>
                    <div class="doctor-info-name">
                        Vullnet Kusari
                    </div>
                    <div class="doctor-info-position">
                        Doktor
                    </div>
                </div>

    </div>
</div> -->



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

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</body>
</html>