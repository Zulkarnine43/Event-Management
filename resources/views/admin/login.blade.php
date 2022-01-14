
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<body class="bg-light">
    <div class="row h-100">
        <div class="col-4 mx-auto my-auto shadow p-3 mb-5 bg-white rounded">
            <form role="form" action="login/run" method="post">
                @csrf
                <div class="form-group">
                    <label class="float-label">Email</label>
                    <input type="email" name="email" class="form-control" autocomplete="on">
                    <span style="color: red"> @error('email'){{ $message }}@enderror</span>
                </div>
        
                <div class="form-group">
                    <label class="float-label">Password</label>
                    <input type="password" name="password" class="form-control" maxlength="50"
                        autocomplete="on">
                    <span style="color: red"> @error('password'){{ $message }}@enderror</span>   
                </div>
                <small ><a href="sendpass/index">I forgot my password</a></small><br>
                <input class="btn btn-raised btn-default ripple-effect btn-primary form-control" type="submit" value="Log In">
                
            </form>
        </div>
    </div>  
</body>

                            
    
                                     
                