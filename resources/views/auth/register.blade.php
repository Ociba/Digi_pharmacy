<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/favicon.png">
    <title>DigiPharmacy</title>
    
    <!-- page css -->
    <link href="{{asset('dist/css/pages/login-register-lock.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet">
</head>

<body class="skin-default card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    @include('layouts.preloader')
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register">
            <div class="login-box card"  style="height:600px;">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" class="form-horizontal form-material">
                    @csrf
                        <h3 class="text-center m-b-20">Sign Up</h3>
                        <div class="form-group">
                        <label>Name</label>
                            <div class="col-xs-12">
                                <input class="form-control" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                            </div>
                        </div>
                        <div class="form-group ">
                        <label>Email</label>
                            <div class="col-xs-12">
                                <input id="email" class="form-control" type="email" name="email" :value="old('email')" required >
                            </div>
                        </div>
                        <div class="form-group ">
                        <label>Password</label>
                            <div class="col-xs-12">
                                <input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" >
                            </div>
                        </div>
                        <div class="form-group">
                        <label>Confirm Password</label>
                            <div class="col-xs-12">
                                <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-xs-12">
                                <button class="btn btn-info btn-lg w-100 btn-rounded text-uppercase waves-effect waves-light text-white" type="submit">Sign Up</button>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="{{ route('login') }}" class="text-info m-l-5"><b>Sign In</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.javascript')
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
    </script>
</body>
</html>
