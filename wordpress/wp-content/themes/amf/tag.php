<?php
/*
 Template Name: Thoughtfuel Tag
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
					<div class="col-xs-12 col-ms-12 col-sm-12 col-md-1 col-lg-1"></div>
					<div class="col-xs-12 col-ms-7 col-sm-8 col-md-7 col-lg-7">

						<div class="row">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<header class="entry-header article-header">
									<h3 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
									<p class="byline entry-meta vcard">
										<?php printf( __( 'Posted', 'bonestheme' ).' %1$s %2$s',
                  							/* the time the post was published */
                  							'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       						/* the author of the post */
                       						'<span class="by">'.__('by', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    					); ?>
									</p>
								</header>
								<section class="entry-content cf">
									<?php the_post_thumbnail( 'bones-thumb-300' ); ?>
									<?php the_excerpt(); ?>
								</section>
							</article>
							<?php endwhile; ?>
									<?php bones_page_navi(); ?>
							<?php else : ?>
									<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>
							<?php endif; ?>
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
  											<div class="col-xs-12 col-ms-12 col-sm-12 col-md-6 col-lg-6">
												<div class="post-thumbnail">
													<div class="post">
														<?php if (has_post_thumbnail()) : ?>
															<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a> </figure>
														<?php endif; ?>
														<div class="detail">
															<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
															<p class="details">By <a href="<?php the_author_posts() ?>"><?php the_author(); ?> </a> / On <?php echo get_the_date('F j, Y'); ?> / In <?php the_category(', '); ?></p>
															<div class="xsmall"><?php my_excerpt(20); ?></div>
															<div class="msmall"><?php my_excerpt(20); ?></div>
															<div class="small"><?php my_excerpt(20); ?></div>
															<div class="medium"><?php my_excerpt(20); ?></div>
															<div class="large"><?php my_excerpt(30); ?></div>
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
					<div class="col-xs-12 col-ms-5 col-sm-4 col-md-3 col-lg-3">
					<div class="col-xs-12 col-ms-12 col-sm-12 col-md-1 col-lg-1"></div>
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


