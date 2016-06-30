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

						<div class="row">
							<?php
								$args2 = array(
									'post_type' => 'post',
									'posts_per_page' => 5,
									'meta_key' => 'meta-checkbox',
									'meta_value' => 'yes'
								);
								$featured = new WP_Query($args2);
								
								if ($featured->have_posts()): while($featured->have_posts()): $featured->the_post(); 
							?>
								<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="post-thumbnail">
								<div class="post">
									<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
									<p class="details">By <a href="<?php the_author_posts() ?>"><?php the_author(); ?> </a> / On <?php echo get_the_date('F j, Y'); ?> / In <?php the_category(', '); ?></p>
									<?php if (has_post_thumbnail()) : ?>
									 
									<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a> </figure>
									<p ><?php the_excerpt();?></p>
								</div>
								</div>
								</div>
							<?php
								endif;
								endwhile; else:
								endif;
							?>
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
							?>
								<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
									<div class="post-thumbnail">
										<div class="post">
											<h3><a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h3>
											<p class="details">By <a href="<?php the_author_posts() ?>"><?php the_author(); ?> </a> / On <?php echo get_the_date('F j, Y'); ?> / In <?php the_category(', '); ?></p>
											<?php if (has_post_thumbnail()) : ?>
											 
											<figure> <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a> </figure>
											<p ><?php the_excerpt();?></p>
											</div>
										</div>
									</div>
							<?php
								endif;
								endwhile; else:
								endif;
							?>
						</div>

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
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- NEWSLETTER MODULE -->
	<?php get_sidebar( 'newsletter' ); ?>
<?php get_footer(); ?>


