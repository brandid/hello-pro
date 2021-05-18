<?php
/**
 * Hello! Pro - Demo CONTACT page One-Click Theme Setup content.
 *
 * Contact page content.
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
<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":10,"containerPaddingRight":0,"containerPaddingBottom":10,"containerPaddingLeft":0,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1200,"containerImgID":764,"align":"full","className":"welcome"} -->
<div style="padding-bottom:10%;padding-top:10%" class="wp-block-genesis-blocks-gb-container alignfull welcome gb-block-container"><div class="gb-container-inside"><div class="gb-container-image-wrap"><img class="gb-container-image has-background-dim" src="$hello_pro_contactpage_welcome_image_url" alt=""/></div><div class="gb-container-content" style="max-width:1200px"><!-- wp:paragraph {"align":"left","fontSize":"huge"} -->
<p class="has-text-align-left has-huge-font-size"><strong>CONTACT ME</strong><br>TODAY.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Get in touch with me and I'll reply as soon as I can.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":40,"spacerDivider":true} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-spacer-divider gb-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":5,"containerPaddingRight":10,"containerPaddingBottom":5,"containerPaddingLeft":10,"containerMaxWidth":1600,"containerBackgroundColor":"#f4f4f4"} -->
<div style="background-color:#f4f4f4;padding-left:10%;padding-right:10%;padding-bottom:5%;padding-top:5%" class="wp-block-genesis-blocks-gb-container gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1600px"><!-- wp:heading {"textAlign":"center"} -->
<h2 class="has-text-align-center">Contact Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">1234 Block Blvd.<br>San Francisco, CA 94120</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Replace this block with a Contact Form!</p>
<!-- /wp:paragraph -->

<!-- wp:genesis-blocks/gb-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-genesis-blocks-gb-spacer gb-block-spacer gb-divider-solid gb-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:genesis-blocks/gb-spacer -->
CONTENT;
