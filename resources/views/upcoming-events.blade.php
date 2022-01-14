@extends('index')
@section('css')

    <style>
        .text {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        
    </style>

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row border border-white">
            <div class="col-12">
                <div class="header-top-left text-center">
                    <h3 href="upcoming-natok"> Upcoming {{$type}}</h3>
                    
                </div>
            </div>
            @isset($data)
                @foreach ($data as $item)
                    @php
                        $img='images/events/image1/'.$item->xcode.".jpg";
                        $xvenu=substr($item->xvenu, 0, 20);
                    @endphp
                    <div class="col-4">
                        <div class="shadow p-3 mb-5 bg-white rounded">
                            <a href="event-details/{{$item->xcode}}">

                                <img src="{{ asset($img)}}" height="240" width="100%" class="border border-info">
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
