<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="/proses_login" method="POST">
    @csrf 
      <img width="72" height="72" class="mb-4" alt="" src="assets/images/icon/logo.png">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      
      <label class="sr-only" for="inputUsername">Username</label>
      <input class="form-control" id="inputUsername" autofocus="" required="" type="username" placeholder="Username" name="username"> 
    
     <p> <label class="sr-only" for="inputPassword">Password</label></p>
      <input class="form-control" id="inputPassword" required="" type="password" placeholder="Password" name="password">
       <!--@error('password')
      <p style="color:red">{{$message}}</p>
      @enderror-->
      <div class="alert alert-danger">
      <p style="color:red">{{$message??'Incorrect username or password'}}</p></div>
      </div>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
          <a class="btn btn-link" href="route('password.request')">Forgot Your Password?</a>
        </label>
      </div>
      <div class="form-group row mb-0">
                   
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      



      
      <p class="mt-5 mb-3 text-muted">© 2019-2020</p>
    </form>
   </body>
</html>