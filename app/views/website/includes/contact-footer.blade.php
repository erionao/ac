
<section class="contact_section_footer" ng-controller="ContactFormCtrl">
    <div class="container">
        <div class="row">
            <p>Contact Us , We Would Like to Hear From You</p>
            <form id="mailForm">
                <div class="col-md-1"></div>
                <div class="col-md-10 no_padding">
                    <div class="col-md-4 small_padding-lr wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <input type="" name="name" ng-model="contact.full_name"  placeholder="Full Name">
                    </div>
                    <div class="col-md-4 small_padding-lr wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <input type="" name="email" ng-model="contact.email" placeholder="Email">
                    </div>
                    <div class="col-md-4 small_padding-lr wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <input type="" name="phone" ng-model="contact.phone" placeholder="Phone Number">
                    </div>
                    <div class="col-md-12 small_padding-lr wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                        <textarea type="" name="description" ng-model="contact.description" placeholder="Description" rows="8"></textarea>
                    </div>
                    <div class="col-md-6 small_padding-lr wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">
                        <input type="" name="name" ng-model="contact.captcha" placeholder="Captcha Code">
                    </div>
                    <div class="col-md-2 pull-left small_padding-lr wow fadeInUp " data-wow-duration="1s" data-wow-delay=".2s">
                        <p align="left" class="form-control-static "><%string%></p>
                    </div>
                    <div class="col-md-4 small_padding-lr wow fadeInUp pull-right" data-wow-duration="1s" data-wow-delay=".2s">
                        <button class="btn btn-circle" ng-click="random()">Reload Captcha</button>
                    </div>

                    <div class="col-md-12 small_padding-lr wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                        <button type="submit" ng-click="sendMail(contact)">Send Message </button>
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </form>
        </div>
    </div>

</section>

<footer class="footer_all_pages">
    <div class="container">
        <div class="col-md-6 copyright_s">
            <a href="http://www.emiratesgraphic.com"><p>Copyright by Emirates Graphic 2017</p></a>
        </div>
        <div class="col-md-6 social_s">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </div>
</footer>