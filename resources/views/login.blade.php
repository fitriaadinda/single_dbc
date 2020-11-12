<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login DBC-Netwerk</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="{{ asset('style/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/scss/style.css') }}">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
					<form>
						<a href="index.html">
							<img class="align-content" src="{{ asset('style/images/LOGO-NETWERK2019.png') }}" alt="">
						</a>
					</form>
                </div>
				<div class="login-form">
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form class="form-signin" method="POST" action="{{ route('login') }}">
    				{{ csrf_field() }}
                        <div class="form-group">
							<h1 class="h3 mb-5 font-weight-normal text-center">Login {{ config('app.name') }}</h1>
                            {{-- <label>Email address</label>
							<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" autofocus required> --}}
							<label for="inputEmail" class="sr-only">Email address</label>
							<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                        </div>
                        <div class="form-group">
                            {{-- <label>Password</label>
							<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password"> --}}
							<label for="inputPassword" class="sr-only">Password</label>
							<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
							<label>
								<input type="checkbox" value="remember-me"> Remember me
							</label>
                            {{-- <label>
                                <input type="checkbox" value="remeber-me"> Remember Me
                            </label> --}}
                            {{-- <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label> --}}
						</div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('style/assets/js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('style/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('style/assets/js/main.js') }}"></script> --}}


</body>
</html>
{{-- =================================================================BATAS COBA2============================================ --}}

{{-- <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
      <h1 class="h3 mb-3 font-weight-normal">Login {{ config('app.name') }}</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
</html> --}}
