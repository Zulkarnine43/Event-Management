@extends('index')


@section('content')
    
    <div class="container-fluid">
        <div class="row border border-white">
            <div class="col-12 shadow p-3  bg-white rounded h-100">
                <form role="form" action="{{ route('user-create')}} " method="post" class="col-6 mx-auto">
                    @csrf
                    <div class="form-group">
                        <label class="float-label">Name</label>
                        <input type="text" name="xname" class="form-control" autocomplete="on">
                        <span style="color: red"> @error('xname'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label class="float-label">Mobile</label>
                        <input type="text" name="xmobile" class="form-control" autocomplete="on">
                        <span style="color: red"> @error('xmobile'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label class="float-label">Email</label>
                        <input type="email" name="xemail" class="form-control" autocomplete="on">
                        <span style="color: red"> @error('xemail'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label class="float-label">Address</label>
                        <input type="text" name="xadd" class="form-control" autocomplete="on">
                        <span style="color: red"> @error('xadd'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label class="float-label">Password</label>
                        <input type="password" name="password" class="form-control" maxlength="50"
                            autocomplete="on">
                        <span style="color: red"> @error('password'){{ $message }}@enderror</span>   
                    </div>

                    <small ><a href="{{ route('user-login')}}">Have an account?</a></small><br>
                    <input class="btn btn-raised btn-default ripple-effect btn-primary form-control" type="submit" value="Create">
                    
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->

@endsection
