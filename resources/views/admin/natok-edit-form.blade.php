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
                                <h3 class="card-title pull-left">Edit Natok</h3>
                            </div>
                            <div class="col-md-4 text-right">
                                <a class="btn btn-warning" href="{{ url('natok-list') }}">Natok List</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <form method="post" action='../natok-edit' enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        @if ($errors->any())
                            <span class="alert alert-danger d-block" role="alert">
                                <strong>{{ $errors->first() }}</strong>
                            </span>
                        @endif
                        <input type="hidden" name="xcode" value="{{$data->xcode}}">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Natok Name</small>
                                <input type="text" class="form-control" name="xname" value="{{$data->xname}}">
                            </div>
                            <div class="form-group col-md-6">
                                <small>Venu Name</small>
                                <input type="text" class="form-control" name="xvenu" value="{{$data->xvenu}}" >
                            </div>
                            
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <small>Cast Names</small>
                                <textarea class="form-control" name="xcast" rows="2">{{$data->xcast}}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Pirce</small>
                                <input type="text" class="form-control" name="xmrp" value="{{$data->xmrp}}">
                            </div>
                            <div class="form-group col-md-6">
                                <small>Discount Pirce</small>
                                <input type="text" class="form-control" name="xcost" value="{{$data->xcost}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Seat Available</small>
                                <input type="text" class="form-control" name="xseat" value="{{$data->xseat}}">
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
                                <input type="time" class="form-control" name="xtime" value="{{$data->xtime}}">
                            </div>
                           
                            <div class="form-group col-md-6">
                                <small>Date</small>
                                <input type="date" class="form-control" name="xdate" value="{{$data->xdate}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <small>Contact Number</small>
                                <input type="text" class="form-control" name="xmobile" value="{{$data->xmobile}}">
                            </div>
                            <div class="form-group col-md-6">
                                <small>Email</small>
                                <input type="email" class="form-control" name="xemail" value="{{$data->xemail}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <small>Description</small>
                                <textarea class="form-control" name="xdesc" rows="2">{{$data->xdesc}}</textarea>
                            </div>
                        </div>
                        
                        @php
                            $img1 = 'images/events/image1/' . $data->xcode . '.jpg';
                            $img2 = 'images/events/image2/' . $data->xcode . '.jpg';
                            $img3 = 'images/events/image3/' . $data->xcode . '.jpg';
                            
                            if (is_file(public_path($img1))) {
                                $img1 = $img1;
                            } else {
                                $img1 = 'images/noimage.jpg';
                            }
                            
                            if (is_file(public_path($img2))) {
                                $img2 =$img2;
                            } else {
                                $img2 = 'images/noimage.jpg';
                            }
                            
                            if (is_file(public_path($img3))) {
                                $img3 = $img3;
                            } else {
                                $img3 = 'images/noimage.jpg';
                            }
                        @endphp
                        <div class="row">
                            <div class="form-group col-md-4">
                                <small>Image One</small>
                                <input type="file" class="form-control" name="img1" onChange="dynamic(this,'imgshow')">
                                <div class="form-group text-center">
                                    <img src="{{asset($img1)}}" class=" imgshow img-fluid img-thumbnail mh-50"
                                        id="imgshow" >
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Image Two</small>
                                <input type="file" class="form-control" name="img2" onChange="dynamic(this,'imgshow2')">
                                <div class="form-group text-center ">
                                    <img src="{{asset($img2)}}" class=" imgshow img-fluid img-thumbnail mh-50"
                                        id="imgshow2">
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <small>Image Three</small>
                                <input type="file" class="form-control" name="img3" onChange="dynamic(this,'imgshow3')">
                                <div class="form-group text-center ">
                                    <img src="{{asset($img3)}}" class="imgshow img-fluid img-thumbnail mh-50"
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
