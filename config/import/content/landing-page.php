<?php
/**
 * Hello! Pro - Demo LANDING page One-Click Theme Setup content.
 *
 * Landing Page content.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Photo by Jonas Verstuyft on Unsplash.
$hello_pro_landingpage_welcome_image_url = CHILD_URL . '/config/import/images/landingpage-hero-default.jpg';

// Photo by Aaron Burden on Unsplash.
$hello_pro_landingpage_optin_image_url = CHILD_URL . '/config/import/images/landingpage-optin-default.jpg';

// Photo by Aaron Mello on Unsplash.
$hello_pro_landingpage_testimonials_image_url = CHILD_URL . '/config/import/images/landingpage-testimonials-default.jpg';

// Begin Creating Content Output.
return <<<CONTENT
<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#fff","containerImgID":14,"containerDimRatio":70,"className":"welcome"} -->
<div style="background-color:#fff;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container welcome ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-70 has-background-dim" src="$hello_pro_landingpage_welcome_image_url" alt=""/></div><div class="ab-container-content" style="max-width:1200px"><!-- wp:paragraph {"align":"left","fontSize":"huge"} -->
<p style="text-align:left" class="has-huge-font-size">Life is a<strong> Journey</strong><br>Not a <strong>Destination</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p style="text-align:left">Find your purpose with my Instructional Courses.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":660,"containerBackgroundColor":"#fffcf5"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:660px"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-squared"} -->
<div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingBottom":5,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#f5f2eb"} -->
<div style="background-color:#f5f2eb;padding-bottom:5%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1200px"><!-- wp:atomic-blocks/ab-columns {"columns":2,"layout":"ab-2-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-2 ab-2-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Course Description</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p style="text-align:left">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Course Requirements</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p style="text-align:left">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":12,"containerPaddingBottom":10,"containerPaddingLeft":12,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1000,"containerBackgroundColor":"#313131","containerImgID":27,"containerDimRatio":70,"className":"opt-in"} -->
<div style="background-color:#313131;padding-left:12%;padding-right:12%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container opt-in ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-70 has-background-dim" src="$hello_pro_landingpage_optin_image_url" alt=""/></div><div class="ab-container-content" style="max-width:1000px"><!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
<p style="text-align:center" class="has-text-color has-huge-font-size has-primary-color">Sign Up Today.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p style="text-align:center" class="has-text-color has-white-color"><strong>Put your tantalizing opt-in copy here, and watch your email list grow faster than magic beanstalks.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p style="text-align:center" class="has-text-color has-white-color">To display an Opt-in form, simply install your favorite Forms plugin. Then, replace this text with your Form Shortcode or Block.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1060,"containerBackgroundColor":"#fffcf5"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1060px"><!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","className":"text-subhead"} -->
<p class="has-text-color has-small-font-size has-primary-color text-subhead">Course #1:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Course Number One</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-squared"} -->
<div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","className":"text-subhead"} -->
<p class="has-text-color has-small-font-size has-primary-color text-subhead">Course #2:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Course Number Two</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-squared"} -->
<div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","className":"text-subhead"} -->
<p class="has-text-color has-small-font-size has-primary-color text-subhead">Course #3:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Course Number Three</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-squared"} -->
<div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":1,"containerPaddingRight":0,"containerPaddingBottom":50,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":660,"containerBackgroundColor":"#fff","containerImgID":55,"containerDimRatio":70,"className":"testimonial"} -->
<div style="background-color:#fff;padding-bottom:50%;padding-top:1%" class="wp-block-atomic-blocks-ab-container testimonial ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-70 has-background-dim" src="$hello_pro_landingpage_testimonials_image_url" alt=""/></div><div class="ab-container-content" style="max-width:660px"><!-- wp:social-proof-slider/main {"showarrows":true,"arrowshovercolor":"#ce461c"} /--></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->
CONTENT;
