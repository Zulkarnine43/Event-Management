@extends('index')

@section('content')

    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->
                    <div class="col-md-6 col-sm-6 sign-in">
                        <h4 class="">Sign in</h4>

                        <form class="register-form outer-top-xs" action="{{ route('user-login') }}" method="post"
                            role="form">
                            @csrf
                            @if (session('warning'))
                                <span class="alert alert-danger d-block form-control">{{ session('warning') }}</span>
                            @endif
                            <br>

                            <div class="form-group">
                                <label class="info-title">Email Address <span>*</span></label>
                                <input type="email" class="form-control unicase-form-control text-input" name="xemail">
                                <span style="color: red"> @error('xemail'){{ $message }}@enderror</span>
                                </div>
                                <div class="form-group">
                                    <label class="info-title">Password <span>*</span></label>
                                    <input type="password" class="form-control unicase-form-control text-input" name="password">
                                    <span style="color: red"> @error('password'){{ $message }}@enderror</span>
                                    </div>

                                    <button type="submit"
                                        class="btn-upper btn btn-primary checkout-page-button form-control">Login</button>
                                </form>
                            </div>
                            <!-- Sign-in -->

                            <!-- create a new account -->
                            <div class="col-md-6 col-sm-6 create-new-account">
                                <h4 class="checkout-subtitle">Create a new account</h4>

                                <form class="register-form outer-top-xs" action="{{ route('user-create') }} " method="post"
                                    role="form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="float-label">Name</label>
                                        <input type="text" name="xname" class="form-control unicase-form-control text-input"
                                            autocomplete="on">
                                        <span style="color: red"> @error('xname'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="float-label">Mobile</label>
                                            <input type="text" name="xmobile" class="form-control unicase-form-control text-input"
                                                autocomplete="on">
                                            <span style="color: red"> @error('xmobile'){{ $message }}@enderror</span>
                                            </div>
                                            <div class="form-group">
                                                <label class="float-label">Email</label>
                                                <input type="email" name="xemail" class="form-control unicase-form-control text-input"
                                                    autocomplete="on">
                                                <span style="color: red"> @error('xemail'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group">
                                                    <label class="float-label">Address</label>
                                                    <input type="text" name="xadd" class="form-control unicase-form-control text-input"
                                                        autocomplete="on">
                                                    <span style="color: red"> @error('xadd'){{ $message }}@enderror</span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="float-label">Password</label>
                                                        <input type="password" name="password" class="form-control unicase-form-control text-input"
                                                            maxlength="50" autocomplete="on">
                                                        <span style="color: red"> @error('password'){{ $message }}@enderror</span>
                                                        </div>


                                                        <button type="submit" class="btn-upper btn btn-primary checkout-page-button form-control">Sign
                                                            Up</button>
                                                    </form>


                                                </div>
                                                <!-- create a new account -->
                                            </div><!-- /.row -->
                                        </div>

                                    </div><!-- /.owl-carousel #logo-slider -->
                                </div><!-- /.logo-slider-inner -->

                                </div><!-- /.logo-slider -->

                                </div><!-- /.container -->
                                </div><!-- /.body-content -->

                            @endsection
