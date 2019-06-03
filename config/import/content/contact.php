<?php
/**
 * Hello! Pro
 *
 * Contact page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Photo by Bruce Mars on Unsplash.
$hello_pro_contactpage_welcome_image_url = CHILD_URL . '/config/import/images/contact-hero-default.jpg';

return <<<CONTENT
<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"full","containerMaxWidth":1200,"containerImgID":769,"containerDimRatio":70,"className":"welcome"} -->
<div style="padding-bottom:10%;padding-top:10%" class="wp-block-atomic-blocks-ab-container welcome ab-block-container alignfull"><div class="ab-container-inside"><div class="ab-container-image-wrap"><img class="ab-container-image has-background-dim-70 has-background-dim" src="$hello_pro_contactpage_welcome_image_url" alt=""/></div><div class="ab-container-content" style="max-width:1200px"><!-- wp:paragraph {"align":"left","fontSize":"huge"} -->
<p style="text-align:left" class="has-huge-font-size"><strong>CONTACT ME</strong><br>TODAY.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Get in touch with me and I'll reply as soon as I can.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":40,"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-spacer-divider ab-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":5,"containerPaddingRight":10,"containerPaddingBottom":5,"containerPaddingLeft":10,"containerBackgroundColor":"#f4f4f4"} -->
<div style="background-color:#f4f4f4;padding-left:10%;padding-right:10%;padding-bottom:5%;padding-top:5%" class="wp-block-atomic-blocks-ab-container ab-block-container"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:heading {"align":"center"} -->
<h2 style="text-align:center">Contact Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p style="text-align:center">555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p style="text-align:center">1234 Block Blvd.<br>San Francisco, CA 94120</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:paragraph -->
<p>Add a contact form to this page with your preferred Forms plugin. Learn <a rel="noreferrer noopener" aria-label=" (opens in a new tab)" href="https://my.studiopress.com/documentation/wpforms/plugin-usage/create-contact-forms-with-wpforms/" target="_blank">how to create a form using WPForms</a>.</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->
CONTENT;
