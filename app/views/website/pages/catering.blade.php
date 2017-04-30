<!DOCTYPE html>
<html lang="en"  ng-app="manjakos-landscape-website">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Swiss Canonica World</title>


    <!-- Tab Logo -->
{{--<link rel="icon" href={{URL::to('/uploads/cover/'. $logo[0])}}">--}}


<!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('webassets/css/styles.css')}}">
    <link rel="stylesheet" href="{{URL::to('js/sweetalert.css')}}"/>



</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
@include('website.includes.navigation', array($logo))


<!-- First Section Cover Image HomePage -->
<section class="cover_food_supply_page" style="background-image: url({{ URL::to('/uploads/background/' . $sections[0]['images'][0]['image']); }}) !important">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Catering</h1>
                <hr class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">{{$sections[0]['content']}}</div>
                <a href="#catering_first_s"><button class="wow fadeInLeft hover_propperty" data-wow-duration="1s" data-wow-delay=".5s">More <i class="fa fa-angle-right"></i></button></a>
            </div>
        </div>
    </div>
</section>

<!-- Second Section Homepage -->

<section class="inerpages_section_home" id="catering_first_s">
    <div class="container-fluid">
        <div class="row first_food_inn" style="background-image: url({{ URL::to('/uploads/background/' . $sections[1]['images'][0]['image']); }}) !important">
            <div class="col-md-6 ">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Business</h1>
                <!-- <h4 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">FEATURE MAIN DESCRIPTION</h4> -->
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">{{$sections[1]['content']}}</div>

            </div>
            <div class="col-md-6 no_padding mobile-d-n">
            </div>
        </div>


        <div class="row second_food_inn"style="background-image: url({{ URL::to('/uploads/background/' . $sections[2]['images'][0]['image']); }}) !important">
            <div class="col-md-6 no_padding mobile-d-n">
            </div>
            <div class="col-md-6 ">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">School catering</h1>
                <!-- <h4 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">FEATURE MAIN DESCRIPTION</h4> -->
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">{{$sections[2]['content']}}</div>

            </div>
        </div>


        <div class="row third_food_inn" @if(count($sections[3]['images'] )> 0)style="background-image: url({{ URL::to('/uploads/background/' . $sections[3]['images'][0]['image']); }}) !important" @endif>
            <div class="col-md-6 ">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Custom Catering</h1>
                <!-- <h4 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">FEATURE MAIN DESCRIPTION</h4> -->
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">{{$sections[3]['content']}}</div>
            </div>
            <div class="col-md-6 no_padding mobile-d-n">
            </div>
        </div>

        <!--  <div class="row forth_food_inn">
             <div class="col-md-6 no_padding mobile-d-n">
             </div>
             <div class="col-md-6 ">
                 <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Facility</h1>
                 <h4 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".35s">FEATURE MAIN DESCRIPTION</h4>
                 <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                 <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
             </div>
         </div>


         <div class="row fifth_food_inn">
             <div class="col-md-6 ">
                 <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Staff Canteen</h1>
                 <h4 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">FEATURE MAIN DESCRIPTION</h4>
                 <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                 <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
             </div>
             <div class="col-md-6 no_padding mobile-d-n">
             </div>
         </div>

         <div class="row sixth_food_inn">
             <div class="col-md-6 no_padding mobile-d-n">
             </div>
             <div class="col-md-6 ">
                 <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Facility</h1>
                 <h4 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">FEATURE MAIN DESCRIPTION</h4>
                 <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
                 <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero</p>
             </div>
         </div> -->
    </div>
    </div>
</section>

<!-- Footer General -->
@include('website.includes.general-footer')

<!-- jQuery -->
<script type="text/javascript" src="{{URL::to('/webassets/js/scripts.js')}}"></script>

<!-- Angular & Sweet Alert -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
<script src="{{URL::to('/webassets/js/app.js')}}" type="text/javascript"></script>
<script src="{{URL::to('/js/sweetalert.min.js')}}" type="text/javascript"></script>
<script>
    new WOW().init();
</script>
{{--<script type="text/javascript" src="js/notify.js"></script>--}}

{{--<script src="mail.js"></script>--}}

</body>

</html>
