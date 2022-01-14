@extends('index')

@section('css')
    <style>
       
        .sms-box{
            border: 1px solid rgb(167, 119, 119);
        }
        .sms{
            margin-left:15px;
        }
    </style>
@endsection
@section('content')

    <div class="body-content">
        <div class="container">
            <div class="terms-conditions-page">
                    <div class="blog-review wow fadeInUp">
                        <div class="row">
                            <div class="col-md-12">
                                <h3 class="title-review-comments">Chat With Us</h3>
                            </div>
                            
                            <div class="col-md-10 col-sm-10 blog-comments outer-bottom-xs sms-box">

                                @if(isset($data[0]))
                                    @foreach ($data as $item)
                                        <div >
                                            @if($item->sender=='Admin')
                                                <h4>Admin</h4>
                                            @else
                                                <h4>{{$item->xname}}</h4>
                                            @endif
                                            <span class="review-action pull-right">
                                                03 Day ago    
                                            </span>
                                            <p class="sms">{{$item->sms}}</p>
                                        </div>
                                        <hr>
                                    @endforeach
                                @else
                                    <div class="blog-comments inner-bottom-xs">
                                        <h4>There have no sms!</h4>
                                    </div>
                                @endif
                                {{-- <div class="blog-comments inner-bottom-xs">
                                    <h4>Jone doe</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>

                                <div class="blog-comments inner-bottom-xs">
                                    <h4>Admin</h4>
                                   
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div>
                                <div class="blog-comments inner-bottom-xs">
                                    <h4>Jone doe</h4>
                                    
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                </div> --}}
                                {{-- type box --}}
                                <div class="col-md-12">
                                    @if(session('warning'))
                                        <h3 class='text-danger text-center'>{{ session('warning')}} </h3>
                                    @endif
                                    <form action="{{ route('save-sms') }}" role="form" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <textarea class="form-control unicase-form-control" name="text" placeholder="Type here...."></textarea>
                                        </div>
                                        <div class="col-md-12 outer-bottom-small m-t-20">
                                            <button type="submit" class="form-control btn btn-primary ">Send</button>
                                        </div>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div>

        </div>
    </div>

    </div><!-- /.logo-slider -->
   
    </div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection
