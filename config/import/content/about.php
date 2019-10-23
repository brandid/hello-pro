<?php
/**
 * Hello! Pro
 *
 * About page content optionally installed after theme activation.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

// Photo by Court Prather on Unsplash.
$hello_pro_about_headshot_image_url = CHILD_URL . '/config/import/images/about-headshot-default.jpg';

$hello_pro_contact_page_url = esc_url( home_url() ) . '/contact-me/';

return <<<CONTENT
<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":70} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:70px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:image {"id":719,"align":"center","width":400,"height":400,"className":"img-circle"} -->
<div class="wp-block-image img-circle"><figure class="aligncenter is-resized"><img src="$hello_pro_about_headshot_image_url" alt="" class="wp-image-719" width="400" height="400"/></figure></div>
<!-- /wp:image -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->

<!-- wp:heading {"level":1} -->
<h1>About Me</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Hello! I'm StudioPress, and I build themes with an emphasis on typography, white space, and mobile-optimized design to make your website look absolutely breathtaking.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Hello! I'm StudioPress, and I build themes with an emphasis on typography, white space, and mobile-optimized design to make your website look absolutely breathtaking. Hello! I'm StudioPress, and I build themes with an emphasis on typography, white space, and mobile-optimized design to make your website look absolutely breathtaking.</p>
<!-- /wp:paragraph -->

<!-- wp:atomic-blocks/ab-container {"containerPaddingTop":5,"containerPaddingRight":10,"containerPaddingBottom":5,"containerPaddingLeft":10,"containerMarginTop":0,"containerMarginBottom":0,"containerWidth":"center","containerBackgroundColor":"#f4f4f4"} -->
<div style="background-color:#f4f4f4;padding-left:10%;padding-right:10%;padding-bottom:5%;padding-top:5%" class="wp-block-atomic-blocks-ab-container ab-block-container aligncenter"><div class="ab-container-inside"><div class="ab-container-content" style="max-width:1600px"><!-- wp:heading {"align":"center"} -->
<h2 style="text-align:center" id="mce_9">Contact Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p style="text-align:center">555.555.5555</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p style="text-align:center">1234 Block Blvd.<br>San Francisco, CA 94120</p>
<!-- /wp:paragraph -->

<!-- wp:button {"align":"center"} -->
<div class="wp-block-button aligncenter"><a class="wp-block-button__link" href="$hello_pro_contact_page_url">Contact Me</a></div>
<!-- /wp:button --></div></div></div>
<!-- /wp:atomic-blocks/ab-container -->

<!-- wp:atomic-blocks/ab-spacer {"spacerHeight":40} -->
<div style="color:#ddd" class="wp-block-atomic-blocks-ab-spacer ab-block-spacer ab-divider-solid ab-divider-size-1"><hr style="height:40px"/></div>
<!-- /wp:atomic-blocks/ab-spacer -->
CONTENT;
