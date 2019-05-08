	@extends('master')
	@section('slide')
	<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(public/thepalatin/img/bg-img/bg-8.jpg);">
        <div class="bradcumbContent">
            <h2>Contact</h2>
        </div>
    </section>
	@endsection
	@section('content')
	<!-- ##### Contact Area Start ##### -->
    <section class="contact-information-area">
        <div class="container">
            <div class="row">

                <!-- Single Contact Information -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-information mb-100">
                        <div class="section-text">
                            <h3>Ibiza</h3>
                            <p>Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum.</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Address</p>
                            <p>1481 Creekside Lane <br>Avila Beach, CA 931</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Phone</p>
                            <p>+36 345 7953 4994</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>E-mail</p>
                            <p>yourmail@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-information mb-100">
                        <div class="section-text">
                            <h3>Los Angeles</h3>
                            <p>Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Integer tempus ligula sem.</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Address</p>
                            <p>245 Principe Lane <br>Avila Beach, Spain</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Phone</p>
                            <p>+36 345 7953 4994</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>E-mail</p>
                            <p>yourmail@gmail.com</p>
                        </div>
                    </div>
                </div>

                <!-- Single Contact Information -->
                <div class="col-12 col-lg-4">
                    <div class="single-contact-information mb-100">
                        <div class="section-text">
                            <h3>Dubai</h3>
                            <p>Fusce blandit consequat elit non egestas. Donec tortor odio, consectetur eu justo ut.</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Address</p>
                            <p>889 Creekside Lane <br>Avila Beach, Dubai</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>Phone</p>
                            <p>+77 345 7953 2406</p>
                        </div>
                        <!-- Single Contact Information -->
                        <div class="contact-content d-flex">
                            <p>E-mail</p>
                            <p>yourmail@gmail.com</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Contact Form Area Start ##### -->
    <section class="contact-form-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <div class="line-"></div>
                        <h2>Get in touch</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Contact Form -->
                    <form action="#" method="post">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="text" placeholder="Your Name">
                            </div>
                            <div class="col-lg-4">
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                            </div>
                            <div class="col-12">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn palatin-btn mt-50">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Form Area End ##### -->

    <!-- ##### Google Maps ##### -->
    <div class="map-area mb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22236.40558254599!2d-118.25292394686001!3d34.057682914027104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2z4Kay4Ka4IOCmj-CmnuCnjeCmnOCnh-CmsuCnh-CmuCwg4KaV4KeN4Kav4Ka-4Kay4Ka_4Kar4KeL4Kaw4KeN4Kao4Ka_4Kav4Ka84Ka-LCDgpq7gpr7gprDgp43gppXgpr_gpqgg4Kav4KeB4KaV4KeN4Kak4Kaw4Ka-4Ka34KeN4Kaf4KeN4Kaw!5e0!3m2!1sbn!2sbd!4v1532328708137" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
	@endsection