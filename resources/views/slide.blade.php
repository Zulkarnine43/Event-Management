@extends('mainmenu')
@section('css')
<style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #000;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper-container {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .gallery-top {
      height: 80%;
      width: 100%;
    }

    .gallery-thumbs {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
  </style>

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    
@endsection
@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="card card-primary col-md-12">
              
        

                <div class="swiper-container gallery-top">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" > <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" /></div>
                      <div class="swiper-slide" > <img src="https://www.w3schools.com/howto/img_nature_wide.jpg" /></div>
                      <div class="swiper-slide" > <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" /></div>
                      <div class="swiper-slide" > <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" /></div>
                      
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next swiper-button-white"></div>
                    <div class="swiper-button-prev swiper-button-white"></div>
                  </div>
                  <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide" style="background-image:url(./images/nature-1.jpg)"></div>
                      <div class="swiper-slide" style="background-image:url(./images/nature-2.jpg)"></div>
                      <div class="swiper-slide" style="background-image:url(./images/nature-3.jpg)"></div>
                      <div class="swiper-slide" style="background-image:url(./images/nature-4.jpg)"></div>
                      
                    </div>
                  </div>
                


            </div>{{-- card end --}}

        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->

@endsection

@section('js')


  
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs
      },loop: true, 
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });

    
  </script>

@endsection
