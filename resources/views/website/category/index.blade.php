@extends('website.master')
@section('title', 'Category')
@section('body')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>Category Page</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>Category Page</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- feature_post start-->
    <section class="all_post section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single_post post_1 feature_post">
                                <div class="single_post_img">
                                    <img src="{{asset('$category->image')}}" alt="">
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
                                    <a href=""><h5>{{ $blog->title }}</h5></a>
                                    <a href="{{route('blog-detail',['id'=>$blog->id])}}"><h2>{{$blog->title }}</h2></a>
                                    <p>Posted on {{ $blog->created_at }}</p>
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
                                    <li><a href="category.html"></a> <span>(1)</span> </li>

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
