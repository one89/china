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
                                        <li class="nav-item dropdown active">
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
                                        <li class="nav-item dropdown">
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
                         <h1 class="page-title mb-25">Instructor</h1>
                         <div class="breadcrumb-list">
                            <ul class="breadcrumb">
                                <li><a href="index">Home - Pages -</a></li>
                                <li><a href="#">Instructor</a></li>
                            </ul>
                         </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
      <!--page-title-area end-->
       <!--great-deal-area start-->
       <section class="great-deal-area pt-150 pb-90 pt-md-100 pb-md-40 pt-xs-100 pb-xs-40">
           <div class="container">
               <div class="row justify-content-lg-center justify-content-start">
                   <div class="col-xl-3 col-lg-8">
                       <div class="deal-box mb-30 text-center text-xl-start">
                           <h2 class="mb-20"><b>Great</b> Deals For You</h2>
                           <p>There are many variations of passa of Lorem Ipsum available, but the majority have suffered.</p>
                       </div>
                   </div>
                   <div class="col-xl-8">
                       <div class="deal-active owl-carousel mb-30">
                            <div class="single-item">
                                <div class="single-box mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img src="{{ URL::asset('assets/img/icon/puzzle.svg') }}" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Learn New Skills</h4>
                                    <p>There are many variations of pas of Lorm Ipsum available.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box s-box2 mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img src="{{ URL::asset('assets/img/icon/manager.svg') }}" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Expert Trainers</h4>
                                    <p>There are many variations of pas of Lorm Ipsum available.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box s-box3 mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img src="{{ URL::asset('assets/img/icon/notepad.svg') }}" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Free Trial Lesson</h4>
                                    <p>There are many variations of pas of Lorm Ipsum available.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img src="{{ URL::asset('assets/img/icon/puzzle.svg') }}" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Learn New Skills</h4>
                                    <p>There are many variations of pas of Lorm Ipsum available.</p>
                                </div>
                            </div>
                            <div class="single-item">
                                <div class="single-box s-box2 mb-30">
                                    <div class="single-box__icon mb-25">
                                        <img src="{{ URL::asset('assets/img/icon/manager.svg') }}" alt="">
                                    </div>
                                    <h4 class="sub-title mb-20">Expert Trainers</h4>
                                    <p>There are many variations of pas of Lorm Ipsum available.</p>
                                </div>
                            </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>
       <!--great-deal-area end-->
       <!-- course-instructor start -->
        <section class="course-instructor nav-style-two pt-150 pb-120 pt-md-95 pb-md-70 pt-xs-95 pb-xs-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-60">
                            <h5 class="bottom-line mb-25">Our Instructor</h5>
                            <h2 class="mb-25">Explore Experienced Instructor</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/01.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">John Zlathan</a></h4>
                                <p>Software Development</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/02.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">Mally Yan</a></h4>
                                <p>UI/UX Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/03.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">Mesud Lamb</a></h4>
                                <p>Programmer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/04.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">Havana Lyon</a></h4>
                                <p>Digital Marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/09.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">Lebron Jain</a></h4>
                                <p>IT Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/10.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">Ariana Cany</a></h4>
                                <p>UArt Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/11.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">George Emily</a></h4>
                                <p>HR Manager</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6">
                        <div class="z-instructors text-center mb-30">
                            <div class="z-instructors__thumb mb-15">
                                <img src="{{ URL::asset('assets/img/instructor/12.jpg') }}" alt="">
                                <div class="social-media">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                            <div class="z-instructors__content">
                                <h4 class="sub-title mb-10"><a href="instructor-profile">Chris Jordan</a></h4>
                                <p>Dance Specialist</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- course-instructor end -->
        <!--what-loking-for start-->
        <section class="what-looking-for pos-rel gradient-bg pt-145 pb-130 pt-md-95 pb-md-80 pt-xs-95 pb-xs-80">
            <div class="what-blur-shape-one"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center mb-55">
                            <h5 class="bottom-line mb-25">Teachers & Students</h5>
                            <h2>What you Looking For?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="what-box text-center mb-3">
                            <div class="what-box__icon mb-30">
                                <img src="{{ URL::asset('assets/img/icon/phone-operator.svg') }}" alt="">
                            </div>
                            <h3>Do you want to teach here?</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                            <a href="contact" class="theme_btn border_btn">Register Now</a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="what-box text-center mb-3">
                            <div class="what-box__icon mb-30">
                                <img src="{{ URL::asset('assets/img/icon/graduate.svg') }}" alt="">
                            </div>
                            <h3>Do you want to learn here?</h3>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed di nonumy eirmod tempor invidunt ut labore et dolore magn aliq erat.</p>
                            <a href="contact" class="theme_btn border_btn active">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--what-loking-for end-->
        <!-- subscribe-area start -->
        <section class="subscribe-area border-bot pt-145 pb-50 pt-md-90 pt-xs-90">
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

