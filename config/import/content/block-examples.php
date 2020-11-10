<?php
/**
 * Hello! Pro - Demo BLOCKS page One-Click Theme Setup content.
 *
 * Block Examples content.
 *
 * Visit `/wp-admin/admin.php?page=genesis-getting-started` to trigger import.
 *
 * @package Hello Pro
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://www.studiopress.com/
 */

return <<<CONTENT
<!-- wp:heading {"level":1} -->
<h1>Block Content Examples</h1>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Below are examples of column classes that are available in the block editor.</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left"><strong>Columns</strong> Block - Two-Column Layout</h2>
<!-- /wp:heading -->

<!-- wp:columns {"className":"has-3-columns"} -->
<div class="wp-block-columns has-3-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>
This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>
This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.

</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Wide <strong>Columns</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"wide","className":"has-2-columns"} -->
<div class="wp-block-columns alignwide has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Full-Width <strong>Columns</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:columns {"align":"full","className":"has-2-columns"} -->
<div class="wp-block-columns alignfull has-2-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind. </p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Wide <strong>Genesis</strong> <strong>Advanced Columns</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","align":"wide"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal alignwide"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Full-Width <strong>Genesis</strong> <strong>Advanced Columns</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-columns {"columns":2,"layout":"gb-2-col-equal","align":"full","paddingSync":true,"padding":30,"paddingTop":30,"paddingRight":10,"paddingBottom":30,"textColor":"white","backgroundColor":"secondary"} -->
<div class="wp-block-genesis-blocks-gb-columns gb-layout-columns-2 gb-2-col-equal has-secondary-background-color has-white-color alignfull" style="padding:30px"><div class="gb-layout-column-wrap gb-block-layout-column-gap-2 gb-is-responsive-column"><!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column -->

<!-- wp:genesis-blocks/gb-column -->
<div class="wp-block-genesis-blocks-gb-column gb-block-layout-column"><div class="gb-block-layout-column-inner"><!-- wp:paragraph -->
<p>This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:genesis-blocks/gb-column --></div></div>
<!-- /wp:genesis-blocks/gb-columns -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left"><strong>Buttons</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link" href="#">Button</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link" href="#">Outline Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:buttons {"align":"center"} -->
<div class="wp-block-buttons aligncenter"><!-- wp:button {"borderRadius":0} -->
<div class="wp-block-button"><a class="wp-block-button__link no-border-radius" href="#">Square Button</a></div>
<!-- /wp:button -->

<!-- wp:button {"borderRadius":0,"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link no-border-radius" href="#">Square Outline Button</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left"><strong>Pullquotes</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:pullquote {"align":"wide"} -->
<figure class="wp-block-pullquote alignwide"><blockquote><p>Good design is as little as possible. Less, but better, because it  concentrates on the essential aspects. Back to purity, back to  simplicity. </p><cite> <br>Dieter Rams</cite></blockquote></figure>
<!-- /wp:pullquote -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left"><strong>Genesis Container</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":4,"containerPaddingRight":10,"containerPaddingBottom":4,"containerPaddingLeft":10,"containerMarginTop":0,"containerMarginBottom":0,"containerBackgroundColor":"#53796e"} -->
<div style="background-color:#53796e;padding-left:10%;padding-right:10%;padding-bottom:4%;padding-top:4%" class="wp-block-genesis-blocks-gb-container gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Wide <strong>Genesis Container</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":4,"containerPaddingRight":10,"containerPaddingBottom":4,"containerPaddingLeft":10,"containerMarginTop":0,"containerMarginBottom":0,"containerBackgroundColor":"#ce461c","align":"wide"} -->
<div style="background-color:#ce461c;padding-left:10%;padding-right:10%;padding-bottom:4%;padding-top:4%" class="wp-block-genesis-blocks-gb-container alignwide gb-block-container"><div class="gb-container-inside"><div class="gb-container-content"><!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->

<!-- wp:separator {"className":"is-style-wide"} -->
<hr class="wp-block-separator is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:heading {"align":"left"} -->
<h2 class="has-text-align-left">Full-Width <strong>Genesis Container</strong> Block</h2>
<!-- /wp:heading -->

<!-- wp:genesis-blocks/gb-container {"containerPaddingTop":4,"containerPaddingRight":10,"containerPaddingBottom":4,"containerPaddingLeft":10,"containerMarginTop":0,"containerMarginBottom":0,"containerMaxWidth":1200,"containerBackgroundColor":"#333","align":"full"} -->
<div style="background-color:#333;padding-left:10%;padding-right:10%;padding-bottom:4%;padding-top:4%" class="wp-block-genesis-blocks-gb-container alignfull gb-block-container"><div class="gb-container-inside"><div class="gb-container-content" style="max-width:1200px"><!-- wp:paragraph {"textColor":"white"} -->
<p class="has-white-color has-text-color">This is an example of a WordPress post, you could edit this to put information about yourself or your site so readers know where you are coming from. You can create as many posts as you like in order to share with your readers what exactly is on your mind.</p>
<!-- /wp:paragraph --></div></div></div>
<!-- /wp:genesis-blocks/gb-container -->
CONTENT;
