<?php
/*
 Template Name: Thoughtfuel
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?><div class="wrap-header">
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- HEADER -->
	<section id="thoughtfuel">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="header-img">
						<!-- <img class="header-logo" src="<?php //echo get_stylesheet_directory_uri(); ?>/svg/@AMF-logo-black.svg" alt="Active Mind Fuel Logo"> -->
					</div>								
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<section id="articles-module">
		<div class="container-fluid">
			<div class="row">
				<!-- ARTICLES MODULE -->
				<div class="article-container">
					<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
						<?php
							$args = array(
								'post_type' => 'post',
								//'cat' => '4',
								'post_status' => 'publish',
								//'posts_per_page' => 14,
								'order' => 'DESC',
								'paged' => get_query_var('page')
							);
	
							$loop = new WP_Query( $args );
							if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
						?>
							<div>
								<?php //if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="post">
									<?php 
										if ( has_post_thumbnail() ) {
									    	the_post_thumbnail('large');
										} 
										the_content(); 
									?>
									<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h1 class="page-title"><?php the_title(); ?></h1></a>
									<p class="byline vcard">
										<?php printf( __( 'Posted <time class="updated" datetime="%1$s" itemprop="datePublished">%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option(	'date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>
									<?php
										the_content();
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
			    				   	<?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
									<?php comments_template(); ?>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
						<!-- pagination -->
						<?php //wp_pagenavi( array( 'query' => $loop ) ); ?>
						<?php //wp_reset_postdata(); ?>
						<?php //$wp_query = null; $wp_query = $temp; ?>
						<?php endif; ?>
					</div>
				</div>
				<!-- SIDEBAR MODULE -->
				<div class="sidebar-container">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>


