<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top wow fadeInDown" data-wow-duration="0.6s" data-wow-delay=".3s" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <a class="cd-primary-nav-trigger" href="#0">
                    <span class="cd-menu-icon"></span>
                </a>
            </button>
            <a href="{{ url('/') }}"><img src="{{URL::to('/uploads/cover/'. $logo[0]['image'])}}"></a>
        </div><!--
            <div class="social_media_nav">
                <i class="fa fa-facebook" aria-hidden="true"></i>
                <i class="fa fa-instagram" aria-hidden="true"></i>
            </div>   -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a class="page-scroll" href="#page-top"></a>
                </li>
                <!--  <li class="language_li">
                     <a class="language_en mobile-d-n" href="?lang=english">EN</a>
                 </li>
                 <li class="language_li">
                     <a class="language_fr mobile-d-n" href="?lang=franch">FR</a>
                 </li>
                 <li class="language_li">
                     <a class="language_en mobile-d-n" href="?lang=english">DE</a>
                 </li> -->
                <li class="toogle_bt_top">
                    <a class="cd-primary-nav-trigger mobile-d-n" href="#0">
                        <span class="cd-menu-text">MENU</span><span class="cd-menu-icon"></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>





<nav>
    <ul class="cd-primary-nav">
        <li>
            <a class="#" href="{{ url('/') }}">HOME</a>
        </li>
        <li class="dropdown">
            <a href="" class=" dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                OUR SERVICES <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu drop_down_services wow fadeInDown" data-wow-duration="0.5s" data-wow-delay=".2s" aria-labelledby="dropdownMenuButton">
                <a class="#" href="{{ url('/catering') }}">CATERING</a><br>
                <a class="#" href="{{ url('/consulting') }}">F&B CONSULTING AND MANAGMENT</a><br>
                <a class="#" href="{{ url('/chocolate') }}">CHOCOLATE</a>
            </div>
        </li>
        <li>
            <a class="#" href="{{ url('/history') }}">OUR HISTORY</a>
        </li>
        <li>
            <a class="#" href="{{ url('/career') }}">CAREER</a>
        </li>
        <li>
            <a class="#" href="{{ url('/news')}}">LASTEST NEWS</a>
        </li>
        <li>
            <a class="#" href="{{ url('/contact')}}">CONTACT</a>
        </li>

    </ul>
</nav>

<!--    <div id="overlay">
       <img src="img/preload_logo-01.png" class="move_logo">
       <br>
       <img src="img/preload2-01.png" class="mobile-d-n" >
   </div> -->


<style type="text/css">
    .navbar-default {
        background-color: #272F34;
        border: none;
        padding-top: 30px;
    }
</style>