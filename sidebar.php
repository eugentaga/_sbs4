<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WpStarter
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div class="col-12 col-md-4">
      <aside id="secondary" class="widget-area">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
      </aside><!-- #secondary -->
    </div><!-- .col-12 .col-md-4-->
  </div><!-- .row -->
</div><!-- .container -->
