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


<!-- Maps Section on the Bottom -->

<!-- Footer General -->
@include('website.includes.footer-map')



<!-- Contact Input -->
<section class="contact_page_input_section">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10 no_padding">
                <div class="col-md-12">
                    <h1 class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s">GET IN TOUCH</h1>
                    <p class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".3s">Please fill in this information to send us a message!</p></div>
                <div class="col-md-4 small_padding-lr">
                    <input type="" name="" placeholder="Name" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                </div>
                <div class="col-md-4 small_padding-lr">
                    <input type="" name="" placeholder="Email" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                </div>
                <div class="col-md-4 small_padding-lr">
                    <input type="" name="" placeholder="Subject" class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                </div>

                <div class="col-md-12 small_padding-lr">
                    <textarea rows="9" placeholder="Message" class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"></textarea>
                </div>

                <div class="col-md-12">
                    <button class="wow fadeInUp hover_propperty" data-wow-duration="1s" data-wow-delay=".8s">Submit <i class="fa fa-angle-rigt"></i></button>
                </div>
            </div>
            <div class="col-md-1"></div>
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
