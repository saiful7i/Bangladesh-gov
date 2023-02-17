<!DOCTYPE html>
<html <?php language_attributes( ); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>
    <!-- Topbar Part Start -->
    <header class="cont">
        <div class="row topbar">
            <div class="col-lg-6 topbar_left">
                <p>বাংলাদেশ জাতীয় তথ্য বাতায়ন</p>
            </div>
            <div class="col-lg-6 topbar_right text-end">
                ২০ কার্তিক, ১৪২৯ |<a href="#">English</a>
            </div>
        </div>
    </header>
    <!-- Topbar Part End -->
    <!-- logo part start -->
    <section class="cont logo">
        <div class="row">
            <div class="col-lg-5 logo_left">
                <a href="#">
                  <?php the_custom_logo(); ?>
                  <img src="./assets/images/header/logo_bn.png" alt="">
                </a>
            </div>
            <div class="col-lg-5 logo_search">
                <input type="text" placeholder="খুঁজুন ">
                <button>অনুসন্ধান </button>
            </div>
            <div class="col-lg-2 logo_right d-flex justify-content-end">
                <div class="logo_right_1">
                    <a href="#"><img src="./assets/images/header/a2i-logo-footer.png" alt=""></a>
                </div>
                <div class="logo_right_2">
                    <p>সাথে থাকুন:</p>
                    <a href="#"><img src="./assets/images/header/facebook-icon.png" alt=""></a>
                    <a href="#"><img src="./assets/images/header/twitter-blue-icon.png" alt=""></a>
                    <a href="#"><img src="./assets/images/header/gplus-icon.png" alt=""></a>
                    <a href="#"><img src="./assets/images/header/youtube-icon.png" alt=""></a>
                </div>
            </div>
        </div>
    </section>
    <!-- logo part end -->
    <!-- Menu part start -->
    <section class="cont">
        <div class="row menu_main">
            <nav class="navbar navbar-expand-lg bg-light">
                
                  
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php wp_nav_menu( array(
                      'theme_location'=>'Main_Menu',
                      'menu_class'=>'navbar-nav menu_top'
                    ) ); ?>
                    
                    
                    
                   
                   
                  </div>
                 
                
              </nav>
        </div>
    </section>
    <!-- Menu part end -->
    <!-- Hero part strat -->
    <section class="cont">
        <div class="row hero">
            <div class="col-lg-8 hero_main">
                <div class="banner">
                    <a href="#">
                      <?php dynamic_sidebar('banner'); ?>
                      <!-- <img src="./assets/images/padmabanner.jpg" class="d-block w-100" alt=""> -->
                    </a>
                </div>
                <div class="slider">
                    <!-- slider start -->
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="./assets/images/slider/4-02.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./assets/images/slider/corona_banner.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="./assets/images/slider/myGov Static2(1) (1).jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                    <!-- slider end -->
                </div>
                <div class="tab">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" disabled>Disabled</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                      <div class="row">
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/mobile_service.png" alt=""></a>
                          <p>Mobile</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                      <div class="row">
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/mobile_service.png" alt=""></a>
                          <p>Mobile</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                        <div class="col-lg-2 text-center">
                          <a href="#"><img src="./assets/images/tab/agriculture.png" alt=""></a>
                          <p>কৃষি</p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                    <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
                  </div>
                </div>
                <div class="list mt-4 ps-2">
                  <h5>উদ্যোগ</h5>
                  <?php dynamic_sidebar('list');?>
                  <!--  -->
                </div>
                <div class="others"></div>
            </div>
            <div class="col-lg-4 hero_side">
                <div class="sidebar_img">
                  <a href="">
                    <?php dynamic_sidebar('sideimg');?>
                  </a>
                  
                </div>
                <h4>সকল বাতায়ন</h4>
                <form action="" class="side">
                  <select name="" id="">
                    <option value="">ওয়েবসাইট বাছাই করুন</option>
                    <option value="">ঢাকা বিভাগ</option>
                    <option value="">চট্টগ্রাম বিভাগ</option>
                    <option value="">রাজশাহী বিভাগ</option>
                  </select>
                  <button>চলুন</button>
                </form>
                <div class="sidebar_video">
                  <!-- <h5>মুজিব১০০ আ্যাপ</h5> -->
                  <?php dynamic_sidebar('sidevideo'); ?>
                  <!-- <iframe width="315" height="200" src="https://www.youtube.com/embed/4Om3kZJL-qU" title="MUJIB100 APP | Speeches, Quotes, Books & More | Get Inspired Everyday" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
                  <!-- <h5>মাস্ক পরুন সেবা নিন</h5>
                  <img src="./assets/images/sidebar/mask-bd-portal (1).jpg" class="d-block w-100" alt="">
                  <h4>ডেঙ্গু প্রতিরোধে করণীয়</h4>
                  <img src="./assets/images/sidebar/dengu.jpg" class="d-block w-100" alt=""> -->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero part end -->
    <!-- footer part start -->
    <footer class="cont mt-4">
      <div class="row footer_main">
        <img src="./assets/images/footer/download.png" alt="">
      </div>
      <div class="row footer_bottom">
        <div class="col-lg-8 fb_left">
          <nav class="navbar navbar-expand-lg bg-light">
            
              
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php wp_nav_menu( array(
                      'theme_location'=>'FM',
                      'menu_class'=>'navbar-nav menu_top'
                    ) ); ?>

                <!-- <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">গোপনীয়তার নীতিমালা</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ব্যবহারের শর্তাবলি</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সার্বিক সহযোগিতায়</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সাইট ম্যাপ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">সচরাচর জিজ্ঞাসা</a>
                  </li>
                  
                                        
                </ul> -->
                
                
               
               
              </div>
             
            
          </nav>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২২-১০-৩০ ০৮:৩৫:০১</p>
        </div>
        <div class="col-lg-4 fb_right text-end">
          <p>পরিকল্পনা ও বাস্তবায়নে: এটুআই, মন্ত্রিপরিষদ বিভাগ, বিসিসি, বেসিস, ডিওআইসিটি</p>
          <img src="./assets/images/footer/np-logo-set.png" alt="">
        </div>
      </div>
    </footer>
    <!-- footer part end -->





    <!-- Script file Start -->
    <?php wp_footer(); ?>
    
    <script src="./myScript.js"></script>

<section class="cont pt-5 pb-5">
<div class="row">
  <div class="col-sm-4"></div>
  <div class="col-sm-4 mid">
  <?php
  $mark=30;
  if($mark >= 40){
    echo '<h1>Pass</h1>';
  }else{
    echo '<h1>Fail</h1>';
  }
  
  ?>
  </div>
  <div class="col-sm-4"></div>
</div>
</section>  
</body>
</html>