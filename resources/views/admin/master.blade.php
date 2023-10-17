<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>@yield('title')| BLOG</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{asset('/')}}admin/styles/style.min.css">

	<!-- Material Design Icon -->
	<link rel="stylesheet" href="{{asset('/')}}admin/fonts/material-design/css/materialdesignicons.css">
    	<!-- Data Tables -->
        <link rel="stylesheet" href="{{asset('/')}}admin/plugin/datatables/media/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="{{asset('/')}}admin/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css">

	<!-- mCustomScrollbar -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

	<!-- Waves Effect -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/waves/waves.min.css">


	<!-- Sweet Alert -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/sweet-alert/sweetalert.css">

	<!-- Percent Circle -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/percircle/css/percircle.css">

	<!-- Chartist Chart -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/chart/chartist/chartist.min.css">

	<!-- FullCalendar -->
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/fullcalendar/fullcalendar.min.css">
	<link rel="stylesheet" href="{{asset('/')}}admin/plugin/fullcalendar/fullcalendar.print.css" media='print'>


    !-- Summernote css -->
        <link href="{{asset('/')}}admin/summernote/summernote-bs4.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('/')}}admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Color Picker -->
	<link rel="stylesheet" href="{{asset('/')}}admin/color-switcher/color-switcher.min.css">
</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="{{route('dashboard')}}" class="logo">BLOG</a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="current">
					<a class="waves-effect" href="{{route('dashboard')}}"><i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span></a>
				</li>
				<li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>Category Module</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('category.add')}}">Add Category</a></li>
						<li><a href="{{route('category.manage')}}">Manage Category</a></li>

					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>Blog Module</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="{{route('blog.add')}}">Add Blog</a></li>
						<li><a href="{{route('blog.manage')}}">Manage Blog</a></li>

					</ul>
					<!-- /.sub-menu js__content -->
				</li>

                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>User Module</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">
						<li><a href="icons-font-awesome-icons.html">Add User</a></li>
						<li><a href="icons-fontello.html">Manage User</a></li>

					</ul>
					<!-- /.sub-menu js__content -->
				</li>
                <li>
					<a class="waves-effect parent-item js__control" href="#"><i class="menu-icon mdi mdi-flower"></i><span>Comment Module</span><span class="menu-arrow fa fa-angle-down"></span></a>
					<ul class="sub-menu js__content">

						<li><a href="{{route('comment.index')}}">Manage Comment</a></li>

					</ul>
					<!-- /.sub-menu js__content -->
				</li>


			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->

<div class="fixed-navbar">
	<div class="pull-left">
		<button type="button" class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
		<h1 class="page-title">@yield('p-title')</h1>
		<!-- /.page-title -->
	</div>
	<!-- /.pull-left -->
	<div class="pull-right">
		<div class="ico-item">
			<a href="#" class="ico-item fa fa-search js__toggle_open" data-target="#searchform-header"></a>
			<form action="#" id="searchform-header" class="searchform js__toggle"><input type="search" placeholder="Search..." class="input-search"><button class="fa fa-search button-search" type="submit"></button></form>
			<!-- /.searchform -->
		</div>
		<!-- /.ico-item -->
		<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<!-- /.ico-item fa fa-fa-arrows-alt -->
		<div class="ico-item toggle-hover js__drop_down ">
			<span class="fa fa-th js__drop_down_button"></span>
			<div class="toggle-content">
				<ul>
					<li><a href="#"><i class="fa fa-github"></i><span class="txt">Github</span></a></li>
					<li><a href="#"><i class="fa fa-bitbucket"></i><span class="txt">Bitbucket</span></a></li>
					<li><a href="#"><i class="fa fa-slack"></i><span class="txt">Slack</span></a></li>
					<li><a href="#"><i class="fa fa-dribbble"></i><span class="txt">Dribbble</span></a></li>
					<li><a href="#"><i class="fa fa-amazon"></i><span class="txt">Amazon</span></a></li>
					<li><a href="#"><i class="fa fa-dropbox"></i><span class="txt">Dropbox</span></a></li>
				</ul>
				<a href="#" class="read-more">More</a>
			</div>
			<!-- /.toggle-content -->
		</div>
		<!-- /.ico-item -->
		<a href="#" class="ico-item fa fa-envelope notice-alarm js__toggle_open" data-target="#message-popup"></a>
		<a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open" data-target="#notification-popup"></span></a>
		<div class="ico-item">
			<img src="http://placehold.it/80x80" alt="" class="ico-img">
			<ul class="sub-ico-item">
				<li><a href="#">Settings</a></li>
				<li><a href="#">Blog</a></li>

				    <a class="dropdown-item" href=""   onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                     <form action="{{route('logout')}}" method="post" id="logoutForm">
                    @csrf

                </form>
			</ul>
			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.pull-right -->
</div>
<!-- /.fixed-navbar -->

<div id="notification-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Your Notifications</h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Anna William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-warning"><i class="fa fa-warning"></i></span>
					<span class="name">Update Status</span>
					<span class="desc">Failed to get available update data. To ensure the please contact us.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Michael Zenaty</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">50 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Simon</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">1 hour</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-violet"><i class="fa fa-flag"></i></span>
					<span class="name">Account Contact Change</span>
					<span class="desc">A contact detail associated with your account has been changed.</span>
					<span class="time">2 hours</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen 987</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Yesterday</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Jenny</span>
					<span class="desc">Like your post: “Contact Form 7 Multi-Step”</span>
					<span class="time">Oct, 28</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas William</span>
					<span class="desc">Like your post: “Facebook Messenger”</span>
					<span class="time">Oct, 27</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>
<!-- /#notification-popup -->

<div id="message-popup" class="notice-popup js__toggle" data-space="50">
	<h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
	<!-- /.popup-title -->
	<div class="content">
		<ul class="notice-list">
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">John Doe</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">10 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Harry Halen</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">15 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Thomas Taylor</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">30 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Jennifer</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
					<span class="name">Helen Candy</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">45 min</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Anna Cavan</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 hour ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar bg-success"><i class="fa fa-user"></i></span>
					<span class="name">Jenny Betty</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 day ago</span>
				</a>
			</li>
			<li>
				<a href="#">
					<span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
					<span class="name">Denise Peterson</span>
					<span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere repellat voluptates.</span>
					<span class="time">1 year ago</span>
				</a>
			</li>
		</ul>
		<!-- /.notice-list -->
		<a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
	</div>
	<!-- /.content -->
</div>


	<!-- /.content -->
</div>
<!-- #color-switcher -->

<div id="wrapper">
    <div class="main-content">
        <div class="row small-spacing">
	        @yield('body')
        </div>
    </div>
	<!-- /.main-content -->
</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="{{asset('/')}}admin/script/html5shiv.min.js"></script>
		<script src="{{asset('/')}}admin/script/respond.min.js"></script>
	<![endif]-->
	<!--
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{asset('/')}}admin/scripts/jquery.min.js"></script>
	<script src="{{asset('/')}}admin/scripts/modernizr.min.js"></script>
	<script src="{{asset('/')}}admin/plugin/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('/')}}admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="{{asset('/')}}admin/plugin/nprogress/nprogress.js"></script>
	<script src="{{asset('/')}}admin/plugin/sweet-alert/sweetalert.min.js"></script>
	<script src="{{asset('/')}}admin/plugin/waves/waves.min.js"></script>
	<!-- Full Screen Plugin -->
	<script src="{{asset('/')}}admin/plugin/fullscreen/jquery.fullscreen-min.js"></script>

	<!-- Google Chart -->
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<!-- chart.js Chart -->
	<script src="{{asset('/')}}admin/plugin/chart/chartjs/Chart.bundle.min.js"></script>
	<script src="{{asset('/')}}admin/scripts/chart.chartjs.init.min.js"></script>

	<!-- FullCalendar -->
	<script src="{{asset('/')}}admin/plugin/moment/moment.js"></script>
	<script src="{{asset('/')}}admin/plugin/fullcalendar/fullcalendar.min.js"></script>
	<script src="{{asset('/')}}admin/scripts/fullcalendar.init.js"></script>






    <script src="{{asset('/')}}admin/js/jquery.min.js"></script>
    <script src="{{asset('/')}}admin/js/bootstrap.bundle.min.js"></script>
    <!-- Summernote js -->
    <script src="{{asset('/')}}admin/summernote/summernote-bs4.min.js"></script>
      <!--Datatable-->
      <script src="{{asset('/')}}admin/plugin/datatables/media/js/jquery.dataTables.min.js"></script>
      <script src="{{asset('/')}}admin/plugin/datatables/media/js/dataTables.bootstrap.min.js"></script>
      <script src="{{asset('/')}}admin/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
      <script src="{{asset('/')}}admin/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js"></script>
      <script src="{{asset('/')}}admin/scripts/datatables.demo.min.js"></script>
    <!-- init js -->
    <script src="{{asset('/')}}admin/js/form-editor.init.js"></script>
	<!-- Sparkline Chart -->
	<script src="{{asset('/')}}admin/plugin/chart/sparkline/jquery.sparkline.min.js"></script>
	<script src="{{asset('/')}}admin/scripts/chart.sparkline.init.min.js"></script>

	<script src="{{asset('/')}}admin/scripts/main.min.js"></script>
	<script src="{{asset('/')}}admin/color-switcher/color-switcher.min.js"></script>
</body>
</html>
