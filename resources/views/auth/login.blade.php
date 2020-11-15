<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="shortcut icon" href="images/favicon_1.ico">

       <title>{{ config('app.name', 'Kopotakkho Enterprise') }}</title>

        <!-- Base Css Files -->
     <!-- template Links -->
        <link href="{{asset('support/css/bootstrap.min.css')}}" rel="stylesheet" />

        <link href="{{asset('support/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('support/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('support/css/material-design-iconic-font.min.css')}}" rel="stylesheet">
        <link href="{{asset('support/css/animate.css')}}" rel="stylesheet" />
        <link href="{{asset('support/css/waves-effect.css')}}" rel="stylesheet">
        <link href="{{asset('support/assets/sweet-alert/sweet-alert.min.css')}}" rel="stylesheet">
        <link href="{{asset('support/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('support/css/style.css')}}" rel="stylesheet" type="text/css" />

        
<!-- template Links -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('support/js/modernizr.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script> 
    </head>
 <div class="wrapper-page">
            <div class="panel panel-color panel-primary panel-pages">
                <div class="panel-heading bg-img"> 
                    <div class="bg-overlay"></div>
                    <h3 class="text-center m-t-10 text-white"><strong>Kopotakkho Enterprise</strong> </h3>
                </div> 


                <div class="panel-body">
                <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">
                     @csrf
                    <div class="form-group ">
                        <div class="col-xs-12">
                           <input  id="email" type="email" class="form-control input-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                    </div>

                   

                    <div class="form-group">
                        <div class="col-xs-12">
                            <input id="password" type="password" class="form-control input-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                             @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input id="checkbox-signup" type="checkbox" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    

                    <div class="form-group text-center m-t-40">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg w-lg waves-effect waves-light" type="submit">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>

                    <div class="form-group m-t-30">
                        <div class="col-sm-7">
                            @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"><i class="fa fa-lock m-r-5"></i> {{ __('Forgot Your Password?') }}</a>
                            @endif
                        </div>
                        <div class="col-sm-5 text-right">
                            <a href="register.html">Create an account</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
        <script>
            var resizefunc = [];
        </script>
 <script src="{{asset('support/js/jquery.min.js')}}"></script>
        <script src="{{asset('support/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('support/js/waves.js')}}"></script>
        <script src="{{asset('support/js/wow.min.js')}}"></script>
        <script src="{{asset('support/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('support/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('support/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('support/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('support/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('support/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('support/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('support/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

        <!-- sweet alerts -->
        <script src="{{asset('support/assets/sweet-alert/sweet-alert.min.js')}}"></script>
        <script src="{{asset('support/assets/sweet-alert/sweet-alert.init.js')}}"></script>

        <!-- flot Chart -->
        <script src="{{asset('support/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('support/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('support/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('support/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('support/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('support/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('support/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('support/js/jquery.todo.js')}}"></script>

        <script type="text/javascript">

            /* ==============================================
            Counter Up
            =============================================== */
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
            });
        </script>

        <script>
            @if (Session::has('message')) 
                var type="{{ Session::get('alert-type', 'info')}}"
                switch(type){
                    case 'info':
                    toastr.info("{{ Session::get('message')}}");
                    break;
                    case 'success':
                    toastr.success("{{ Session::get('message')}}");
                    break;
                    case 'warning':
                    toastr.warning("{{ Session::get('message')}}");
                    break;
                    case 'error':
                    toastr.error("{{ Session::get('message')}}");
                    break;
                }
                @endif
        </script>

        <script>
            $(document).on("click", "#delete", function(e){
                e.preventDefault();
                var link = $(this).attr("href");
                swal({
                    title: "Are you sure to delete ?",
                    text: "Once delete this will permanently delete !",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                }).then((willDelete) => {
                        if (willDelete) {
                            window.location.href = link;
                        }else{
                            swal("Safe Data");
                        }
                    });
            });
        </script>
    
    </body>
</html>
