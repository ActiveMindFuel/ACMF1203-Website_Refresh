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
											<p class="post-date">
												<?php echo get_the_date('F j, Y'); ?>
												<ul class="social-sharing">
													<li><a href="http://andres-imac.local:5757/2nd-post-of-the-day/?share=facebook&nb=1" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
													<li><a href="http://andres-imac.local:5757/2nd-post-of-the-day/?share=linkedin&nb=1" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
													<!-- <li><a data-shared="sharing-twitter-175" href="http://andres-imac.local:5757/2nd-post-of-the-day/?share=twitter&nb=1" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> -->
													<li><a href="http://andres-imac.local:5757/2nd-post-of-the-day/?share=google-plus-1&nb=1" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
												</ul>
											</p>

											<button type="button" class="modalButton" data-toggle="modal" data-src="https://player.vimeo.com/video/87701971" data-width="500" data-height="281" data-target="#myModal" data-video-fullscreen="">Vimeo</button>
            
            								<button type="button" class="modalButton" data-toggle="modal" data-src="https://www.youtube.com/embed/mWRsgZuwf_8" data-width="640" data-height="360" data-target="#myModal" data-video-fullscreen="">Youtube</button>
            
											<button type="button" class="modalButton" data-toggle="modal" data-src="https://twitter.com/intent/tweet?text=2nd%20Post%20of%20the%20day%21&url=http%3A%2F%2Flocalhost%3A8888%2F2nd-post-of-the-day%2F" data-width="600" data-height="450" data-target="#myModal">Google maps</button>

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
