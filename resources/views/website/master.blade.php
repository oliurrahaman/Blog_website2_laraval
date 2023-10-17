<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>  @yield('title')|| lifeleck BLOG</title>
    <link rel="icon" href="{{asset('/')}}website/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/liner_icon.css">
    <link rel="stylesheet" href="{{asset('/')}}website/css/search.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('/')}}website/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route('home')}}"> <img src="{{asset('/')}}website/img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('home')}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="archive.html">Archive</a>
                                </li>

                               <li class="dropdown dropdown-li">
                                <a href="" class="nav-link  dropdown-toggle" data-bs-toggle="dropdown">Blog Category</a>
                                <ul class="dropdown-menu rounded-0">
                                    @foreach($categories as $category)
                                            <li><a href="{{route('blog-category', ['id' => $category->id])}}"  class="dropdown-item ">{{$category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contact</a>
                                </li>



                                @if(Session::get('visitor_id'))
                                <li class="dropdown dropdown-li">
                                    <a href="" class="nav-link  dropdown-toggle" data-bs-toggle="dropdown" > {{Session()->get('visitor_name')}}</a>
                                    <ul class="dropdown-menu rounded-0">
                                        <a class="dropdown-item" href="{{route('my-dashboard')  }}"> My Dashboard</a>
                                        <a class="dropdown-item" href="{{route('user-logout')  }}"> Logout</a>
                                        </ul>
                                </li>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('user-login')}}">Login</a>
                                </li>
                                @endif


                            </ul>
                        </div>
                        <div class="header_social_icon d-none d-lg-block">
                            <ul>
                                <li>
                                    <div id="wrap">
                                        <form action="#" autocomplete="on">
                                            <input id="search" name="search" type="text" placeholder="Search here"><span class="ti-search"></span>
                                        </form>
                                    </div>
                                </li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-facebook"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"> <i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-instagram"></i></a></li>
                                <li><a href="#" class="d-none d-lg-block"><i class="ti-skype"></i></a></li>
                                </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
@yield('body')


    <!-- social_connect_part part start-->
    <section class="social_connect_part">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="social_connect">
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="{{asset('/')}}website/img/insta/instagram_1.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="{{asset('/')}}website/img/insta/instagram_2.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="{{asset('/')}}website/img/insta/instagram_3.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="{{asset('/')}}website/img/insta/instagram_4.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="{{asset('/')}}website/img/insta/instagram_5.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single-social_connect">
                        <div class="social_connect_img">
                            <img src="{{asset('/')}}website/img/insta/instagram_6.png" class="" alt="blog">
                            <div class="social_connect_overlay">
                                <a href="#"><span class="ti-instagram"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
    <!-- social_connect_part part end-->

     <!-- footer part start-->
	<footer class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>about us</h4>
					<p>Heaven fruitful doesn't over the lesser days appear cree ping seasons so behold bea Place likeness female form. Lesser Was green image lights fowl.</p>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Contact Info</h4>
					<ul>
						<li><p>Address :Your address goes
								here, your demo address.</p></li>
						<li><p>Phone : +8880 44338899</p></li>
						<li><p>Email : info@colorlib.com</p></li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Important Link</h4>
					<ul>
						<li><a href="#">WHMCS-bridge</a></li>
						<li><a href="#">Search Domain</a></li>
						<li><a href="#">My Account</a></li>
						<li><a href="#">Shopping Cart</a></li>
						<li><a href="#">Our  Main Shop</a></li>
					</ul>
				</div>
				<div class="col-xl-3 col-lg-6 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Newsletter</h4>
					<p>Heaven fruitful doesn't over lesser in days. Appear creeping seasons deve behold bearing days open</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '" required="" type="email">
							<button class="click-btn btn btn-default text-uppercase"><i class="ti-arrow-right"></i></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="copyright_text">
				<div class="row align-items-center">
					<div class="col-lg-8">
						<div class="copyright_part">
							<p class="footer-text m-0">Copyright © 2019 All rights reserved <span class="px-2">|</span> This template is Made with <a href="http://colorlib.com"><i class="ti-heart"></i></a> by <a href="http://colorlib.com">Colorlib</a></p>
						</div>
					</div>
					<div class="col-lg-4 text-center text-lg-right">
						<div class="footer-social">
							<a href="#"><i class="ti-facebook"></i></a>
							<a href="#"> <i class="ti-twitter"></i> </a>
							<a href="#"><i class="ti-instagram"></i></a>
							<a href="#"><i class="ti-skype"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>





    <!-- footer part end-->
    <!-- jquery -->
    <script src="{{asset('/')}}website/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="{{asset('/')}}website/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="{{asset('/')}}website/js/bootstrap.min.js"></script>
    <!-- custom js -->
    <script src="{{asset('/')}}website/js/custom.js"></script>
</body>

</html>
