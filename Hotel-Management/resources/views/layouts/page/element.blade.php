	@extends('layouts.master')
	@section('slide')
	<section class="breadcumb-area bg-img d-flex align-items-center justify-content-center" style="background-image: url(public/thepalatin/img/bg-img/bg-9.jpg);">
        <div class="bradcumbContent">
            <h2>Elements</h2>
        </div>
    </section>
	@endsection
	@section('content')
	<!-- ##### Elements Area Start ##### -->
    <section class="elements-area">
        <div class="container">
            <div class="row">

                <!-- ##### Buttons ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Buttons</h2>
                    </div>
                    <!-- Buttons -->
                    <div class="palatin-buttons-area mb-100">
                        <a href="#" class="btn palatin-btn m-2">Send message</a>
                        <a href="#" class="btn palatin-btn btn-2 m-2">Send message</a>
                        <a href="#" class="btn palatin-btn btn-3 m-2">Send message</a>
                    </div>
                </div>

                <!-- ##### Progress Bars & Accordions ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Accordians &amp; Tabs</h2>
                    </div>
                </div>

                <!-- ##### Accordians ##### -->
                <div class="col-12 col-lg-6">
                    <div class="accordions mb-100" id="accordion" role="tablist" aria-multiselectable="true">
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6><a role="button" class="" aria-expanded="true" aria-controls="collapseOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Sceleri sque, at rutrum nulla dictum. Ut ac ligula
                                    <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a></h6>
                            <div id="collapseOne" class="accordion-content collapse show">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" class="collapsed" aria-expanded="true" aria-controls="collapseTwo" data-parent="#accordion" data-toggle="collapse" href="#collapseTwo">Consectetur adipiscing elit. Donec malesuada
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        </a>
                            </h6>
                            <div id="collapseTwo" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                        <!-- single accordian area -->
                        <div class="panel single-accordion">
                            <h6>
                                <a role="button" aria-expanded="true" aria-controls="collapseThree" class="collapsed" data-parent="#accordion" data-toggle="collapse" href="#collapseThree">Ut ac ligula sapien. Suspendisse cursus faucibus finibus.
                                        <span class="accor-open"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                        <span class="accor-close"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                    </a>
                            </h6>
                            <div id="collapseThree" class="accordion-content collapse">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- ##### Tabs ##### -->
                <div class="col-12 col-lg-6">
                    <div class="palatin-tabs-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="tab--1" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false">Mauris diam</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab--2" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Ttristique sed posuere</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="tab--3" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="true">Lobortis eget metus</a>
                            </li>
                        </ul>

                        <div class="tab-content mb-100" id="myTabContent">
                            <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                                <div class="palatin-tab-content">
                                    <!-- Tab Text -->
                                    <div class="palatin-tab-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                                <div class="palatin-tab-content">
                                    <!-- Tab Text -->
                                    <div class="palatin-tab-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                                <div class="palatin-tab-content">
                                    <!-- Tab Text -->
                                    <div class="palatin-tab-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris sceleri sque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Lorem ipsum dolor sit amet.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Milestones ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Milestones</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="palatin-cool-facts-area">
                        <div class="row">

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <i class="icon-cocktail-1"></i>
                                        <h2><span class="counter">231</span></h2>
                                        <p>Cocktails/day</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <i class="icon-swimming-pool"></i>
                                        <h2><span class="counter">3</span></h2>
                                        <p>Pools</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <i class="icon-resort"></i>
                                        <h2><span class="counter">79</span></h2>
                                        <p>Rooms</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Cool Facts -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-cool-fact mb-100">
                                    <div class="scf-text">
                                        <i class="icon-restaurant"></i>
                                        <h2><span class="counter">25</span></h2>
                                        <p>Apartments</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- ##### Loaders ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Loaders</h2>
                    </div>
                </div>

                <div class="col-12">
                    <!-- Loaders Area Start -->
                    <div class="our-skills-area">
                        <div class="row">

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle" class="circle" data-value="0.90">
                                        <div class="skills-text">
                                            <span>90%</span>
                                            <p>Tourists</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle2" class="circle" data-value="0.75">
                                        <div class="skills-text">
                                            <span>75%</span>
                                            <p>Passion</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle3" class="circle" data-value="1">
                                        <div class="skills-text">
                                            <span>100%</span>
                                            <p>Satisfaction</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Skills Area -->
                            <div class="col-12 col-sm-6 col-lg-3">
                                <div class="single-skils-area mb-100">
                                    <div id="circle4" class="circle" data-value="0.80">
                                        <div class="skills-text">
                                            <span>80%</span>
                                            <p>Fun</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ##### Icon Boxes ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>Icon Boxes</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="row">

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <i class="icon-trekking"></i>
                                <h4>Bike Rentals</h4>
                                <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <i class="icon-boat"></i>
                                <h4>Boat Trips</h4>
                                <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                            </div>
                        </div>

                        <!-- Single Service Area -->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-service-area mb-100">
                                <i class="icon-restaurant"></i>
                                <h4>Restaurants</h4>
                                <p>Nulla massa dui, posuere non erat in, eleifend mattis dui. Vivamus luctus luctus rhoncus. Donec sagittis nulla id finibus iaculis. Mauris odio tortor.</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ##### Icon Boxes ##### -->
                <div class="col-12">
                    <div class="elements-title">
                        <h2>All Icons</h2>
                    </div>
                </div>

                <div class="col-12 mb-100">
                    <div class="row">                   
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-wallet"></i>
                                <span>icon-wallet</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-trekking"></i>
                                <span>icon-trekking</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-boarding-pass"></i>
                                <span>icon-boarding-pass</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-train"></i>
                                <span>icon-train</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-binoculars"></i>
                                <span>icon-binoculars</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-swimming-pool"></i>
                                <span>icon-swimming-pool</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-sunset"></i>
                                <span>icon-sunset</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-sunglasses"></i>
                                <span>icon-sunglasses</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-suitcase"></i>
                                <span>icon-suitcase</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-goggle"></i>
                                <span>icon-goggle</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-restaurant"></i>
                                <span>icon-restaurant</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-postcard"></i>
                                <span>icon-postcard</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-adaptor"></i>
                                <span>icon-adaptor</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-photo"></i>
                                <span>icon-photo</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-passport"></i>
                                <span>icon-passport</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-navigation"></i>
                                <span>icon-navigation</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-mountain"></i>
                                <span>icon-mountain</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-map-1"></i>
                                <span>icon-map-1</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-limousine"></i>
                                <span>icon-limousine</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-landmark"></i>
                                <span>icon-landmark</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-resort"></i>
                                <span>icon-resort</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-sign"></i>
                                <span>icon-sign</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-flip-flops"></i>
                                <span>icon-flip-flops</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-map"></i>
                                <span>icon-map</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-take-off"></i>
                                <span>icon-take-off</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-boat"></i>
                                <span>icon-boat</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-compass"></i>
                                <span>icon-compass</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-cocktail-1"></i>
                                <span>icon-cocktail-1</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-cocktail"></i>
                                <span>icon-cocktail</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-credit-card"></i>
                                <span>icon-credit-card</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-camera"></i>
                                <span>icon-camera</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-calendar"></i>
                                <span>icon-calendar</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-island"></i>
                                <span>icon-island</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-beach"></i>
                                <span>icon-beach</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-around"></i>
                                <span>icon-around</span>
                            </div>
                        </div>
                        
                        <!-- Single Icon -->
                        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <div class="single-icon mb-30">
                                <i class="icon-plane"></i>
                                <span>icon-plane</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Elements Area End ##### -->
	@endsection