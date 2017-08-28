<?php
/**
 * Template Name: About
 * Description: Displays blog posts with pagination and featured image.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>

<div class="parallax-window" data-parallax="scroll" data-speed="0.3" data-bleed="10" data-natural-width="1601" data-image-src="<?php bloginfo('template_directory'); ?>/theme/img/banner-bg.jpg">
	<h1><?php the_title(); ?></h1>
</div>

<div class="container">
  <div class="row">
    
    <div class="col-md-12 innerpage-main-container">
      <div id="content" role="main">
        <?php get_template_part('loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-md-6 innerpage-main-container innerpage-about-profile">
    
    	<img class="alignleft" src="http://via.placeholder.com/470x300" >
        
        <span>Ei eam sumo wisi pertinacia</span>
        
        Lorem ipsum dolor sit amet, eu quo case nostro, no has alii recteque. Ei eam sumo wisi pertinacia, eu pri labores antiopam scripserit, usu esse facilis phaedrum ad. Ex mei accusam contentiones, ut adhuc assum nonumy vel. Aperiam vocibus vituperata sea eu, vim in reque detracto persecuti. No appareat scripserit scriptorem duo.

		Ea discere urbanitas definitiones est. Natum molestie philosophia ea est. No usu elitr nobis. Est luptatum consetetur ei, pro te tota iriure.

		His ut veniam impedit adipiscing. Nulla vulputate rationibus vis ad, accusam dissentias vim an. Nostrud dissentiunt vel et. Eros homero est id.
        
		<div class="about-social-icons">
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-facebook-square fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-twitter-square fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-instagram fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-linkedin-square fa-2x"></i>
					</a>
				</li>
			</ul>
		</div>        
    
    </div>
    
    <div class="col-md-6 innerpage-main-container innerpage-about-profile">
    
    	<img class="alignleft" src="http://via.placeholder.com/470x300">
        
        <span>Nostrud dissentiunt vel et</span>
        
		His ut veniam impedit adipiscing. Nulla vulputate rationibus vis ad, accusam dissentias vim an. Nostrud dissentiunt vel et. Eros homero est id.

		Eos ea sumo postulant, ad eam tation percipitur dissentiet. Mel ei vivendum laboramus rationibus, no iisque reformidans usu. Meis ludus sapientem eos ea, per agam reprimique at. At quo sumo munere, ad denique evertitur est. Sea putent dictas cetero cu. Eam at doming adolescens.

		Cu quo tota quas omittantur, qui ad minim tation repudiandae. Vim te erat soluta repudiare, ei est summo vivendum euripidis, ne altera voluptatibus pro. Ei est odio duis detraxit, vim id odio elit facete. In has homero essent. Pro ex suas zril, tantas singulis theophrastus ea quo.        
         
		<div class="about-social-icons">
			<ul>
				<li>
					<a href="#">
						<i class="fa fa-facebook-square fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-twitter-square fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-instagram fa-2x"></i>
					</a>
				</li>
				<li>
					<a href="#">
						<i class="fa fa-linkedin-square fa-2x"></i>
					</a>
				</li>
			</ul>
		</div>
                    
    </div>    
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_footer(); ?>