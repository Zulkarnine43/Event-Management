@extends('index')

@section('content')

    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <div id="hero">
                        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
                            {{-- Slide --}}
                            @if($special)
                                @foreach ($special as $item)
                                    <a href="{{ route('event-details',[$item->xcode]) }}">
                                        <div class="item"
                                            style="background-image: url({{ asset('images/events/image2/'.$item->xcode.'.jpg') }});">
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                            {{-- @for ($i = 1; $i < 3; $i++)
                                <div class="item"
                                    style="background-image: url(assets/images/sliders/{{ $i }}.jpg);">
                                    
                                </div>
                            @endfor --}}
                        </div>
                    </div>

                    <!-- ===== New Products  -->
                    <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                        <div class="more-info-tab clearfix ">
                            <h3 class="new-product-title pull-left">Events</h3>
                            <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                                <li class="active">
                                    <a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a>
                                </li>
                                <li>
                                    <a data-transition-type="backSlide" href="#natok" data-toggle="tab">Natok</a>
                                </li>
                                
                                <li>
                                    <a data-transition-type="backSlide" href="#concert" data-toggle="tab">Concert</a>
                                </li>
                                <li>
                                    <a data-transition-type="backSlide" href="#intoConvo" data-toggle="tab">Internationl Convocation</a>
                                </li>
                                <li>
                                    <a data-transition-type="backSlide" href="#fashion" data-toggle="tab">Fashion Show </a>
                                </li>
                            </ul>
                            <!-- /.nav-tabs -->
                        </div>

                        <div class="tab-content outer-top-xs">
                            <div class="tab-pane in active" id="all">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @if(isset($newProduct))
                                            @foreach ($newProduct as $item)
                                                <div class="item item-carousel">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"> 
                                                                    <a href="event-details/{{$item->xcode}}">
                                                                        <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                    </a> 
                                                                </div>
                                                                @if($item->xtype=='Natok')
                                                                    <div class="tag hot"><span>{{$item->xtype}}</span></div>
                                                                @endif
                                                                @if($item->xtype=='Fashion')
                                                                    <div class="tag sale"><span>{{$item->xtype}}</span></div>
                                                                @endif
                                                                @if($item->xtype=='Concert')
                                                                    <div class="tag new"><span>{{$item->xtype}}</span></div>
                                                                @endif
                                                                @if($item->xtype=='Internationl Convocation')
                                                                    <div class="tag convo"><span>Convo</span></div>
                                                                @endif
                                                            </div>
                                                        
                                                            <div class="product-info text-left">
                                                                <h3 class="name">
                                                                    <a href="event-details/{{$item->xcode}}">
                                                                        @if(strlen($item->xname)>30)
                                                                            {{substr($item->xname,0,21).'....'}}
                                                                        @else
                                                                            {{$item->xname}}
                                                                        @endif
                                                                    </a>
                                                                </h3>

                                                                
                                                                <div class="product-price"> <span class="price"> {{$item->xcost}} ৳</span>
                                                                </div>
                                                            </div>
                                                            <!-- /.product-info -->
                                                        </div>
                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                            @endforeach
                                        @endif
                               
                                    </div>
                                </div>
                                <!-- /.product-slider -->
                            </div>
                            <!-- /.tab-pane ALL-->

                            <div class="tab-pane in active" id="natok">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @if(isset($newProduct))
                                            @foreach ($newProduct as $item)
                                                @if($item->xtype=='Natok')
                                                    <div class="item item-carousel">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image"> 
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                            <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                        </a> 
                                                                    </div>
                                                                    <div class="tag hot"><span>{{$item->xtype}}</span></div>
                                                                </div>
                                                            
                                                                <div class="product-info text-left">
                                                                    <h3 class="name">
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                    @if(strlen($item->xname)>30)
                                                                        {{substr($item->xname,0,21).'....'}}
                                                                    @else
                                                                        {{$item->xname}}
                                                                    @endif
                                                                </a>
                                                                    </h3>
                                                                    <div class="product-price"> <span class="price"> {{$item->xcost}} ৳</span> 
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane Natok-->

                            <div class="tab-pane in active" id="concert">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @if(isset($newProduct))
                                            @foreach ($newProduct as $item)
                                                @if($item->xtype=='Concert')
                                                    <div class="item item-carousel">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image"> 
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                            <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                        </a> 
                                                                    </div>
                                                                    <div class="tag new"><span>{{$item->xtype}}</span></div>
                                                                </div>
                                                            
                                                                <div class="product-info text-left">
                                                                    <h3 class="name">
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                    @if(strlen($item->xname)>30)
                                                                        {{substr($item->xname,0,21).'....'}}
                                                                    @else
                                                                        {{$item->xname}}
                                                                    @endif
                                                                </a>
                                                                    </h3>
                                                                    <div class="product-price"> <span class="price"> {{$item->xcost}} ৳</span> 
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane Concert-->
                            <div class="tab-pane in active" id="intoConvo">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @if(isset($newProduct))
                                            @foreach ($newProduct as $item)
                                                @if($item->xtype=='Internationl Convocation')
                                                    <div class="item item-carousel">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image"> 
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                            <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                        </a> 
                                                                    </div>
                                                                    <div class="tag convo"><span>Convo</span></div>
                                                                </div>
                                                            
                                                                <div class="product-info text-left">
                                                                    <h3 class="name">
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                    @if(strlen($item->xname)>30)
                                                                        {{substr($item->xname,0,21).'....'}}
                                                                    @else
                                                                        {{$item->xname}}
                                                                    @endif
                                                                </a>
                                                                    </h3>
                                                                    <div class="product-price"> <span class="price"> {{$item->xcost}} ৳</span> 
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane Internationl Convocation-->

                            <div class="tab-pane in active" id="fashion">
                                <div class="product-slider">
                                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
                                        @if(isset($newProduct))
                                            @foreach ($newProduct as $item)
                                                @if($item->xtype=='Fashion')
                                                    <div class="item item-carousel">
                                                        <div class="products">
                                                            <div class="product">
                                                                <div class="product-image">
                                                                    <div class="image"> 
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                            <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                        </a> 
                                                                    </div>
                                                                    <div class="tag sale"><span>{{$item->xtype}}</span></div>
                                                                </div>
                                                            
                                                                <div class="product-info text-left">
                                                                    <h3 class="name">
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                            @if(strlen($item->xname)>30)
                                                                                {{substr($item->xname,0,21).'....'}}
                                                                            @else
                                                                                {{$item->xname}}
                                                                            @endif
                                                                        </a>
                                                                    </h3>
                                                                    <div class="product-price"> <span class="price"> {{$item->xcost}} ৳</span> 
                                                                       
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- /.tab-pane Fashion-->

                        </div>
                        <!-- /.tab-content -->
                    </div>

                           
{{-- ////////////////////////////////Events Done//////////////////////////////////////////////// --}}   

                        @php
                            $x=count($newProduct)-1;
                        @endphp

                        <div class="wide-banners wow fadeInUp outer-bottom-xs">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wide-banner cnt-strip">
                                        <div class="image"><a href="event-details/{{$newProduct[$x]->xcode}}"> <img class="img-responsive" src="{{ asset('assets/images/banners/home-banner.jpg') }}" ></a> </div>
                                        <div class="strip strip-text">
                                            <div class="strip-inner">
                                                <h2 class="text-right">New {{$newProduct[$x]->xtype}}<br>
                                                   
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="new-label">
                                            <div class="text">NEW</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <!-- =================== FEATURED PRODUCTS ================ -->
                    <section class="section featured-product wow fadeInUp">
                        <h3 class="section-title">Featured products</h3>
                        <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                            @if($newProduct)
                                @foreach ($newProduct as $item)
                                    @if($item->xfeature==1)
                                        <div class="item item-carousel">
                                            <div class="products">
                                                <div class="product">
                                                    <div class="product-image">
                                                        <div class="image"> 
                                                            <a href="event-details/{{$item->xcode}}">
                                                                <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                            </a> 
                                                        </div>
                                                        @if($item->xtype=='Natok')
                                                            <div class="tag hot"><span>{{$item->xtype}}</span></div>
                                                        @endif
                                                        @if($item->xtype=='Fashion')
                                                            <div class="tag sale"><span>{{$item->xtype}}</span></div>
                                                        @endif
                                                        @if($item->xtype=='Concert')
                                                            <div class="tag new"><span>{{$item->xtype}}</span></div>
                                                        @endif
                                                        @if($item->xtype=='Internationl Convocation')
                                                        <div class="tag convo"><span>Convo</span></div>
                                                    @endif
                                                    </div>
                                                    <div class="product-info text-left">
                                                        <h3 class="name">
                                                            <a href="event-details/{{$item->xcode}}">
                                                                @if(strlen($item->xname)>30)
                                                                    {{substr($item->xname,0,21).'....'}}
                                                                @else
                                                                    {{$item->xname}}
                                                                @endif
                                                            </a>
                                                        </h3>
                                                        <div class="product-price"> <span class="price"> {{$item->xcost}} ৳</span>
                                                        </div>
                                                    </div>
                                                    {{-- substr($string,0,11).'...' --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            @endif
                        </div>
                    </section>
                </div>
           


            {{-- ------------------Side bar ------------------------------}}
            {{-- ------------------Side bar ------------------------------}}
            {{-- ------------------Side bar ------------------------------}}
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <!-- ============= HOT DEALS ==================== -->
                    <div class="sidebar-widget hot-deals wow fadeInUp outer-bottom-xs">
                        <h3 class="section-title">hot deals</h3>
                        <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-ss">
                            @if($hot)
                                @foreach ( $hot as $item)
                                    <div class="item">
                                        <div class="products">
                                            <div class="hot-deal-wrapper">
                                                <div class="image"><a href="{{ route('event-details',[$item->xcode]) }}"> <img src="{{ asset('images/events/image1/'.$item->xcode.'.jpg') }}" > </a>
                                                </div>
                                            </div>
                                            <!-- /.hot-deal-wrapper -->
        
                                            <div class="product-info text-left m-t-20">
                                                <h3 class="name">
                                                    <a href="event-details/{{$item->xcode}}">
                                                        @if(strlen($item->xname)>30)
                                                            {{substr($item->xname,0,21).'....'}}
                                                        @else
                                                            {{$item->xname}}
                                                        @endif
                                                    </a>

                                                
                                                </h3>
                                                <div class="product-price">
                                                     <span class="price">
                                                          ৳{{ $item->xcost }} 
                                                    </span>
                                                    <span class="price-before-discount">
                                                         ৳{{ $item->xmrp }}
                                                    </span> 
                                                </div>
                                            </div>
                                        
                                            
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                            

                        </div>
                        <!-- /.sidebar-widget -->
                    </div>
                    <!-- ============== HOT DEALS: END ======== -->

                    <!-- ============ SPECIAL OFFER ================ -->

                    <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                        <h3 class="section-title">Special Offer</h3>
                        <div class="sidebar-widget-body outer-top-xs">
                            <div
                                class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">
                                <div class="item">
                                    @if($special)
                                        @foreach ($special as $item)
                                            <div class="products special-product">
                                        
                                                <div class="product">
                                                    <div class="product-micro">
                                                        <div class="row product-micro-row">
                                                            <div class="col col-xs-5">
                                                                <div class="product-image">
                                                                    <div class="image"> <a href="{{ route('event-details',[$item->xcode]) }}"> <img src="{{ asset('images/events/image1/'.$item->xcode.'.jpg')}}" > </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                           
                                                            <div class="col col-xs-7">
                                                                <div class="product-info">
                                                                    <h3 class="name">
                                                                        <a href="event-details/{{$item->xcode}}">
                                                                            @if(strlen($item->xname)>30)
                                                                                {{substr($item->xname,0,21).'....'}}
                                                                            @else
                                                                                {{$item->xname}}
                                                                            @endif
                                                                        </a>
                                                                    </h3>
                                                                    <div class="product-price">
                                                                        <span class="price">
                                                                             ৳{{ $item->xcost }} 
                                                                       </span>
                                                                       <span class="price-before-discount">
                                                                            ৳{{ $item->xmrp }}
                                                                       </span> 
                                                                   </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                          
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                
                            </div>
                        </div>
                    </div>
                  
                    <!-- =========== SPECIAL OFFER : END -->
            
                  
                </div>
                <!-- /.container -->
            </div>
            <!-- /#top-banner-and-menu -->
        @endsection
