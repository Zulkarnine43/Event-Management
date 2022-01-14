@extends('index')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/slide.css') }} ">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <style>
        .text {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }
        .bottom-left {
            position: absolute;
            bottom: 130px;
            left: 36px;
        }

        
    </style>

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row slide">
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    @if(isset($data))
                        @foreach ($data as $item)
                            @php
                                $img='images/events/image1/'.$item->xcode.".jpg";
                                // $img='images/events/image1/testing.jpg';

                                //testing.jpg
                            @endphp
                            <div class="swiper-slide"> <img src="{{asset($img)}}" /></div>
                        @endforeach
                    @else
                        <div class="swiper-slide"> <img src="https://www.w3schools.com/howto/img_mountains_wide.jpg" /></div> 
                    @endif
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <div class="swiper-container gallery-thumbs">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(./images/nature-1.jpg)"></div>
                </div>
            </div>
        </div><!-- slide end -->
        <div class="text-center">
            <small>Upcoming Events</small>
        </div>
        
            <div class="row bg-dark">
                <div class="col-12">
                    <div class="header-top-left">
                        <a href="upcoming-natok"> Natok</a>
                        <a href="upcoming-convo">Internationl Convocation</a>
                        <a href="upcoming-fashion">Fashion Show</a>
                        <a href="upcoming-concert">Concert</a>
                        
                    </div>
                </div>
            </div>


            {{-- show upcoming events --}}
            <div class="row border border-white">
                <div class="col-12">
                    <div class="header-top-left text-center">
                        <h3 href="upcoming-natok"> Upcoming Events</h3>
                        
                    </div>
                </div>
                @isset($upcoming)
                    @foreach ($upcoming as $item)
                        @php
                            $img='images/events/image1/'.$item->xcode.".jpg";
                            $xvenu=substr($item->xvenu, 0, 20);
                        @endphp
                        <div class="col-4">
                            <div class="shadow p-3 mb-5 bg-white rounded">
                                <a href="event-details/{{$item->xcode}}">
                                    <img src="{{ asset($img)}}" height="240" width="100%" class="border border-info events-img">
                                    <div class="bottom-left xtype"><h4>{{$item->xtype}}</h4></div>
                                </a>
                                <h4 class='text'>{{$item->xname}}</h4>
                                <small>৳{{$item->xcost}}</small>
                                <small class="xvenu"><i class="fa fa-map-marker ml-2"></i> {{$xvenu}}</small> 
                                <small><i class="fas fa-user ml-2"></i> {{$item->xseat - $item->zseat}}</small>
                            </div>
                        </div>
                    @endforeach
                @endisset 
            </div>
        
    </div><!-- /.container-fluid -->
@endsection

@section('js')

    <script>
        $( document ).ready(function() {
            $(".xtype").hide();
            $(".events-img").mouseover(function(){
                $('.xtype').show();
            });
            $(".events-img").mouseout(function(){
                $('.xtype').hide();
            });
        });
    </script>
    {{-- Slide --}}
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
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
            },
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
        });
    </script>

@endsection
