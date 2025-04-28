<?php

/**
 * Template part for displaying header layout one
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

$header_topbar_switch = get_theme_mod('header_topbar_switch', true);
// Email id 
// $header_top_email = get_theme_mod('header_email', __('crank@support.com', 'crank'));

// Phone Number
//$header_info_phone = get_theme_mod('header_info_phone', __('+8801863366040', 'crank'));

// Contacts Text 
$header_side_contacts_text = get_theme_mod('header_side_contacts_text', __('CONTACT US', 'biddut'));


// Header Address Text
$header_top_address_text = get_theme_mod('header_address', __('76 San Fransisco Street. New York', 'crank'));

// Header Time
$header_top_time = get_theme_mod('header_top_time', __('Mon-Fri: 08:00 AM-05:00 PM', 'crank'));

// Header Address Link
// $header_top_address_link = get_theme_mod('header_address_link', __('#', 'crank'));


// header right
$crank_header_right = get_theme_mod('header_right_switch', false);
// $crank_header_menu_col = $crank_header_right ? 'col-xl-8 d-none d-xl-block' : 'col-xl-10 d-none d-xl-block';
// $crank_menu_position = $crank_header_right ? 'text-xxl-start' : 'text-xxl-end menu-border-none';

// header search btn 
// $header_search_switch = get_theme_mod('header_search_switch', true);


//Offcanvas About Us
// $offcanvas_about_us = get_theme_mod('header_top_offcanvas_textarea', __('Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'crank'));



?>



<div class="page-wrapper">
   <header class="main-header-three">
      <div class="main-header-three__wrapper">

         <?php if ($header_topbar_switch) : ?>
            <div class="main-menu-three__top">
               <div class="container">
                  <div class="main-menu-three__top-inner">
                     <ul class="list-unstyled main-menu-three__contact-list">
                        <?php if (!empty($header_top_address_text)) : ?>
                           <li>
                              <div class="icon">
                                 <i class="icon-pin"></i>
                              </div>
                              <div class="text">
                                 <p><?php echo esc_html($header_top_address_text); ?></p>
                              </div>
                           </li>
                        <?php endif; ?>
                        <?php if (!empty($header_top_time)) : ?>
                           <li>
                              <div class="icon">
                                 <i class="icon-clock"></i>
                              </div>
                              <div class="text">
                                 <p><?php echo esc_html($header_top_time); ?></p>
                              </div>
                           </li>

                        <?php endif; ?>
                     </ul>
                     <div class="main-menu-three__top-right">
                        <div class="main-menu-three__social">
                           <?php crank_header_social_profiles(); ?>
                        </div>
                     </div>


                  </div>
               </div>
            </div>
         <?php endif; ?>

         <nav class="main-menu main-menu-three">
            <div class="main-menu-three__wrapper">
               <div class="container">
                  <div class="main-menu-three__wrapper-inner">
                     <div class="main-menu-three__left">
                        <div class="main-header-three__logo">
                           <?php crank_header_logo(); ?>
                        </div>
                     </div>
                     <div class="main-menu-three__right">
                        <div class="main-menu-three__main-menu-box">
                           <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                           <?php crank_header_menu(); ?>

                        </div>
                        <div class="main-menu__nav-sidebar-icon">
                           <a class="navSidebar-button" href="#">
                              <span class="icon-dots-menu-one"></span>
                              <span class="icon-dots-menu-two"></span>
                              <span class="icon-dots-menu-three"></span>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </div>
   </header>

   <div class="stricky-header stricked-menu main-menu main-menu-three">
      <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
   </div><!-- /.stricky-header -->





   <!-- Main Slider Three Start -->
   <section class="main-slider-three">
      <div class="main-slider-three__wrap">
         <div class="main-slider-three__carousel owl-carousel owl-theme">
            <div class="item">
               <div class="main-slider-three__img-box">
                  <div class="main-slider-three__shape-1">
                     <img src="assets/images/shapes/main-slider-three-shape-1.png" alt="">
                  </div>
                  <div class="main-slider-three__img">
                     <img src="assets/images/resources/main-slider-three-img-1.jpg" alt="">
                  </div>
               </div>
               <div class="container">
                  <div class="main-slider-three__content">
                     <h2 class="main-slider-three__title">Car businesses <br> offer a <span>range of <br>
                           services</span></h2>
                     <p class="main-slider-three__text">Car service is essential for maintaining the
                        performance and longevity of <br> your vehicle. From oil changes Car service is
                        essential</p>
                     <div class="main-slider-three__btn">
                        <a href="contact.html" class="thm-btn">Contact Us<span
                              class="icon-arrow-up-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="item">
               <div class="main-slider-three__img-box">
                  <div class="main-slider-three__shape-1">
                     <img src="assets/images/shapes/main-slider-three-shape-1.png" alt="">
                  </div>
                  <div class="main-slider-three__img">
                     <img src="assets/images/resources/main-slider-three-img-2.jpg" alt="">
                  </div>
               </div>
               <div class="container">
                  <div class="main-slider-three__content">
                     <h2 class="main-slider-three__title">Car businesses <br> offer a <span>range of <br>
                           services</span></h2>
                     <p class="main-slider-three__text">Car service is essential for maintaining the
                        performance and longevity of <br> your vehicle. From oil changes Car service is
                        essential</p>
                     <div class="main-slider-three__btn">
                        <a href="contact.html" class="thm-btn">Contact Us<span
                              class="icon-arrow-up-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>

            <div class="item">
               <div class="main-slider-three__img-box">
                  <div class="main-slider-three__shape-1">
                     <img src="assets/images/shapes/main-slider-three-shape-1.png" alt="">
                  </div>
                  <div class="main-slider-three__img">
                     <img src="assets/images/resources/main-slider-three-img-3.jpg" alt="">
                  </div>
               </div>
               <div class="container">
                  <div class="main-slider-three__content">
                     <h2 class="main-slider-three__title">Car businesses <br> offer a <span>range of <br>
                           services</span></h2>
                     <p class="main-slider-three__text">Car service is essential for maintaining the
                        performance and longevity of <br> your vehicle. From oil changes Car service is
                        essential</p>
                     <div class="main-slider-three__btn">
                        <a href="contact.html" class="thm-btn">Contact Us<span
                              class="icon-arrow-up-right"></span></a>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="main-slider-three__shape-2"></div>
      </div>
   </section>
   <!--Main Slider Three End -->



   <!-- header area end -->

   <?php get_template_part('template-parts/header/header-quote-side-info'); ?>
   <?php get_template_part('template-parts/header/header-side-info'); ?>