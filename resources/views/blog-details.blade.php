@extends('partials.main')

@section('css')

 @endsection


 @section('main')
    <header>
        <div id="theme-menu-two" class="main-header-area main-head-three pl-100 pr-100 pt-20 pb-15">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-2 col-5">
                        <div class="logo"><a href="index"><img src="{{ URL::asset('assets/img/logo/header_logo_one.svg') }}" alt=""></a></div>
                    </div>
                    <div class="col-xl-7 col-lg-8 d-none d-lg-block">
                        <nav class="main-menu navbar navbar-expand-lg justify-content-center">
                            <div class="nav-container">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav">
                                        <li class="nav-item dropdown mega-menu">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            All Categories 
                                            </a>
                                            <ul class="dropdown-menu submenu mega-menu__sub-menu-box" aria-labelledby="navbarDropdown">
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon7.svg') }}" alt=""></span> Business</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon8.svg') }}" alt=""></span> Technology</a></li>
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon9.svg') }}" alt=""></span> Development</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon10.svg') }}" alt=""></span> Photography</a></li>
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon11.svg') }}" alt=""></span> Digital Marketing</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon12.svg') }}" alt=""></span> Programming</a></li>
                                                <li><a href="index"><span><img src="{{ URL::asset('assets/img/icon/icon14.svg') }}" alt=""></span> Videograpgy</a></li>
                                                <li><a href="index-2"><span><img src="{{ URL::asset('assets/img/icon/icon13.svg') }}" alt=""></span> Illustration</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                                <li><a class="dropdown-item" href="index">Home Style 1</a></li>
                                                <li><a class="dropdown-item" href="index-2">Home Style 2</a></li>
                                                <li><a class="dropdown-item" href="index-3">Home Style 3</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                                <li><a class="dropdown-item" href="about">About Us</a></li>
                                                <li><a class="dropdown-item" href="courses">Course One</a></li>
                                                <li><a class="dropdown-item" href="courses-2">Course Two</a></li>
                                                <li><a class="dropdown-item" href="course-details">Courses Details</a></li>
                                                <li><a class="dropdown-item" href="price">Price</a></li>
                                                <li><a class="dropdown-item" href="instructor">Instructor</a></li>
                                                <li><a class="dropdown-item" href="instructor-profile">Instructor Profile</a></li>
                                                <li><a class="dropdown-item" href="faq">FAQ</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown active">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
                                                <li><a class="dropdown-item" href="blog">Blog Grid</a></li>
                                                <li><a class="dropdown-item" href="blog-details">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact" id="navbarDropdown5" role="button"  aria-expanded="false">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xl-3 col-lg-2 col-7">
                        <div class="right-nav d-flex align-items-center justify-content-end">
                            <div class="right-btn mr-25 mr-xs-15">
                                <ul class="d-flex align-items-center">
                                    <li><a href="contact" class="theme_btn free_btn">Try Free Now</a></li>
                                    <li><a class="sign-in ml-20" href="login"><img src="{{ URL::asset('assets/img/icon/user.svg') }}" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="hamburger-menu d-md-inline-block d-lg-none text-right">
                                <a href="javascript:void(0);">
                                    <i class="far fa-bars"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- /.theme-main-menu -->
    </header>

  
    

    <main>
     <!--page-title-area start-->
      <section class="page-title-area d-flex align-items-end" style="background-image: url(assets/img/page-title-bg/01.jpg);">
          <div class="container">
              <div class="row align-items-end">
                  <div class="col-lg-12">
                      <div class="page-title-wrapper mb-50">
                         <h1 class="page-title mb-25">Blog Details</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="index">Home - Pages -</a></li>
                                <li><a href="#">Blog Details</a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
      <!-- blog-details-area start -->
        <section class="blog-details-area pt-150 pb-105 pt-md-100 pb-md-55 pt-xs-100 pb-xs-55">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-box mb-45">
                            <h2>Unlock possibilities at colleges and universities</h2>
                            <ul class="blogs__meta mb-30">
                               <li><span class="blog-author">By Jason Momoa</span></li>
                               <li><span><img src="{{ URL::asset('assets/img/icon/material-date-range.svg') }}" alt="mate-date"> April 21 , 2021</span></li>
                               <li><span><img src="{{ URL::asset('assets/img/icon/material-access-time.svg') }}" alt="mate-date"> 03</span></li>
                               <li> <span><img src="{{ URL::asset('assets/img/icon/material-comment.svg') }}" alt="mate-date"> 5 Min</span></li>
                               <li>
                                   <div class="social-media blog-details-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </div>
                                </li>
                            </ul>
                            <img class="img-fluid blog-details-img mb-35" src="{{ URL::asset('assets/img/blog/16.jpg') }}" alt="blog-details-img">
                            <h3 class="blog-details-title mb-30">University Admissions Could Face Emergency Controls</h3>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                        <div class="blog-quote-box mb-45">
                            <div class="quote-icon">
                                <img src="{{ URL::asset('assets/img/icon/quote.svg') }}" alt="quote-icon">
                            </div>
                            <div class="quote__text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are passage of Lorem Ipsum.</p>
                                <h6>- Jason Statham</h6>
                            </div>
                        </div>
                        <div class="blog-details-text mb-30">
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>
                        </div>
                        <div class="blog-details-text row gx-2 mb-45">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="blog-details-img-box mb-30">
                                    <img class="img-fluid" src="{{ URL::asset('assets/img/blog/17.jpg') }}" alt="">
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="blog-details-img-box mb-30">
                                    <img class="img-fluid" src="{{ URL::asset('assets/img/blog/18.jpg') }}" alt="">
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                               <div class="blog-details-img-box mb-30">
                                    <img class="img-fluid" src="{{ URL::asset('assets/img/blog/18.jpg') }}" alt="">
                               </div>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidde.</p>
                        </div>
                        <div class="blog-details-video">
                            <h3 class="blog-details-title mb-30">10 Common Educations Questions and Answers</h3>
                            <p class="mb-30">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.</p>
                            <div class="video-details-area mb-30" style="background-image: url(assets/img/blog/20.jpg);">
                                 <a href="https://www.youtube.com/watch?v=7omGYwdcS04" class="popup-video"><i class="fas fa-play"></i></a>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.There are many variations of passages of Lorem Ipsum available.</p>
                            <ul class="blog-details-list mt-30">
                                 <li>There are many variations of passages of Lorem Ipsum available, but the majority have 
                                     ration in some form, by injected humour, or randomised words which don't look even slightly believable.</li>
                                 <li>There are many variations of passages of Lorem Ipsum available, but the majority have 
                                     ration in some form, by injected humour, or randomised words which don't look even slightly believable.</li>
                                 <li>There are many variations of passages of Lorem Ipsum available, but the majority have 
                                     ration in some form, by injected humour, or randomised words which don't look even slightly believable.</li>
                             </ul>
                        </div>
                        <div class="blog-details-gallery row gx-2 mb-45">
                            <div class="col-lg-8 col-md-8">
                               <div class="blog-details-img-box mb-30">
                                    <img class="img-fluid" src="{{ URL::asset('assets/img/blog/21.jpg') }}" alt="">
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                               <div class="blog-details-img-box mb-30">
                                    <img class="img-fluid" src="{{ URL::asset('assets/img/blog/22.jpg') }}" alt="">
                               </div>
                            </div>
                        </div>
                        <!-- <div class="blog-details-author row gx-2 align-items-center mb-45">
                            <div class="col-lg-6">
                                <div class="author__box mb-30">
                                    {{-- <img class="author-img" src="{{ URL::asset('assets/img/blog/23.jpg') }}" alt=""> --}}
                                    <div class="author__box-text">
                                        <h4 class="sub-tilte">Jason Momoa</h4>
                                        <p>Admin</p>
                                    </div>
                                    
                                </div>
                            </div>
                           <div class="col-lg-6">
                                <div class="social-media blog-details-social mb-30">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fas fa-basketball-ball"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                           </div>
                        </div> -->
                        <div class="row">
                            <div class="col-lg-12 text-center mb-40">
                                <button class="theme_btn comment_btn">View Comments (05)</button>
                            </div>
                        </div>
                        <div class="comments-area">
                            <ul class="latest-commmnet">
                                <li>
                                    <div class="single-comments mb-30">
                                        <div class="comments__author">
                                            <img src="{{ URL::asset('assets/img/blog/comment/01.jpg') }}" alt="">
                                        </div>
                                        <div class="comments__text">
                                            <h4 class="sub-title mb-10">Kavin Petersen <span class="float-end date-text">21 July , 2021</span></h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to.</p>
                                            <a href="#" class="reply mt-10">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-comments">
                                        <div class="comments__author">
                                            <img src="{{ URL::asset('assets/img/blog/comment/02.jpg') }}" alt="">
                                        </div>
                                        <div class="comments__text">
                                            <h4 class="sub-title mb-10">Lebron James <span class="float-end date-text">21 July , 2021</span></h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to.</p>
                                            <a href="#" class="reply mt-10">Reply</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="single-comments mb-30">
                                        <div class="comments__author ml-90 ml-md-0 ml-xs-0">
                                            <img src="{{ URL::asset('assets/img/blog/comment/03.jpg') }}" alt="">
                                        </div>
                                        <div class="comments__text">
                                            <h4 class="sub-title mb-10">Jason Momoa <span class="float-end date-text">21 July , 2021</span></h4>
                                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to.</p>
                                            <a href="#" class="reply mt-10">Reply</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="comments-form-area mb-45">
                            <h2>Leave a comment</h2>
                            <form action="#" class="row comments-form">
                                <div class="col-lg-6 mb-20">
                                    <input type="text" placeholder="Full Name">
                                </div>
                                <div class="col-lg-6 mb-20">
                                    <input type="text" placeholder="Email Name">
                                </div>
                                <div class="col-lg-12 mb-20">
                                    <textarea name="commnent" id="commnent" cols="30" rows="10" placeholder="Write Your Comments"></textarea>
                                </div>
                            </form>
                            <button class="theme_btn comment_btn">Submit Comment</button>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog-widget-area">
                            <div class="widget mb-50">
                                <div class="blog-search-widget">
                                    <form action="#" class="comments-form mb-20">
                                        <input type="text" placeholder="Type To Search">
                                    </form>
                                    <button class="theme_btn comment_btn">Search Now</button>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Categories</h4>
                                    <div class="courses-tag-btn cat-btn">
                                        <a href="#">Online School</a>
                                        <a href="#">Technology(36)</a>
                                        <a href="#">Product Design(36)</a>
                                        <a href="#">Business(16)</a>
                                        <a href="#">Programming(21)</a>
                                        <a href="#">Web Development(17)</a>
                                        <a href="#">Digital Marketing(07)</a>
                                        <a href="#">Content Writer(06)</a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Recent Post</h4>
                                    <ul class="blog-recent-post">
                                       <li>
                                            <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/24.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                             <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/25.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/26.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/27.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                             <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/28.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/29.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <h4 class="sub-title pb-20 mb-25 pt-25">Social Media</h4>
                                <div class="blog-social-widget">
                                     <div class="social-media mb-30">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fas fa-basketball-ball"></i></a>
                                        <a href="#"><i class="fab fa-youtube"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Popular Post</h4>
                                    <ul class="blog-recent-post">
                                       <li>
                                            <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/30.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                             <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/31.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/32.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                           <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/33.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                             <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/34.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Lorem Ipsum is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                       <li>
                                            <div class="posts mb-20">
                                                <img src="{{ URL::asset('assets/img/blog/35.jpg') }}" alt="" class="posts__thumb mb-15">
                                                <p>1st July , 2021</p>
                                                <h6><a href="blog-details">Ipsum Lorem is simply dummy text</a></h6>
                                            </div>
                                       </li>
                                    </ul>
                                </div>
                            </div>
                             <div class="widget mb-50">
                                <div class="blog-categories-widget">
                                    <h4 class="sub-title pb-20 mb-25 pt-25">Tags</h4>
                                    <div class="courses-tag-btn cat-btn tag-btn">
                                        <a href="#">Online Class</a>
                                        <a href="#">Skill Share</a>
                                        <a href="#">Web Learn</a>
                                        <a href="#">Development</a>
                                        <a href="#">Direction</a>
                                        <a href="#">Certificate</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-details-area end -->
       <!-- subscribe-area start -->
       <section class="subscribe-area footer-bg border-bot pt-145 pb-50 pt-md-90 pt-xs-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="subscribe-wrapper text-center mb-30">
                            <h2>Subscribe our Newsletter & Get every updates.</h2>
                           <div class="subscribe-form-box pos-rel">
                                <form class="subscribe-form">
                                    <input type="text" placeholder="Write Your E-mail">
                                </form>
                                <button class="sub_btn">Subscribe Now</button>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <!-- subscribe-area end -->
    </main>
@endsection



@section('js')
@endsection
