@extends('admin.mainmenu')
@section('css')
    <style>
        .imgshow {
            max-height: 130px;
            min-width: 200px;
            margin-left: 20px;
            margin-top: 5px;
        }

    </style>
@endsection
@section('main_content')
    <div class="container-fluid">
        <div class="row">
            <div class="card card-primary col-md-12">
                <div class="card-header row">
                    <div class="col-12">
                        <div class="row">
                            <div class="col-md-8">
                                <h3 class="card-title pull-left">Create Fashion</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ url('fashion-list') }}">Fashion List</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <form method="post" action='{{ route("create-fashion") }}' enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @if ($errors->any())
                            <span class="alert alert-danger d-block" role="alert">
                                <strong>{{ $errors->first() }}</strong>
                            </span>
                        @endif
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Fashion Name</small>
                                <input type="text" class="form-control" name="xname" >
                            </div>
                            <div class="form-group col-md-6">
                                <small>Venu Name</small>
                                <input type="text" class="form-control" name="xvenu" >
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <small>Cast Names</small>
                                <textarea class="form-control" name="xcast" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Pirce</small>
                                <input type="text" class="form-control" name="xmrp" >
                            </div>
                            <div class="form-group col-md-6">
                                <small>Discount Pirce</small>
                                <input type="text" class="form-control" name="xcost" >
                            </div>
                           
                        </div>
                        <div class="form-row">
                            
                            <div class="form-group col-md-6">
                                <small>Seat Available</small>
                                <input type="text" class="form-control" name="xseat" >
                            </div>
                            <div class="form-group col-md-6">
                                <small>Featured</small>
                                <select name='xfeature' class='form-control'>
                                    <option value='1'>Yes</option>
                                    <option value='0'>No</option>
                                </select>
                            </div>
                           
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Time</small>
                                <input type="time" class="form-control" name="xtime" >
                            </div>
                           
                            <div class="form-group col-md-6">
                                <small>Date</small>
                                <input type="date" class="form-control" name="xdate">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Contact Number</small>
                                <input type="text" class="form-control" name="xmobile" >
                            </div>
                            <div class="form-group col-md-6">
                                <small>Email</small>
                                <input type="email" class="form-control" name="xemail" >
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <small>Description</small>
                                <textarea class="form-control" name="xdesc" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-4">
                                <small>Image One</small>
                                <input type="file" class="form-control" name="img1" onChange="dynamic(this,'imgshow')">
                                <div class="form-group text-center">
                                    <img src="{{asset('images/noimage.jpg')}}" class=" imgshow img-fluid img-thumbnail mh-50"
                                        id="imgshow" >
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Image Two</small>
                                <input type="file" class="form-control" name="img2" onChange="dynamic(this,'imgshow2')">
                                <div class="form-group text-center ">
                                    <img src="{{asset('images/noimage.jpg')}}" class=" imgshow img-fluid img-thumbnail mh-50"
                                        id="imgshow2">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Image Three</small>
                                <input type="file" class="form-control" name="img3" onChange="dynamic(this,'imgshow3')">
                                <div class="form-group text-center ">
                                    <img src="{{asset('images/noimage.jpg')}}" class="imgshow img-fluid img-thumbnail mh-50"
                                    id="imgshow3" >
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="add" class="btn btn-primary form-control">Save</button>
                    </div>
                </form>
            </div>{{-- card end --}}

        </div><!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
@endsection

@section('js')
    <script src="{{ asset('js/imageshow.js') }}"> </script>
@endsection
