<?php
/*
The Page Loop
=============
*/
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="innerpage-content-container">
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
            <header>
                <h1><?php the_title()?></h1>
            </header>

                <ul class="blog-page-main-container">
				<?php
					$my_query = new WP_Query( array( 'posts_per_page' => 4, 'category' => 'blog', 'order' => 'DESC', 'paged' => get_query_var('paged') ) );      
					while ( $my_query->have_posts() ) : $my_query->the_post();
				?>
					<li>  
            
						<a href="<?php echo get_permalink(); ?>">
							<?php
								$blog_thumb = get_post_thumbnail_id();
								$blog_thumb_url = wp_get_attachment_url( $blog_thumb,'full'); //get img URL
								$blog_image = aq_resize( $blog_thumb_url, 100, 100, true ); //resize & crop img
							?>
							<img src="<?php echo $blog_image ?>" height="100" width="100" />
						</a>                                     
						<a class="title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
                        <p><?php echo blog_post_excerpt(); ?>... <a class="read-more" href="<?php echo get_permalink(); ?>">Read More</a></p>
					</li>
				<?php
				endwhile;
				wp_pagenavi( array( 'query' => $my_query ) );
				wp_reset_postdata();	// avoid errors further down the page				
				?>       
                </ul>
            
        </article>
    </div>
<?php endwhile; else: ?>
<?php wp_redirect(get_bloginfo('siteurl').'/404', 404); ?>
<?php exit; ?>
<?php endif; ?>
