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
					<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
					<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<?php the_field( 'masonry' ); ?>
							</div>
						</div>

						<div class="row">
							<?php
								$args = array(
									'post_type' => 'post',
									'post_status' => 'publish',
									'order' => 'DESC',
									'paged' => get_query_var('page')
								);
								$loop = new WP_Query( $args );
	
								if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title; 
								if( $loop->current_post == 0 && !is_paged() ) :
							?>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="post-thumbnail-featured">
										<div class="post">
											<?php if (has_post_thumbnail()) : ?>
												<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a> </figure>
											<?php endif; ?>
											<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
											<p class="details">By <a href="<?php the_author_posts() ?>"><?php the_author(); ?> </a> / On <?php echo get_the_date('F j, Y'); ?> / In <?php the_category(', '); ?></p>
											<p ><?php the_excerpt();?></p>
										</div>
									</div>
								</div>
							<?php
								endif;
								endwhile;
								endif;
							?>
						</div>
						<div class="row">
							<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> -->
								<?php
									$args = array(
										'post_type' => 'post',
										'post_status' => 'publish',
										'order' => 'DESC',
										'paged' => get_query_var('page')
									);
									$loop = new WP_Query( $args );
		
									if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title; 
									if( $loop->current_post != 0 && !is_paged() ) :
								?>	
  									<div class="post-item">
  										<div class="post-container">
  											<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
												<div class="post-thumbnail">
													<div class="post">
														<?php if (has_post_thumbnail()) : ?>
															<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a> </figure>
														<?php endif; ?>
														<div class="detail">
															<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
															<p class="details">By <a href="<?php the_author_posts() ?>"><?php the_author(); ?> </a> / On <?php echo get_the_date('F j, Y'); ?> / In <?php the_category(', '); ?></p>
															<p class="small"><?php my_excerpt(20); ?></p>
															<p class="medium"><?php my_excerpt(20); ?></p>
															<p class="large"><?php my_excerpt(20); ?></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<?php
									endif;
									endwhile; else:
									endif;
								?>
							<!-- </div> -->
						</div>
						
					</div>
				</div>
				<!-- SIDEBAR MODULE -->
				<div class="sidebar-container">
					<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
					<div class="col-xs-12 col-sm-12 col-md-1 col-lg-1"></div>
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3"></div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- NEWSLETTER MODULE -->
	<?php get_sidebar( 'newsletter' ); ?>
<?php get_footer(); ?>


