<?php

/**
 * Template part for displaying header side information
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package crank
 */

$header_side_logo = get_theme_mod('header_side_logo', get_template_directory_uri() . '/assets/img/logo/logo-1.png');

// Contacts Text 
$header_side_address_email = get_theme_mod('header_side_address_email', __('needhelp@crank.com', 'crank'));
$header_side_address_phone = get_theme_mod('header_side_address_phone', __('+8801863366040', 'crank'));
$header_side_phone_number_url = preg_replace("/[^0-9]/", "", $header_side_address_phone);

// footer area links  switch
$header_side_info_switch = get_theme_mod('header_side_info_switch', false);

?>






<div class="mobile-nav__wrapper">
   <div class="mobile-nav__overlay mobile-nav__toggler"></div>
   <!-- /.mobile-nav__overlay -->
   <div class="mobile-nav__content">
      <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>
      <div class="logo-box">
         <a href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url($header_side_logo); ?>" alt="<?php echo esc_attr__('Side Logo', 'crank'); ?>">
         </a>
      </div>
      <!-- /.logo-box -->
      <div class="mobile-nav__container"></div>
      <!-- /.mobile-nav__container -->

      <?php if (!empty($header_side_info_switch)): ?>

         <ul class="mobile-nav__contact list-unstyled">

            <?php if (!empty($header_side_address_email)): ?>
               <li>
                  <i class="fa fa-envelope"></i>
                  <a href="mailto:<?php echo esc_html($header_side_address_email); ?>"><?php echo esc_html($header_side_address_email); ?></a>
               </li>
            <?php endif; ?>

            <?php if (!empty($header_side_address_phone)): ?>
               <li>
                  <i class="fa fa-phone"></i>
                  <a href="tel:<?php echo esc_html($header_side_phone_number_url); ?>"><?php echo esc_html($header_side_address_phone); ?></a>
               </li>
            <?php endif; ?>

         </ul><!-- /.mobile-nav__contact -->
         <div class="mobile-nav__top">
            <div class="mobile-nav__social">
               <?php crank_header_social_profiles(); ?>
            </div><!-- /.mobile-nav__social -->
         </div><!-- /.mobile-nav__top -->

      <?php endif; ?>

   </div>
   <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->