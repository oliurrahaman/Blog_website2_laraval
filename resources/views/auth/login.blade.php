<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Login Page</title>
	<link rel="stylesheet" href="{{asset('/')}}admin/styles/style.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/waves/waves.min.css">

</head>

<body>

<div id="single-wrapper">
	<form action="{{route('login')}}" method="POST" class="frm-single" >
        @csrf
		<div class="inside">
			<div class="title"><strong>BLOG</strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="email" name="email" placeholder="Email Name" class="frm-inp"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" name="password" placeholder="Password" class="frm-inp"><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="clearfix margin-bottom-20">
				<div class="pull-left">
					<div class="checkbox primary"><input type="checkbox" id="rememberme"><label for="rememberme">Remember me</label></div>
					<!-- /.checkbox -->
				</div>
				<!-- /.pull-left -->
				<div class="pull-right"><a href="page-recoverpw.html" class="a-link"><i class="fa fa-unlock-alt"></i>Forgot password?</a></div>
				<!-- /.pull-right -->
			</div>
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-sm-12">
					<div class="txt-login-with txt-center">or login with</div>
					<!-- /.txt-login-with -->
				</div>
				<!-- /.col-sm-12 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-facebook text-white waves-effect waves-light"><i class="ico fa fa-facebook"></i><span>Facebook</span></button></div>
				<!-- /.col-sm-6 -->
				<div class="col-sm-6"><button type="button" class="btn btn-sm btn-icon btn-icon-left btn-social-with-text btn-google-plus text-white waves-effect waves-light"><i class="ico fa fa-google-plus"></i>Google+</button></div>
				<!-- /.col-sm-6 -->
			</div>
			<!-- /.row -->
			<a href="page-register.html" class="a-link"><i class="fa fa-key"></i>New to BLOGAdmin? Register.</a>
			<div class="frm-footer">Oliur Rahaman © 2023.</div>
			<!-- /.footer -->
		</div>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->


	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('/')}}admin/scripts/jquery.min.js"></script>
	<script src="{{asset('/')}}admin/scripts/modernizr.min.js"></script>
	<script src="{{asset('/')}}admin/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('/')}}admin/plugin/nprogress/nprogress.js"></script>
	<script src="{{asset('/')}}admin/plugin/waves/waves.min.js"></script>

	<script src="{{asset('/')}}admin/scripts/main.min.js"></script>
</body>
</html>
