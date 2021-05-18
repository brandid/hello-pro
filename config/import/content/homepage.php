<?php
/**
 * Hello! Pro - Demo HOME page One-Click Theme Setup content.
 *
 * Homepage content.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
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
<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1200,"containerImgID":625,"containerDimRatio":90,"align":"full","className":"welcome"} -->
<div style="padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull welcome gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-90 has-background-dim" src="$hello_pro_homepage_welcome_image_url" alt=""/></div><div class="gb-container-content" style="max-width:1200px"><!-- wp:paragraph {"align":"left","fontSize":"huge"} -->
<p class="has-text-align-left has-huge-font-size"><strong>WELCOME</strong><br>TO MY VIRTUAL<br>OFFICE.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Memorable, distinct and unique -- that's what YOU are.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":660,"containerBackgroundColor":"#fffcf5","align":"full"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:660px"><!-- wp:paragraph -->
<p>Creating an eye-catching personal branded site can help you make your best online first impression. And that… can make all the difference in the world (wide web).</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>With over <strong>250 million web and blog sites</strong> on the Internet, making a lasting impression on the web is super important.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><strong>Be distinct and start building your brand online!</strong></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="http://my.studiopress.com/themes/hello" target="_blank" rel="noreferrer noopener">Purchase Theme</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":12,"containerPaddingBottom":10,"containerPaddingLeft":12,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1000,"containerBackgroundColor":"#333","containerImgID":622,"containerDimRatio":70,"align":"full","className":"opt-in"} -->
<div style="background-color:#333;padding-left:12%;padding-right:12%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull opt-in gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-70 has-background-dim" src="$hello_pro_homepage_optin_image_url" alt=""/></div><div class="gb-container-content" style="max-width:1000px"><!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"huge"} -->
<p class="has-text-align-center has-primary-color has-text-color has-huge-font-size">Sign Up Today.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><strong>Put your tantalizing opt-in copy here, and watch your email list grow faster than magic beanstalks.</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","textColor":"white"} -->
<p class="has-text-align-center has-white-color has-text-color"><strong>Replace this block with a Contact Form!</strong></p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":2,"containerPaddingBottom":10,"containerPaddingLeft":2,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1060,"containerBackgroundColor":"#fffcf5","align":"full","className":"features"} -->
<div style="background-color:#fffcf5;padding-left:2%;padding-right:2%;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull features gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1060px"><!-- wp:genesis-blocks/gb-columns {"columns":3,"layout":"gb-3-col-equal"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-3 gb-3-col-equal"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"text-subhead","textColor":"primary","fontSize":"small"} -->
<p class="text-subhead has-primary-color has-text-color has-small-font-size">Feature #1:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Colors and Textures</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Unique color palettes and textures are all the rage in the design world. Down the road if you want to freshen your look without breaking the bank you can easily swap the background for something new.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"text-subhead","textColor":"primary","fontSize":"small"} -->
<p class="text-subhead has-primary-color has-text-color has-small-font-size">Feature #2:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Rotating Content</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Use the "Be Inspired" space below to share a variety of things from noteworthy client testimonials and endorsements, to upcoming venues where you will appear as a speaker to a breaking news bar where you can feature “news” of the day.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph {"className":"text-subhead","textColor":"primary","fontSize":"small"} -->
<p class="text-subhead has-primary-color has-text-color has-small-font-size">Feature #3:</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3} -->
<h3><strong>Homepage Portfolio</strong></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Remember, a picture is worth a thousand words – so show off your work! Use the spaces in the grid below to showcase your gallery, brands or case studies.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:cover {"url":"$hello_pro_homepage_statement_image_url","id":45,"dimRatio":30,"overlayColor":"black","align":"full","className":"statement"} -->
<div class="wp-block-cover alignfull has-background-dim-30 has-black-background-color has-background-dim statement" style="background-image:url($hello_pro_homepage_statement_image_url)"><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"left","placeholder":"Write title…","fontSize":"huge"} -->
<p class="has-text-align-left has-huge-font-size">MAKE A<br><strong>BOLD</strong><br>STATEMENT.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1000,"containerBackgroundColor":"#fffcf5","align":"full","className":"hello-pro-portfolio"} -->
<div style="background-color:#fffcf5;padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull hello-pro-portfolio gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1000px"><!-- wp:paragraph {"align":"center","className":"title","fontSize":"huge"} -->
<p class="has-text-align-center title has-huge-font-size">Show Off Your Work.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Use the spaces in the grid below to show off your work – think gallery, portfolio, or brands.</p>
<!-- /wp:paragraph -->

<!-- wp:columns {"className":"has-3-columns"} -->
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

<!-- wp:columns {"className":"has-3-columns"} -->
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
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":1,"containerPaddingRight":0,"containerPaddingBottom":30,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":660,"containerImgID":624,"containerDimRatio":70,"align":"full","className":"testimonial"} -->
<div style="padding-bottom:30%;padding-top:1%" class="wp-block-genesis-blocks-gb-container alignfull testimonial gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim-70 has-background-dim" src="$hello_pro_homepage_testimonials_image_url" alt=""/></div><div class="gb-container-content" style="max-width:660px"><!-- wp:social-proof-slider/main {"showdots":true,"padding":0,"dotscolor":"#ce461c"} /--></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;
