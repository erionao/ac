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
<section class="cover_lastest_news_page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Latest News</h1>
                <hr class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Read the latest news regarding Canonica and our partners. Learn what upcoming activities and conferences we are hosting. </p>
                <a href="#news_h_first_s"><button  class="wow fadeInLeft hover_propperty" data-wow-duration="1s" data-wow-delay=".5s">More <i class="fa fa-angle-right"></i></button></a>
            </div>
        </div>
    </div>
</section>


<!-- NEWSES SECTION -->

<section class="news_section_panels" id="news_h_first_s">
    <div class="container">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-md-12 news_panel_inside no_padding wow fadeInUp row" data-wow-duration="0.5s" data-wow-delay=".3s">
                <div class="col-md-5 no_padding">
                    <img src="{{ URL::to('/uploads/blogs/' . $blog['images'][0]['image']) }}">
                </div>
                <div class="col-md-7 only_text_panel">
                    <h1>{{$blog->title}}</h1>
                    {{$blog->content}}
                    <a href="#"><div class="col-md-6 col-xs-6 read_more_ins no_padding">Read more <img src="webassets/img/hover_arrow-01.svg" class="arrow_hover"></div></a>
                    <div class="col-md-6 col-xs-6 solial_inside">
                        <i class="fa fa-facebook"></i>
                        <i class="fa fa-twitter"></i>
                        <i class="fa fa-instagram"></i>
                    </div>
                </div>
            </div>
           @endforeach





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
