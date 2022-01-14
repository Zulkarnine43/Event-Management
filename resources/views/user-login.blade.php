@extends('index')

@section('content')
    
    <div class="container-fluid">
        <div class="row border border-white">
            <div class="col-12 shadow p-3  bg-white rounded h-100">
                @if(session('warning'))
                    <span class="alert alert-danger d-block">{{session('warning')}}</span>
                @endif
                <form role="form" action="user-login" method="post" class="col-6 mx-auto">
                    @csrf
                    <div class="form-group">
                        <label class="float-label">Email</label>
                        <input type="email" name="xemail" class="form-control" autocomplete="on">
                        <span style="color: red"> @error('xemail'){{ $message }}@enderror</span>
                    </div>
            
                    <div class="form-group">
                        <label class="float-label">Password</label>
                        <input type="password" name="password" class="form-control" maxlength="50"
                            autocomplete="on">
                        <span style="color: red"> @error('password'){{ $message }}@enderror</span>   
                    </div>

                    <small ><a href="{{ route('user-create')}}">Have not account?</a></small><br>
                    <input class="btn btn-raised btn-default ripple-effect btn-primary form-control" type="submit" value="Log In">
                    
                </form>
            </div>
        </div>
    </div><!-- /.container-fluid -->

@endsection
