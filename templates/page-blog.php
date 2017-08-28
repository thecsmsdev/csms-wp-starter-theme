<?php
/**
 * Template Name: Blog
 * Description: Displays blog posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="parallax-window" data-parallax="scroll" data-speed="0.1" data-bleed="10" data-natural-width="1601" data-image-src="<?php bloginfo('template_directory'); ?>/theme/img/banner-bg.jpg">
  <h1><?php the_title(); ?></h1>
</div>

<div class="container">
  <div class="row">
    
    <div class="col-md-8 innerpage-main-container">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'blog'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-md-4 innerpage-sidebar-main-container" id="sidebar" role="navigation">
      <?php dynamic_sidebar('sidebar-widget-area'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>