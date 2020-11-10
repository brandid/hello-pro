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
<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":4,"containerPaddingBottom":10,"containerPaddingLeft":4,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1200,"containerImgID":766,"containerDimRatio":70,"align":"full","className":"welcome"} -->
<div style="padding-left:4%;padding-right:4%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull welcome gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-70 has-background-dim" src="$hello_pro_landingpage_welcome_image_url" alt=""/></div><div class="gb-container-content" style="max-width:1200px"><!-- wp:paragraph {"align":"left","fontSize":"huge"} -->
<p class="has-text-align-left has-huge-font-size">Life is a<strong> Journey</strong><br>Not a <strong>Destination</strong>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Find your purpose with my Instructional Courses.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":680,"containerBackgroundColor":"#fffcf5","align":"full"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:680px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingBottom":5,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1200,"containerBackgroundColor":"#f5f2eb","align":"full"} -->
<div style="background-color:#f5f2eb;padding-bottom:5%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1200px"><!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Course Description</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:heading {"level":3} -->
<h3>Course Requirements</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":12,"containerPaddingBottom":10,"containerPaddingLeft":12,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1000,"containerBackgroundColor":"#333","containerImgID":947,"containerDimRatio":70,"align":"full","className":"opt-in"} -->
<div style="background-color:#333;padding-left:12%;padding-right:12%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull opt-in gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-70 has-background-dim" src="$hello_pro_landingpage_optin_image_url" alt=""/></div><div class="gb-container-content" style="max-width:1000px"><!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
<p class="has-text-align-center has-primary-color has-text-color has-huge-font-size">Sign Up Today.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><strong>Put your tantalizing opt-in copy here, and watch your email list grow faster than magic beanstalks.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:shortcode -->
[gravityform id="3" title="false" description="false" ajax="true"]
<!-- /wp:shortcode --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1060,"containerBackgroundColor":"#fffcf5","align":"full"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1060px"><!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"text-subhead","textColor":"primary","fontSize":"small"} -->
<p class="text-subhead has-primary-color has-text-color has-small-font-size">Course #1:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Course Number One</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"text-subhead","textColor":"primary","fontSize":"small"} -->
<p class="text-subhead has-primary-color has-text-color has-small-font-size">Course #2:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Course Number Two</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"text-subhead","textColor":"primary","fontSize":"small"} -->
<p class="text-subhead has-primary-color has-text-color has-small-font-size">Course #3:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Course Number Three</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Sign Up Now</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":1,"containerPaddingRight":0,"containerPaddingBottom":30,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":660,"containerImgID":946,"containerDimRatio":70,"align":"full","className":"testimonial"} -->
<div style="padding-bottom:30%;padding-top:1%" class="wp-block-genesis-blocks-gb-container alignfull testimonial gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-70 has-background-dim" src="$hello_pro_landingpage_testimonials_image_url" alt=""/></div><div class="gb-container-content" style="max-width:660px"><!-- wp:shortcode -->
[social-proof-slider]
<!-- /wp:shortcode --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;
