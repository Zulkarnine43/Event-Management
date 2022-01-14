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

                                        @if (isset($data[0]))
                                            @foreach ($data as $item)
                                                <div class="col-sm-6 col-md-4 wow fadeInUp">
                                                    <div class="products">
                                                        <div class="product">
                                                            <div class="product-image">
                                                                <div class="image"> 
                                                                    <a href="event-details/{{$item->xcode}}">
                                                                        <img src="{{ asset('images/events/image1/'.$item->xcode.".jpg") }}">
                                                                    </a>
                                                                </div>
                                                  
                                                                
                                                                
                                                            </div>
                                                          
                                                            <!-- /.product-image -->
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
                                                        <!-- /.product -->
                                                    </div>
                                                    <!-- /.products -->
                                                </div>
                                            @endforeach
                                            @else
                                            <div class="text-center">No results found!</div>
                                        @endif

                                    </div>
                                    <!-- /.category-product -->
                                </div>
                                <!-- /.tab-pane #list-container -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endsection
