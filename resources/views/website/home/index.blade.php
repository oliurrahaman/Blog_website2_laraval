 @extends('website.master')

 @section('title','Home')
 @section('body')
 <!-- banner post start-->
 <section class="banner_post">
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="banner_post_1 banner_post_bg_1">
                <div class="banner_post_iner text-center">
                    <a href="category.html"><h5> Fashion / Life style</h5></a>
                    <a href="single-blog.html"><h2>All said replenish years void
                        kind say void </h2></a>
                    <p>Posted on April 15, 2019</p>
                </div>
            </div><div class="banner_post_1 banner_post_bg_2">
                <div class="banner_post_iner text-center">
                    <a href="category.html"><h5> Fashion / Life style</h5></a>
                    <a href="single-blog.html"><h2>All said replenish years void
                        kind say void </h2></a>
                    <p>Posted on April 15, 2019</p>
                </div>
            </div>
            <div class="banner_post_1 banner_post_bg_3">
                <div class="banner_post_iner text-center">
                    <a href="category.html"><h5> Fashion / Life style</h5></a>
                    <a href="single-blog.html"><h2>All said replenish years void
                        kind say void </h2></a>
                    <p>Posted on April 15, 2019</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner post end-->

<!-- subscribe form start-->
<div class="subscribe_form padding_top margin_top">
    <div class="container">
        <div class="row ">
            <div class="col-lg-12">
                <div class="subscribe_form_iner">
                    <form>
                        <div class="form-row align-items-center justify-content-center">
                            <div class="col-md-12 col-lg-3">
                            <h3>Subscribe
                                    Our Newsletter</h3>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                            <input type="text" class="form-control" placeholder="Your email">
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                <a href="#" class="btn_1">Subscribe</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- subscribe form end-->

<!-- feature_post start-->
<section class="all_post section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="single_post post_1 feature_post">
                            <div class="single_post_img">
                                <img src="{{asset('/')}}website/img/post/post_12.png" alt="">
                            </div>
                            <div class="single_post_text text-center">
                                <a href="category.html"><h5> Fashion / Life style</h5></a>
                                <a href="single-blog.html"><h2>All said replenish years void kind say void </h2></a>
                                <p>Posted on April 15, 2019</p>
                            </div>
                        </div>
                    </div>
                    @foreach ($blogs as $blog)
                    <div class="col-lg-6 col-sm-6">
                        <div class="single_post post_1">
                            <div class="single_post_img">
                                <img src="{{asset($blog->image)}}" alt="">
                            </div>
                            <div class="single_post_text text-center">
                                <a href="category.html"><h5>{{$blog->category->name}}</h5></a>
                                <a href="{{route('blog-detail',['id'=>$blog->id])}}"><h2>{{$blog->title}}</h2></a>
                                <p>{{$blog->created_at  }}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
                <div class="page_pageniation">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar_widget">
                    <div class="single_sidebar_wiget search_form_widget">
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder='Search Keyword'
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                <div class="btn_1">search</div>
                            </div>
                        </form>
                    </div>
                    <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                            <h3>Categories</h3>
                        </div>
                        <div class="single_catagory_item category">
                            <ul class="list-unstyled">
                                <li><a href="category.html">Culture</a> <span>(15)</span> </li>
                                <li><a href="category.html">Creative Design</a> <span>(15)</span> </li>
                                <li><a href="category.html">Illustration</a> <span>(15)</span> </li>
                                <li><a href="category.html">Production</a> <span>(15)</span> </li>
                                <li><a href="category.html">Mangement</a> <span>(15)</span> </li>
                                <li><a href="category.html">Branding</a> <span>(15)</span> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                            <h3>Popular Feeds</h3>
                        </div>
                        <div class="single_catagory_post post_2 ">
                            <div class="category_post_img">
                                <img src="{{asset('/')}}website/img/sidebar/sidebar_1.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                                <p><span> By Michal</span> / March 30</p>
                            </div>
                        </div>
                        <div class="single_catagory_post post_2 ">
                            <div class="category_post_img">
                                <img src="{{asset('/')}}website/img/sidebar/sidebar_2.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">

                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                                <p><span> By Michal</span> / March 30</p>
                            </div>
                        </div>
                        <div class="single_catagory_post post_2">
                            <div class="category_post_img">
                                <img src="{{asset('/')}}website/img/sidebar/sidebar_3.png" alt="">
                            </div>
                            <div class="post_text_1 pr_30">
                                <a href="single-blog.html">
                                    <h3>Subdue lesser beast winged
                                        bearing meat tree one</h3>
                                </a>
                                <p><span> By Michal</span> / March 30</p>
                            </div>
                        </div>
                    </div>

                    <div class="single_sidebar_wiget">
                        <div class="sidebar_tittle">
                            <h3>Share this post</h3>
                        </div>
                        <div class="social_share_icon tags">
                            <ul class="list-unstyled">
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature_post end-->
@endsection
