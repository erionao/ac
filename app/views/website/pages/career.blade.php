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
<section class="cover_career_page" style="background-image: url({{ URL::to('/uploads/background/' . $sections[0]['images'][0]['image']); }}) !important">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Career with Swiss Canonica</h1>
                <hr class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".2s">
                <div class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">{{$sections[0]['content']}}</div>
                <a href="#career_h_first_s"><button  class="wow fadeInLeft hover_propperty" data-wow-duration="1s" data-wow-delay=".5s">More <i class="fa fa-angle-right"></i></button></a>
            </div>
        </div>
    </div>
</section>


<!-- Fist Section career page -->
<section class="career_first_section_a" id="career_h_first_s">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ URL::to('/uploads/background/' . $sections[1]['images'][0]['image']); }}" class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
            </div>
            <div class="col-md-6">
                <h1 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Join Swiss Canonica</h1>
                <hr class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                <p class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s">{{$sections[1]['content']}}</p>

                <a href="#more_career"><button class="wow fadeInRight hover_propperty" data-wow-duration="1s" data-wow-delay=".3s">More <i class="fa fa-angle-right"></i></button></a>
            </div>
        </div>
    </div>
</section>

<!-- Career Small panels with shadow -->

<section class="career_last_sadow_panel" id="more_career">
    <div class="container">
        <div class="row">
            <h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">Latest Job Offers</h1>
            <p class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".5s">Looking to join our staff? We are always looking for talented individuals who like a challenge. Canonica is the perfect place to grow professionally and a fulfillment beyond just work. You can use our portal to search for job openings and apply directly online.  </p>

            @foreach($jobs as $job)
            <div class="col-md-3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="career_small_pan">
                    <h5>{{$job->title}}</h5>
                    <span>Job Description</span>
                    <hr>
                  {{$job->content}}
                </div>
            </div>
            @endforeach

            <div class="col-md-12">
                <a href="contact_page.php"><button  class="wow fadeInUp hover_propperty" data-wow-duration="1s" data-wow-delay=".5s">CONTACT HR <i class="fa fa-angle-right"></i></button></a>
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
