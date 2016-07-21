<?php
/*
 Template Name: Thoughtfuel Category
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
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="post-thumbnail">
									<div class="search"><i class="fa fa-search fa-1x" aria-hidden="true"></i></div>
									<div class="cat-title">
										<?php 
											the_archive_title( '<h2 class="page-title">', '</h2>' );
											the_archive_description( '<span class="taxonomy-description">', '</span>' );
										?>
									</div>
								</div>
							</div>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<div class="post-item">
  									<div class="post-container">
  										<div class="col-xs-12 col-ms-12 col-sm-12 col-md-6 col-lg-6">
											<div class="post-thumbnail">
												<div class="post">
													<?php if (has_post_thumbnail()) : ?>
														<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a> </figure>
													<?php endif; ?>
													<div class="detail">
														<div class="tagcloud"><?php the_category(', '); ?></div>
														<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
														<p class="post-detail">
															<div class="date"><span class="post-date"><?php echo get_the_date('F j, Y'); ?></span></div>
															<div class="social">
																<ul class="social-sharing">
																	<li><a target="_blank" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&t=<?php the_title(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
																	<li><a target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
																	<li><a target="_blank" href="http://twitter.com/share?text=<?php echo urlencode(the_title()); ?>&url=<?php echo urlencode(the_permalink()); ?>" title="Share on Twitter" rel="nofollow" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
																	<li><a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
																</ul>
															</div>
														</p>
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


