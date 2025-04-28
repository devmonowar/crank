<?php

/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */


// Email id 
// $header_top_email = get_theme_mod('header_email', __('crank@support.com', 'crank'));

// Phone Number
//$header_info_phone = get_theme_mod('header_info_phone', __('+8801863366040', 'crank'));

// Contacts Text 
$header_side_contacts_text = get_theme_mod('header_side_contacts_text', __('CONTACT US', 'biddut'));


// Header Address Text
// $header_top_address_text = get_theme_mod('header_address', __('76 San Fransisco Street. New York', 'crank'));

// Header charity Text
// $header_top_charity_text = get_theme_mod('header_top_charity_text', __('Connect with our charity', 'crank'));

// Header Address Link
// $header_top_address_link = get_theme_mod('header_address_link', __('#', 'crank'));


// header right
$crank_header_right = get_theme_mod('header_right_switch', false);
// $crank_header_menu_col = $crank_header_right ? 'col-xl-8 d-none d-xl-block' : 'col-xl-10 d-none d-xl-block';
// $crank_menu_position = $crank_header_right ? 'text-xxl-start' : 'text-xxl-end menu-border-none';

// header search btn 
// $header_search_switch = get_theme_mod('header_search_switch', true);


//Offcanvas About Us
//$offcanvas_about_us = get_theme_mod('header_top_offcanvas_textarea', __('Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'crank'));



?>




<div class="page-wrapper">
   <header class="main-header">
      <div class="main-header__wrapper">
         <nav class="main-menu">
            <div class="main-menu__wrapper">
               <div class="container">
                  <div class="main-menu__wrapper-inner">
                     <div class="main-menu__left">
                        <div class="main-header__logo">
                           <?php crank_header_logo(); ?>
                        </div>
                     </div>
                     <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                        <?php crank_header_menu(); ?>

                     </div>

                     <?php if (!empty($crank_header_right)) : ?>
                        <div class="main-menu__right">
                           <div class="main-menu__social">
                              <?php crank_header_social_profiles(); ?>
                           </div>
                           <div class="main-menu__nav-sidebar-icon">
                              <a class="navSidebar-button" href="#">
                                 <span class="icon-dots-menu-one"></span>
                                 <span class="icon-dots-menu-two"></span>
                                 <span class="icon-dots-menu-three"></span>
                              </a>
                           </div>
                        </div>
                     <?php endif; ?>

                  </div>
               </div>
            </div>
         </nav>
      </div>
   </header>



   <div class="stricky-header stricked-menu main-menu">
      <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
   </div><!-- /.stricky-header -->







   <!--Page Header Start-->
   <!-- <section class="page-header">
      <div class="page-header__wrap">
         <div class="page-header__shape-1"
            style="background-image: url(assets/images/shapes/page-header-shape-1.png);"></div>
         <div class="container">
            <div class="page-header__inner">
               <div class="page-header__shape-2"></div>
               <div class="page-header__shape-3"></div>
               <div class="page-header__shape-4"></div>
               <div class="page-header__img-1">
                  <img src="assets/images/resources/page-header-img-1.png" alt="">
                  <div class="page-header__shape-5">
                     <img src="assets/images/shapes/page-header-shape-5.png" alt="">
                  </div>
               </div>
               <h2>About Us</h2>
               <div class="thm-breadcrumb__box">
                  <ul class="thm-breadcrumb list-unstyled">
                     <li><a href="index-2.html">Home</a></li>
                     <li><span class="icon-angle-right"></span></li>
                     <li>About Us</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--Page Header End-->

   <!--Counter One Start -->
   <!-- <section class="counter-one counter-three">
      <div class="container">
         <div class="counter-one__inner">
            <ul class="list-unstyled counter-one__list">
               <li class="wow fadeInLeft" data-wow-delay="100ms">
                  <div class="counter-one__single">
                     <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="600">00</h3>
                        <span>+</span>
                     </div>
                     <p class="counter-one__text">Team member</p>
                  </div>
               </li>
               <li class="wow fadeInLeft" data-wow-delay="200ms">
                  <div class="counter-one__single">
                     <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="2">00</h3>
                        <span>k+</span>
                     </div>
                     <p class="counter-one__text">Service Complete</p>
                  </div>
               </li>
               <li class="wow fadeInRight" data-wow-delay="300ms">
                  <div class="counter-one__single">
                     <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="53">00</h3>
                        <span>+</span>
                     </div>
                     <p class="counter-one__text">Winning award</p>
                  </div>
               </li>
               <li class="wow fadeInRight" data-wow-delay="400ms">
                  <div class="counter-one__single">
                     <div class="counter-one__count-box">
                        <h3 class="odometer" data-count="3">00</h3>
                        <span>k+</span>
                     </div>
                     <p class="counter-one__text">Client Review</p>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </section> -->
   <!--Counter One End -->


   <!-- header area end -->

   <?php get_template_part('template-parts/header/header-quote-side-info'); ?>
   <?php get_template_part('template-parts/header/header-side-info'); ?>