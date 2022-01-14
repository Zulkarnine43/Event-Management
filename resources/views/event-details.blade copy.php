@extends('index')
@section('css')

   

@endsection
@section('content')
    <div class="container-fluid">
        <div class="row border border-white">
            <div class="col-12">
                <div class="text-center">
                    <h3> Event Details</h3>
                    
                </div>
            </div>
            @isset($data)
                @foreach ($data as $item)
                    @php
                        $img='images/events/image1/'.$item->xcode.".jpg";
                    @endphp
                    <div class="shadow p-3  bg-white rounded">
                        <div class="row">
                            <div class="col-4 text-center">
                                <img src="{{ asset($img)}}" height="240" width="100%" class="border border-info">
                                <a href="../checkout/{{$item->xcode}}" class="btn btn-warning mt-4 form-control"> Book Now</a>
                            </div>
                            <div class="col-8">
                                <h3 class='text'>{{$item->xtype}}</h3>
                                <h4 class='text'>{{$item->xname}}</h4>
                                <p>Ticket Price : ৳{{$item->xcost}}</p>
                                <p>Venu : <i class="fa fa-map-marker ml-2"></i> {{$item->xvenu}}</p>
                                <p>Date : {{$item->xdate}}</p>
                                <p>Time : {{$item->xtime}}</p>

                                <p> Total Seat: <i class="fas fa-user ml-2"></i> {{$item->xseat}} </p>
                                <p> Avilable Seat: <i class="fas fa-user ml-2"></i> {{$item->xseat - $item->zseat}} </p>
                                <p> Casts:  {{$item->xcast}} </p>
                                <p> Contact:  {{$item->xmobile}} </p>
                                <p> Email:  {{$item->xemail}} </p>
                                <small></small>
                            </div>
                        </div>
                        
                            
                    </div>
                  
                @endforeach
            @endisset 
        </div>
    </div><!-- /.container-fluid -->
@endsection
