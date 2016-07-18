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

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
									<div class="post-thumbnail-featured">
										<div class="post">
											<?php if (has_post_thumbnail()) : ?>
												<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a> </figure>
											<?php endif; ?>
											<h3><?php the_title(); ?></h3>
											<!-- <p class="details">By <a href="<?php //the_author_posts() ?>"><?php //the_author(); ?> </a> / On --><!-- / In <?php //the_category(', '); ?></p> -->
											<p>
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

											<p class="post-padding"><?php the_content(); ?></p>
										</div>
									</div>
								</div>

						

							<?php
								/*
								 * Ah, post formats. Nature's greatest mystery (aside from the sloth).
								 *
								 * So this function will bring in the needed template file depending on what the post
								 * format is. The different post formats are located in the post-formats folder.
								 *
								 *
								 * REMEMBER TO ALWAYS HAVE A DEFAULT ONE NAMED "format.php" FOR POSTS THAT AREN'T
								 * A SPECIFIC POST FORMAT.
								 *
								 * If you want to remove post formats, just delete the post-formats folder and
								 * replace the function below with the contents of the "format.php" file.
								*/
								
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

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
