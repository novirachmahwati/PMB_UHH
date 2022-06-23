<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PMB UHH - Login</title>
	<link rel = "icon" href ="{{ asset('style/img/logo.png') }}" type = "image/x-icon" sizes="40x40">
    <!-- Custom fonts for this template-->
    <link href="{{ asset('style/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('style/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                <div class="card o-hidden shadow-lg my-5">
                    <div class="card-body p-0 p-5">
						<div class="text-center">
							<h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
						</div>
						@if ($message = Session::get('message'))
							<div class="alert alert-danger martop-sm">
								<p>{{ $message }}</p>
							</div>
						@endif
						<form action="{{ route('login.proses_login') }}" method="POST">
							{{csrf_field()}}
							{{ method_field('POST') }} 
							<div class="form-group">
								<input type="text" name="username" class="form-control" placeholder="Enter Username...">
								@if ($errors->has('username'))
									<span class="help-block">{{ $errors->first('username') }}</span>
								@endif
							</div>
							<div class="form-group">
								<input type="password" name="passw" class="form-control" id="exampleInputPassword" placeholder="Password">
								@if ($errors->has('passw'))
									<span class="help-block">{{ $errors->first('passw') }}</span>
								@endif
							</div>
							<div class="form-group">
								<div class="custom-control custom-checkbox small">
									<input type="checkbox" class="custom-control-input" id="customCheck">
									<label class="custom-control-label" for="customCheck">Remember
										Me</label>
								</div>
							</div>
							<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
						</form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('style/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('style/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('style/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('style/js/sb-admin-2.min.js') }}"></script>

</body>

</html>