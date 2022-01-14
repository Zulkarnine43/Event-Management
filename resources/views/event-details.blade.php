@extends('index')

@section('content')
   
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>
                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">

                        <div class="sidebar-widget hot-deals wow fadeInUp outer-top-vs">
                            <h3 class="section-title">hot deals</h3>
                            <div class="owl-carousel sidebar-carousel custom-carousel owl-theme outer-top-xs">
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
                                                    <h3 class="name"><a href="{{ route('event-details',[$item->xcode]) }}">{{ $item->xname }}</a></h3>
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
                            </div><!-- /.sidebar-widget -->
                        </div>
                    </div>
                </div><!-- /.sidebar -->
                <div class='col-md-9'>
                    <div class="detail-block">
                        <div class="row  wow fadeInUp">
                           
                            @if($data)
                                @foreach ($data as $item)
                                    <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                                        <div class="product-item-holder size-big single-product-gallery small-gallery">
        
                                            <div id="owl-single-product">
                                                <div class="single-product-gallery-item" id="slide1">
                                                    <img class="img-responsive"  data-echo="{{ asset('images/events/image1/'.$item->xcode.'.jpg') }}" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='col-sm-6 col-md-7 product-info-block'>
                                        <div class="product-info">
                                            @if(session('warning'))
                                                <h1 class="name text-danger">{{session('warning')}}</h1>
                                            @endif
                                            <h1 class="name">{{ $item->xname}}</h1>
                                            <div class="stock-container info-container m-t-10">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="stock-box">
                                                            <span class="label">Availability :</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="stock-box">
                                                            <span class="value">{{$item->xseat-$item->zseat}}</span>
                                                        </div>
                                                    </div>
                                                </div><!-- /.row -->
                                            </div>
                                            <div class="description-container m-t-20">
                                               {{$item->xdesc}}
                                            </div><!-- /.description-container -->
        
                                            <div class="price-container info-container m-t-20">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="price-box">
                                                        <p>Venu : {{$item->xvenu}}</p>
                                                        <p>Date : {{$item->xdate}}</p>
                                                        <p>Time : {{$item->xtime}}</p>
                                                        <p> Casts:  {{$item->xcast}} </p>
                                                        <p> Contact:  {{$item->xmobile}} </p>
                                                        <p> Email:  {{$item->xemail}} </p>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="price-box">
                                                            <span class="price"> ৳{{$item->xcost}}</span>
                                                            <span class="price-strike"> ৳{{$item->xmrp}}</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        
                                                        <form action=" {{route('confirm-order')}}  " method="post">
                                                            @csrf

                                                            <input type="hidden" name="xcode" id="xcode" value="{{$data[0]->xcode}}">

                                                            <div class="form-group row">
                                                                <div class="col-6">
                                                                    <label class="col-sm-1 col-form-label">QTY:</label>
                                                                    <div class="col-sm-5">
                                                                        <input name="xqty" type="number" class="form-control-plaintext" value="1">
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <button type="submit" class="btn btn-primary">
                                                                        <i class="fa fa-shopping-cart inner-right-vs"></i>
                                                                        Order Now
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        
                                                    </div>

{{--                                                    
                                                    <div class="col-sm-6">
                                                        <a href="{{route('checkout',['000009']) }}" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> Book Now</a>
                                                    </div> --}}
                                                   
                                                    

                                                    

                                                </div><!-- /.row -->
                                            </div><!-- /.price-container -->
        
                                            
                                        </div><!-- /.product-info -->
                                    </div><!-- /.col-sm-7 -->
                                @endforeach
                            @endif
                            
                        </div><!-- /.row -->
                    </div>

                   

                    <!-- ============================================== Featured products ============================================== -->
                    <br><br>
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
                                                                <a href="{{ route('event-details',[$item->xcode]) }}">
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
                                                                <a href="event-details/{{$item->xcode}}">{{$item->xname}}</a>
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
                        </section>
                    <!-- ============================== Featured products END ========= -->
                </div><!-- /.col -->
               
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection
