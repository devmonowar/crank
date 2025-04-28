<?php

/**
 * Template part for displaying header layout two
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

// Email id 
// $header_top_email = get_theme_mod('header_email', __('crank@support.com', 'crank'));

// Phone Number
$header_info_phone = get_theme_mod('header_info_phone', __('+8801863366040', 'crank'));
$phone_number_url = preg_replace("/[^0-9]/", "", $header_info_phone);
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

// Header Address Link
$header_side_mailchimp = get_theme_mod('header_side_mailchimp');


//Offcanvas About Us
//$offcanvas_about_us = get_theme_mod('header_top_offcanvas_textarea', __('Web designing in a powerful way of just not an only professions. We have tendency to believe the idea that smart looking .', 'crank'));



?>




<div class="page-wrapper">
   <header class="main-header-two">
      <div class="main-header-two__wrapper">
         <nav class="main-menu main-menu-two">
            <div class="main-menu-two__wrapper">
               <div class="container">
                  <div class="main-menu-two__wrapper-inner">
                     <div class="main-menu-two__left">
                        <div class="main-header-two__logo">
                           <?php crank_header_logo(); ?>
                        </div>
                     </div>
                     <div class="main-menu-two__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php crank_header_menu(); ?>
                     </div>

                     <?php if (!empty($header_info_phone)) : ?>
                        <div class="main-menu-two__right">
                           <div class="main-menu-two__call">
                              <div class="main-menu-two__call-icon">
                                 <i class="icon-phone"></i>
                              </div>

                              <div class="main-menu-two__call-content">
                                 <h5 class="main-menu-two__call-number">
                                    <a href="tel:<?php echo esc_html($phone_number_url); ?>"><?php echo esc_html($header_info_phone); ?></a>
                                 </h5>
                              </div>

                           </div>
                        </div>
                     <?php endif; ?>

                  </div>
               </div>
            </div>
         </nav>
      </div>
   </header>

   <div class="stricky-header stricked-menu main-menu main-menu-two">
      <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
   </div><!-- /.stricky-header -->



   <!-- Main Slider Two Start -->
   <section class="main-slider-two">
      <div class="main-slider-two__wrap">
         <div class="main-slider-two__carousel owl-carousel owl-theme">
            <div class="item">
               <div class="container">
                  <div class="main-slider-two__content">
                     <h2 class="main-slider-two__title">Professional Care <br> for Your Car <br>
                        Keeping You on</h2>
                     <p class="main-slider-two__text">Car service is essential for maintaining performance
                        and longevity of <br> your vehicle. From oil changes Car service is essential</p>
                     <div class="main-slider-two__btn">
                        <a href="contact.html" class="thm-btn">Get Started<span
                              class="icon-arrow-up-right"></span></a>
                     </div>
                     <div class="main-slider-two__img-box">
                        <div class="main-slider-two__shape-1">
                           <img src="assets/images/shapes/main-slider-two-shape-1.png" alt=""
                              class="rotate-me">
                        </div>
                        <div class="main-slider-two__img">
                           <img src="assets/images/resources/main-slider-two-img-1.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="item">
               <div class="container">
                  <div class="main-slider-two__content">
                     <h2 class="main-slider-two__title">Professional Care <br> for Your Car <br>
                        Keeping You on</h2>
                     <p class="main-slider-two__text">Car service is essential for maintaining performance
                        and longevity of <br> your vehicle. From oil changes Car service is essential</p>
                     <div class="main-slider-two__btn">
                        <a href="contact.html" class="thm-btn">Get Started<span
                              class="icon-arrow-up-right"></span></a>
                     </div>
                     <div class="main-slider-two__img-box">
                        <div class="main-slider-two__shape-1">
                           <img src="assets/images/shapes/main-slider-two-shape-1.png" alt=""
                              class="rotate-me">
                        </div>
                        <div class="main-slider-two__img">
                           <img src="assets/images/resources/main-slider-two-img-2.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="item">
               <div class="container">
                  <div class="main-slider-two__content">
                     <h2 class="main-slider-two__title">Professional Care <br> for Your Car <br>
                        Keeping You on</h2>
                     <p class="main-slider-two__text">Car service is essential for maintaining performance
                        and longevity of <br> your vehicle. From oil changes Car service is essential</p>
                     <div class="main-slider-two__btn">
                        <a href="contact.html" class="thm-btn">Get Started<span
                              class="icon-arrow-up-right"></span></a>
                     </div>
                     <div class="main-slider-two__img-box">
                        <div class="main-slider-two__shape-1">
                           <img src="assets/images/shapes/main-slider-two-shape-1.png" alt=""
                              class="rotate-me">
                        </div>
                        <div class="main-slider-two__img">
                           <img src="assets/images/resources/main-slider-two-img-3.png" alt="">
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <!--Main Slider Two End -->

   <?php get_template_part('template-parts/header/header-quote-side-info'); ?>
   <?php get_template_part('template-parts/header/header-side-info'); ?>