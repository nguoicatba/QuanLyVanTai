<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Bootstrap Admin App + jQuery">
    <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
    <title>Angle - Bootstrap Admin Template</title>
    <!-- =============== VENDOR STYLES ===============-->
    <!-- FONT AWESOME-->
    <link rel="stylesheet" href={{asset("vendor/font-awesome/css/font-awesome.css")}}>
    <!-- SIMPLE LINE ICONS-->
    <link rel="stylesheet" href={{asset("vendor/simple-line-icons/css/simple-line-icons.css")}}>
    <!-- =============== BOOTSTRAP STYLES ===============-->
    <link rel="stylesheet" href={{asset("css/bootstrap.css")}} id="bscss">
    <!-- =============== APP STYLES ===============-->
    <link rel="stylesheet" href={{asset("css/app.css")}} id="maincss">
</head>

<body>
    <div class="wrapper">
        <div class="block-center mt-4 wd-xl">
            <!-- START card-->
            <div class="card card-flat">
                <div class="card-header text-center bg-dark">
                    <a href={{asset("#")}}>
                        <img class="block-center rounded" src={{asset("img/logo.png")}} alt="Image">
                    </a>
                </div>
                <div class="card-body">
                    <p class="text-center py-2">SIGN IN TO CONTINUE.</p>
                    <form class="mb-3" id="loginForm" novalidate method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="exampleInputname1" type="name"
                                    placeholder="Enter name" autocomplete="off" name="name" required>
                                <div class="input-group-append">
                                    <span
                                        class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group with-focus">
                                <input class="form-control border-right-0" id="exampleInputPassword1" type="password"
                                    placeholder="Password" name="password" required>
                                <div class="input-group-append">
                                    <span
                                        class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix">
                            <div class="checkbox c-checkbox float-left mt-0">
                                <label>
                                    <input type="checkbox" value="" name="remember">
                                    <span class="fa fa-check"></span>Remember Me</label>
                            </div>
                            <div class="float-right"><a class="text-muted" href={{asset("recover.html")}}>Forgot your
                                    password?</a>
                            </div>
                        </div>
                        <button class="btn btn-block btn-primary mt-3" type="submit">Login</button>
                    </form>
                    <p class="pt-3 text-center">Need to Signup?</p><a class="btn btn-block btn-secondary"
                        href={{asset("register.html")}}>Register Now</a>
                </div>
            </div>
            <!-- END card-->
            <div class="p-3 text-center">
                <span class="mr-2">&copy;</span>
                <span>2018</span>
                <span class="mr-2">-</span>
                <span>Angle</span>
                <br>
                <span>Bootstrap Admin Template</span>
            </div>
        </div>
    </div>
    <!-- =============== VENDOR SCRIPTS ===============-->
    <!-- MODERNIZR-->
    <script src={{asset("vendor/modernizr/modernizr.custom.js")}}></script>
    <!-- JQUERY-->
    <script src={{asset("vendor/jquery/dist/jquery.js")}}></script>
    <!-- BOOTSTRAP-->
    <script src={{asset("vendor/bootstrap/dist/js/bootstrap.js")}}></script>
    <!-- STORAGE API-->
    <script src={{asset("vendor/js-storage/js.storage.js")}}></script>
    <!-- PARSLEY-->
    <script src={{asset("vendor/parsleyjs/dist/parsley.js")}}></script>
    <!-- =============== APP SCRIPTS ===============-->
    <script src={{asset("js/app.js")}}></script>
</body>

</html>