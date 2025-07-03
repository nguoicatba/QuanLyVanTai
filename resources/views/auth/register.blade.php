<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('vendor/font-awesome/css/font-awesome.css') }}">
   <link rel="stylesheet" href="{{ asset('vendor/simple-line-icons/css/simple-line-icons.css') }}">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" id="bscss">
   <link rel="stylesheet" href="{{ asset('css/bootstrap-rtl.css') }}">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="{{ asset('css/app.css') }}" id="maincss">
  
</head>

<body>
   <div class="wrapper">
      <div class="block-center mt-4 wd-xl">
         <!-- START card-->
         <div class="card card-flat">
            <div class="card-header text-center bg-dark">
               <a href="#">
                  <img class="block-center" src={{ asset("img/logo.png") }} alt="Image">
               </a>
            </div>
            <div class="card-body">
          
               <form class="mb-3" id="registerForm" method="POST" action="{{ route('register.post') }}">
                  @csrf
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="signupInputEmail1" type="text"
                           placeholder="Enter name" autocomplete="off" name="name" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-envelope text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="signupInputPassword1" type="password"
                           placeholder="Password" autocomplete="off" name="password" required>
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="input-group with-focus">
                        <input class="form-control border-right-0" id="signupInputRePassword1" type="password"
                           placeholder="Retype Password" autocomplete="off" required
                           name="password_confirmation"
                           data-parsley-equalto="#signupInputPassword1">
                        <div class="input-group-append">
                           <span class="input-group-text fa fa-lock text-muted bg-transparent border-left-0"></span>
                        </div>
                     </div>
                  </div>
                  <div class="checkbox c-checkbox mt-0">
                     <label>
                        <input type="checkbox" value="" required name="agreed">
                        <span class="fa fa-check"></span>I agree with the<a class="ml-1" href="#">terms</a>
                     </label>
                  </div>
                  <button class="btn btn-block btn-primary mt-3" type="submit">Create account</button>
               </form>
               <p class="pt-3 text-center">Have an account?</p><a class="btn btn-block btn-secondary"
                  href="{{ route('login') }}">Signup</a>
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
   <script src="{{ asset('vendor/modernizr/modernizr.custom.js') }}"></script>
   <script src="{{ asset('vendor/jquery/dist/jquery.js') }}"></script>
   <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.js') }}"></script>
   <script src="{{ asset('vendor/js-storage/js.storage.js') }}"></script>
   <script src="{{ asset('vendor/parsleyjs/dist/parsley.js') }}"></script>
   <!-- =============== APP SCRIPTS ===============-->
   <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>