@extends('_layouts.app')

@section('content')

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      @foreach(mySlideHelperWelcomePage() as $slide)
        
        @if($loop->first)
          <li 
            data-target="#carouselExampleIndicators"
            data-slide-to="{!! $loop->index !!}"
            class="active"
          ></li>
        
        @else
          <li 
            data-target="#carouselExampleIndicators"
            data-slide-to="{!! $loop->index !!}"
          ></li>
        
        @endif
        
      @endforeach
    </ol>
    
    <div class="carousel-inner">
      @foreach(mySlideHelperWelcomePage() as $slide)
        
        @if($loop->first)
          <div class="carousel-item active">
            <img class="d-block w-100" style="height: 550px" src="{!! $slide['url'] !!}">
            
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5 class="font-weight-bold">{!! strtoupper($slide['title']) !!}</h5>
              <p class="font-italic">{!! $slide['text'] !!}</p>
            </div>
          </div>
        
        @else
          <div class="carousel-item">
            <img class="d-block w-100" style="height: 550px" src="{!! $slide['url'] !!}">
            
            <div class="carousel-caption d-none d-md-block bg-white text-dark">
              <h5 class="font-weight-bold">{!! strtoupper($slide['title']) !!}</h5>
              <p class="font-italic">{!! $slide['text'] !!}</p>
            </div>
          </div>
        
        @endif

      @endforeach
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- end carousel -->

  <!-- Address and form send message -->
  <!-- <div class="d-flex flex-wrap align-items-center flex-fill justify-content-between">

    <a href="mailto:hotelInfor@gmail.com">
      <div class="d-flex align-items-start my-padding-bottom-12 my-padding-right-40">
        <div class="my-padding-right-19">
          <i class="fas fa-envelope-open-text"></i>
        </div>
        
        <div>
          <em>hotelInfor@gmail.com</em>
        </div>
      </div>
    </a>


    <div class="d-flex align-items-start my-padding-bottom-12 my-padding-right-40">
      <div class="my-padding-right-19">
        <i class="fas fa-phone-square"></i>
      </div>
      
      <div>
        <em>+84 342 713 011</em>
      </div>
    </div>


    <a
      href="http://maps.google.com/maps?q=99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng 550000"
      target="_blank"
    >
      <div class="d-flex align-items-start my-padding-bottom-12 my-padding-right-40">
        <div class="my-padding-right-19">
          <i class="fas fa-map-marker-alt"></i>
        </div>
        
        <div>
          <em>99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng 550000</em>
        </div>
      </div>
    </a>

  </div> -->
<br>
<div class="row">
  
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <a  href="mailto:hotelInfor@gmail.com">
        <em> <i class="fas fa-envelope-open-text"></i>hotelInfor@gmail.com</em>
      </a>
    </div>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <a  href="#">
        <em> <i class="fas fa-phone-square"></i>
        +84 342 713 011</em>
      </a>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <a  href="http://maps.google.com/maps?q=99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng 550000"
      target="_blank">
          <i class="fas fa-map-marker-alt"></i>
          <em>99 Tô Hiến Thành, Phước Mỹ, Sơn Trà, Đà Nẵng  </em>
        
      </a>
    </div>
  </div>
 

  <div class="my-margin-top-19 my-padding-top-19 my-border-top">
    
    <h3 id="con">Contact Us</h3>
    <hr>
    <form action="{!! url('/customerMessages') !!}" method="POST">

      {{ csrf_field() }}

      @auth
      
        <input
          type="hidden"
          name="name"
          value="{!! Auth::user()->fullName() !!}"
        >
        
        <input type="hidden" name="email" value="{!! Auth::user()->email !!}">
      

      @else

        <div class="row my-padding-bottom-19">
          <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="name">Name:<label>
          </div>
          
          <div class="col my-padding-bottom-8">
            <input type="text" id="name" name="name" class="form-control" placeholder="Your name...">
          </div>
        </div>


        <div class="row my-padding-bottom-19">
          <div class="col-md-3 col-lg-4 my-padding-bottom-8">
            <label for="email">Email:<label>
          </div>
          
          <div class="col my-padding-bottom-8">
            <input type="text" id="email" name="email" class="form-control" placeholder="Your e-mail address...">
          </div>
        </div>


      @endauth

      <div class="row my-padding-bottom-19">
        <div class="col-md-3 col-lg-4 my-padding-bottom-8">
          <label for="message">Message:</label>
        </div>
        
        <div class="col my-padding-bottom-8">
          <textarea
            rows="4"
            id="message"
            name="message"
            class="form-control"
            placeholder="Your message..."
          ></textarea>
        </div>
      </div>


      <div class="row my-padding-bottom-19">
        <div class="col-md-3 col-lg-4 my-padding-bottom-8"></div>
        
        <div class="col my-padding-bottom-8">
          <button type="submit" class="btn btn-success btn-sm">
            <i class="far fa-share-square my-margin-right-19"></i>
            <span>Send your message</span>
          </button>
        </div>
      </div>

    </form>

  </div>
@endsection
