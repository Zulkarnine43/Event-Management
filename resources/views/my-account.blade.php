@extends('index')

@section('content')
    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row'>
                <div class='col-md-12'>
                    <div class="search-result-container ">
                        <div id="myTabContent" class="tab-content category-list">
                            <div class="tab-pane active " id="grid-container">
                                <div class="category-product">
                                    <div class="row">
                                        <div class="col-2"><img class="rounded-circle"
                                           
                                            src="https://gravatar.com/avatar/e458b1e96a8eab396164a42132aba3c5?default=mm&amp;size=150"></div>
                                        
                                            <div class="col-10 ">{{ session('sxname') }}</div>
                                        <div class="col-1 "><a href="user-logout" class="link-danger">Logout</a></div>
                                    </div>
                                    <br>


                                    <div class="col-3 mb-4">
                                        @if ($errors->any())
                                            <a href="#" class="btn btn-danger shadow active">
                                                <h3>{{ $errors->first() }}</h3>
                                            </a>
                                        @endif
                                    </div>
                                    <br>

                                    <div class="row">
                                        {{-- Upcoming --}}
                                        <section class="section featured-product wow fadeInUp">
                                            <h3 class="section-title">My Upcoming Events</h3>
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                                                @if($upcoming)
                                                    @foreach ($upcoming as $item)
                                                       
                                                            <div class="item ">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="product-image">
                                                                            <div class="image"> 
                                                                                <a href="event-details/{{$item->xcode}}">
                                                                                    <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                                </a> 
                                                                            </div>
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
                                                                            <div class="product-price"> 
                                                                                <span class="price"> {{$item->xcost}} ৳</span>
                                                                                <div class=""> {{$item->xdate}} </div>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                        {{-- substr($string,0,11).'...' --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </section>

                                        {{-- all --}}

                                        <section class="section featured-product wow fadeInUp">
                                            <h3 class="section-title">My All Events</h3>
                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
                                                @if($all)
                                                    @foreach ($all as $item)
                                                       
                                                            <div class="item ">
                                                                <div class="products">
                                                                    <div class="product">
                                                                        <div class="product-image">
                                                                            <div class="image"> 
                                                                                <a href="event-details/{{$item->xcode}}">
                                                                                    <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                                </a> 
                                                                            </div>
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
                                                    @endforeach
                                                @endif
                                            </div>
                                        </section>

                                        
                                      

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
