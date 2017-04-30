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
<section class="cover_chocolate_page" style="background-image: url({{ URL::to('/uploads/background/' . $sections[0]['images'][0]['image']); }}) !important">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Chocolate</h1>
                <hr class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">{{$sections[0]['content']}} </div>
                <a href="#chocolate_first_s"><button class="wow fadeInLeft hover_propperty" data-wow-duration="1s" data-wow-delay=".5s">More <i class="fa fa-angle-right"></i></button></a>
            </div>
        </div>
    </div>
</section>


<!-- Second Section Homepage -->

<section class="inerpages_section_home" id="chocolate_first_s">
    <div class="container-fluid">
        <div class="row first_chocolate_inn" style="background-image: url({{ URL::to('/uploads/background/' . $sections[1]['images'][0]['image']); }}) !important">
            <div class="col-md-6 "><br>&nbsp;
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Chocolate Retail</h1>
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">{{$sections[1]['content']}}</div>
            </div>
            <div class="col-md-6 no_padding mobile-d-n">
            </div>
        </div>


        <div class="row second_chocolate_inn" style="background-image: url({{ URL::to('/uploads/background/' . $sections[2]['images'][0]['image']); }}) !important">
            <div class="col-md-6 no_padding mobile-d-n">
            </div>
            <div class="col-md-6 "><br>&nbsp;
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Canonica Chocolate</h1>
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">{{$sections[2]['content']}} <br>&nbsp;<br>&nbsp;</div>
            </div>
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
