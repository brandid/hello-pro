<?php
/**
 * Hello! Pro - Demo HOME page One-Click Theme Setup content
 *
 * Homepage content optionally installed after theme activation.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Define the default image URLs.
$hello_pro_homepage_welcome_image_url      = CHILD_URL . '/config/import/images/home-welcome-default.jpg';
$hello_pro_homepage_optin_image_url        = CHILD_URL . '/config/import/images/home-optin-default.jpg';
$hello_pro_homepage_statement_image_url    = CHILD_URL . '/config/import/images/home-statement-default.jpg';
$hello_pro_homepage_testimonials_image_url = CHILD_URL . '/config/import/images/home-testimonials-default.jpg';

$hello_pro_homepage_sample_logo_a_image_url              = CHILD_URL . '/config/import/images/sample-logo-A.png';
$hello_pro_homepage_sample_logo_bluebird_image_url       = CHILD_URL . '/config/import/images/sample-logo-bluebird.png';
$hello_pro_homepage_sample_logo_bluefish_image_url       = CHILD_URL . '/config/import/images/sample-logo-bluefish.png';
$hello_pro_homepage_sample_logo_inkubator_image_url      = CHILD_URL . '/config/import/images/sample-logo-inkubator.png';
$hello_pro_homepage_sample_logo_lotsatravel_image_url    = CHILD_URL . '/config/import/images/sample-logo-lotsatravel.png';
$hello_pro_homepage_sample_logo_mitalsolutions_image_url = CHILD_URL . '/config/import/images/sample-logo-mitalsolutions.png';

// Begin creating the content output.
return <<<CONTENT
<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1200,"containerBackgroundColor":"#fff","containerImgID":14,"containerDimRatio":90,"className":"welcome"} -->
<div style="background-color:#fff;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container welcome ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-90 has-background-dim" src="$hello_pro_homepage_welcome_image_url" alt=""/></div><div class="ab-container-content" style="max-width:1200px"><!-- wp:paragraph {"align":"left","fontSize":"huge"} -->
<p style="text-align:left" class="has-huge-font-size"><strong>WELCOME</strong><br>TO MY VIRTUAL<br>OFFICE.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p style="text-align:left">Memorable, distinct and unique -- that's what YOU are.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":660,"containerBackgroundColor":"#fffcf5"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:660px"><!-- wp:paragraph -->
<p>Creating an eye-catching personal branded site can help you make your best online first impression. And that… can make all the difference in the world (wide web).</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>With over <strong>250 million web and blog sites</strong> on the Internet, making a lasting impression on the web is super important.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Be distinct and start building your brand online!</strong></p>
<!-- /wp:paragraph -->

<!-- wp:button {"className":"is-style-squared"} -->
<div class="wp-block-button is-style-squared"><a class="wp-block-button__link" href="http://my.studiopress.com/themes/hello">Purchase Theme</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":12,"containerPaddingBottom":10,"containerPaddingLeft":12,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1000,"containerBackgroundColor":"#313131","containerImgID":27,"containerDimRatio":70,"className":"opt-in"} -->
<div style="background-color:#313131;padding-left:12%;padding-right:12%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container opt-in ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-70 has-background-dim" src="$hello_pro_homepage_optin_image_url" alt=""/></div><div class="ab-container-content" style="max-width:1000px"><!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
<p style="text-align:center" class="has-text-color has-huge-font-size has-primary-color">Sign Up Today.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p style="text-align:center" class="has-text-color has-white-color"><strong>Put your tantalizing opt-in copy here, and watch your email list grow faster than magic beanstalks.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p style="text-align:center" class="has-text-color has-white-color">To display an Opt-in form, simply install your favorite Forms plugin. Then, replace this text with your Form Shortcode or Block.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1060,"containerBackgroundColor":"#fffcf5","className":"features"} -->
<div style="background-color:#fffcf5;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container features ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1060px"><!-- wp:atomic-blocks/ab-columns {"columns":3,"layout":"ab-3-col-equal"} -->
<div class="wp-block-atomic-blocks-ab-columns ab-layout-columns-3 ab-3-col-equal"><div class="ab-layout-column-wrap ab-block-layout-column-gap-2 ab-is-responsive-column"><!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","className":"text-subhead"} -->
<p class="has-text-color has-small-font-size has-primary-color text-subhead">Feature #1:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Colors and Textures</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Unique color palettes and textures are all the rage in the design world. Down the road if you want to freshen your look without breaking the bank you can easily swap the background for something new.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","className":"text-subhead"} -->
<p class="has-text-color has-small-font-size has-primary-color text-subhead">Feature #2:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Rotating Content</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use the "Be Inspired" space below to share a variety of things from noteworthy client testimonials and endorsements, to upcoming venues where you will appear as a speaker to a breaking news bar where you can feature “news” of the day.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column -->

<!-- wp:atomic-blocks/ab-column -->
<div class="wp-block-atomic-blocks-ab-column ab-block-layout-column"><div class="ab-block-layout-column-inner"><!-- wp:paragraph {"textColor":"primary","fontSize":"small","className":"text-subhead"} -->
<p class="has-text-color has-small-font-size has-primary-color text-subhead">Feature #3:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Homepage Portfolio</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Remember, a picture is worth a thousand words – so show off your work! Use the spaces in the grid below to showcase your gallery, brands or case studies.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:atomic-blocks/ab-column --></div></div>
<!-- /wp:atomic-blocks/ab-columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:cover {"url":"$hello_pro_homepage_statement_image_url","id":45,"dimRatio":30,"overlayColor":"black","align":"full","className":"statement"} -->
<div class="wp-block-cover alignfull has-background-dim-30 has-black-background-color has-background-dim statement" style="background-image:url(http://localhost/hellopro3-dev/wp-content/themes/hello-pro-3/config/import/images/home-statement-default.jpg)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"huge"} -->
<p style="text-align:left" class="has-huge-font-size">MAKE A<br><strong>BOLD</strong><br>STATEMENT.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1000,"containerBackgroundColor":"#fffcf5","className":"hello-pro-portfolio"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container hello-pro-portfolio ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1000px"><!-- wp:paragraph {"align":"center","fontSize":"huge","className":"title"} -->
<p style="text-align:center" class="has-huge-font-size title">Show Off Your Work.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p style="text-align:center">Use the spaces in the grid below to show off your work – think gallery, portfolio, or brands.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"columns":3} -->
<div class="wp-block-columns has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":162,"linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="#"><img src="$hello_pro_homepage_sample_logo_mitalsolutions_image_url" alt="" class="wp-image-162"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":157,"linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="#"><img src="$hello_pro_homepage_sample_logo_a_image_url" alt="" class="wp-image-157"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":158,"linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="#"><img src="$hello_pro_homepage_sample_logo_bluebird_image_url" alt="" class="wp-image-158"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"columns":3} -->
<div class="wp-block-columns has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":159,"linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="#"><img src="$hello_pro_homepage_sample_logo_bluefish_image_url" alt="" class="wp-image-159"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":161,"linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="#"><img src="$hello_pro_homepage_sample_logo_lotsatravel_image_url" alt="" class="wp-image-161"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":160,"linkDestination":"custom"} -->
<figure class="wp-block-image"><a href="#"><img src="$hello_pro_homepage_sample_logo_inkubator_image_url" alt="" class="wp-image-160"/></a></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":1,"containerPaddingRight":0,"containerPaddingBottom":50,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":660,"containerBackgroundColor":"#fff","containerImgID":55,"containerDimRatio":70,"className":"testimonial"} -->
<div style="background-color:#fff;padding-bottom:50%;padding-top:1%" class="wp-block-atomic-blocks-ab-container testimonial ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-70 has-background-dim" src="$hello_pro_homepage_testimonials_image_url" alt=""/></div><div class="ab-container-content" style="max-width:660px"><!-- wp:shortcode -->
[social-proof-slider]
<!-- /wp:shortcode --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->
CONTENT;
