@extends('website.master')

@section('title','Detail')
@section('body')

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg align-items-center">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-sm-6">
                    <div class="breadcrumb_tittle text-left">
                        <h2>blog details</h2>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb_content text-right">
                        <p>Home<span>/</span>blog details</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area all_post section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
                <h4 class="text-center text-success">{{session('message') }}</h4>
               <div class="single-post">
                  <div class="feature-img">
                     <img class="img-fluid" src="{{asset($blog->image)}}" alt="">
                  </div>
                  <div class="blog_details">
                     <h2>{{$blog->title}}
                     </h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                     </ul>
                    <p>{!! $blog->description !!}</p>

                  </div>
               </div>
               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <p class="like-info"><span class="align-middle"><i class="far fa-heart"></i></span> Lily and 4
                        people like this</p>
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                        <!-- <p class="comment-count"><span class="align-middle"><i class="far fa-comment"></i></span> 06 Comments</p> -->
                     </div>
                     <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fab fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="{{asset('/')}}website/img/post/preview.png" alt="">
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>Space The Final Frontier</h4>
                              </a>
                           </div>
                        </div>
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>Telescopes 101</h4>
                              </a>
                           </div>
                           <div class="arrow">
                              <a href="#">
                                 <span class="text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="{{asset('/')}}website/img/post/next.png" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               @foreach ($comments as $comment)
               <div class="blog-author">
                  <div class="media align-items-center">
                     <img src="{{asset('/')}}website/img/blog/author.png" alt="">
                     <div class="media-body">
                        <a href="#">
                           <h4>{{$comment->visitor->name }}</h4>
                        </a>
                        <p>{{$comment->date }}</p>
                        <p>{{$comment->comment}}</p>
                     </div>
                  </div>
               </div>
               @endforeach

               <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                @if(Session::get('visitor_id'))
                <form action="{{route('comment.store')}}" method="post" class="p-5 bg-light">
                 @csrf
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="comment" id="message" cols="30" rows="10" class="form-control"></textarea>
                        <input  type="hidden" value="{{$blog->id}}" name="blog_id"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Post Comment" class="btn btn-primary">
                    </div>
                </form>
                @else
                    <a href="{{route('user-login')}}" class="btn btn-light">Login For Comment</a>
                @endif
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
                                    <li><a href="single-blog.html">Culture</a> <span>(15)</span> </li>
                                    <li><a href="single-blog.html">Creative Design</a> <span>(15)</span> </li>
                                    <li><a href="single-blog.html">Illustration</a> <span>(15)</span> </li>
                                    <li><a href="single-blog.html">Production</a> <span>(15)</span> </li>
                                    <li><a href="single-blog.html">Mangement</a> <span>(15)</span> </li>
                                    <li><a href="single-blog.html">Branding</a> <span>(15)</span> </li>
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
   <!--================Blog Area end =================-->

   @endsection
