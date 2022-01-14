@extends('index')

@section('content')
    <!-- profile area start -->
    <div class="bg-light border border-white">
        <div class="container mt-4">
            <div class="row">
                <div class="col-2"><img class="rounded-circle"
                        ng-src="https://gravatar.com/avatar/e458b1e96a8eab396164a42132aba3c5?default=mm&amp;size=150"
                        ng-hide="sharedProfileUxStateService.editingAvatar"
                        src="https://gravatar.com/avatar/e458b1e96a8eab396164a42132aba3c5?default=mm&amp;size=150"></div>
                <div class="col-10 ">{{ session('sxname') }}</div>
                
                <div class="col-1 "><a href="user-logout" class="link-danger">Logout</a></div>
                <div class="col-6">Setting</div>
               
               
                
            </div>
        </div>
        <hr><br>
        <!-- profile area end -->
        @if ($errors->any())
            <span class="alert alert-danger d-block" role="alert">
                <strong><h3>{{ $errors->first() }}</h3></strong>
            </span>
        @endif
        {{-- my upcoming events --}}
        <div class="col-3 mb-4">
            <a href="#" class="btn btn-primary shadow active">My Upcoming Events</a>
        </div>
        <div class="container">
            <div class="project-title-area text-center">
                <div class="row">
                    @if(isset($upcoming))
                        @foreach ($upcoming as $item)
                            @php
                                $img='images/events/image1/'.$item->xcode.".jpg";
                                // $xvenu=substr($item->xvenu, 0, 20);
                                $xname=substr($item->xname, 0, 50);
                            @endphp
                            <div class="col-sm-4 mb-4">
                                <div class="card" style="width: 18rem;">
                                    <a href="event-details/{{$item->xcode}}">
                                        <img class="card-img-top" src="{{ asset($img) }}" >
                                    </a>
                                    <div class="card-body">
                                        <h6> {{$item->xname}}</h6>
                                        <small> Price-{{$item->xcost}}</small>
                                        <small> Qty-{{$item->xqty}}</small>
                                        <small> Date-{{$item->xdate}}</small>

                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>
        <hr>


        {{-- my all events --}}
        <div class="col-2 mb-4">
            <a href="#" class="btn btn-info shadow active">My All Events</a>
        </div>
        <div class="container">
            <div class="project-title-area text-center">
                <div class="row">
                    @if(isset($all))
                        @foreach ($all as $item)
                            @php
                                $img='images/events/image1/'.$item->xcode.".jpg";
                                // $xvenu=substr($item->xvenu, 0, 20);
                                $xname=substr($item->xname, 0, 50);

                            @endphp
                            <div class="col-sm-4 mb-4">
                                <div class="card" style="width: 18rem;">
                                    <a href="event-details/{{$item->xcode}}">
                                        <img class="card-img-top" src="{{ asset($img) }}" >
                                    </a>
                                    <div class="card-body">
                                        <h6> {{$item->xname}}</h6>
                                        <small> Price-{{$item->xcost}}</small>
                                        <small> Qty-{{$item->xqty}}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset

                </div>
            </div>
        </div>

        


    @endsection
