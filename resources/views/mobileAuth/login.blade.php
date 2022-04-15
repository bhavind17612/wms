<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{asset('img/fav.png')}}">

    <title>Shaazo - Log in </title>
  
    <!-- Vendors Style-->
    <link rel="stylesheet" href="{{asset('/css/vendors_css.css')}}">
      
    <!-- Style-->  
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('/css/skin_color.css')}}">   

</head>
    
<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('/images/auth-bg/bg-1.jpg')}})">
    
    <div class="container h-p100">
        <div class="row align-items-center justify-content-md-center h-p100">   
            
            <div class="col-12">
                <div class="row justify-content-center g-0">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="bg-white rounded10 shadow-lg">
                            <div class="content-top-agile p-20 pb-0">
                                <img src="{{asset('/img/black-logo.png')}}">                  
                            </div>
                            <div class="p-30">
                                <form class="text-left"  method="POST" action="{{ route('attemptLogin') }}">
                                  {{ csrf_field() }}
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
                                            <input type="text" name="email" class="form-control ps-15 bg-transparent {{ $errors->has('email') ? ' invalid' : '' }}" placeholder="Username" required value="{{ old('email') }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
                                            <input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password" >
                                        </div>
                                        
                                    </div>  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong style="color: red; font-size: 14px;" class="invalid">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                      <div class="row">
                                        <div class="col-6">
                                          <div class="checkbox">
                                            <input type="checkbox" id="basic_checkbox_1" >
                                            <label for="basic_checkbox_1">Remember Me</label>
                                          </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-6">
                                        <!--  <div class="fog-pwd text-end">
                                            <a href="mailto:password@shaaho.com" class="hover-warning"><i class="ion ion-locked"></i> Forgot password?</a><br>
                                          </div> -->
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-12 text-center">
                                          <button type="submit" class="btn btn-success form-control mt-10">Log in</button>
                                        </div>
                                        <!-- /.col -->
                                      </div>
                                </form> 
                                 
                            </div>                      
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Vendor JS -->
    <script src="{{asset('/js/vendors.min.js')}}"></script>
    <script src="{{asset('/js/pages/chat-popup.js')}}"></script>
    <script src="{{asset('/assets/icons/feather-icons/feather.min.js')}}"></script>   

</body>

</html>
