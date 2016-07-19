<?php
/*
 Template Name: Home Page
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
	<section id="masthead" style="background-image:url('<?php the_field( 'mast_header_image' ); ?>');"">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="header-img">
						<img class="header-logo" src="<?php echo get_stylesheet_directory_uri(); ?>/svg/@AMF-logo-black.svg" alt="Active Mind Fuel Logo">
					</div>								
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- ABOUT MODULE -->
	<section id="about-module" class="quote alt">
		<div id="about"></div>
		<div class="container-fluid">
			<div class="three-col">
				<div class="row">
				<?php if( have_rows( 'three_columns' ) ): while( have_rows( 'three_columns' ) ): the_row(); ?>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h2><?php the_sub_field( 'column_header' ); ?></h2>
						<p><?php the_sub_field( 'column_content' ); ?></p>
					</div>
				<?php endwhile; endif; ?>
				</div>
			</div>
			<div class="single-col">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
						<p><?php the_field( 'single_column' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SLIDER MODULE -->
	<section id="slider-module" class="quote">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="slickslider">
					<?php if( have_rows( 'carousel_slides' ) ): while( have_rows( 'carousel_slides' ) ): the_row(); ?>
						<div class="slide" style="background-image:url('<?php the_sub_field( 'slide_image' ); ?>');">
							<div class="container-fluid">
								<div class="row">
									<div class="slide-detail">
										<div class="col-xs-12">
											<h2><?php the_sub_field( 'slide_header' ); ?></h2>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2"><p><?php the_sub_field( 'slide_content' ); ?></p></div>
									</div>
								</div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SAMPLES MODULE -->

	<section id="samples-thumbnails-module">
		<div id="samples"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<?php
     					wp_nav_menu( array(
     					 	'menu'              => 'secondary',
     					 	'theme_location'    => 'secondary',
     					 	'container_class'   => 'collapse navbar-collapse',
     					 	'menu_class'        => 'nav nav-pills pull-right')
     					);
     				?>
				</div>
			</div>
			<div class="tab-content tabs-module-two-flex-container">
				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content active" id="interactive">
					<?php
						$args1 = array(
							'post_type' => 'samples',
							'tax_query' => array(
  								array(
  								  'taxonomy' => 'core_capabilities',
  								  'field' => 'slug',
  								  'terms' => 'interactive'
  								)
  							),
							//'cat' => '4',
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'order' => 'DESC',
							'paged' => get_query_var('page')
						);

						$loop = new WP_Query( $args1 );
						if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
					?>
						<div class="thumbnail-container">
							<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
								<div class="col-xs-12 col-ms-6 col-sm-4 col-md-3 col-lg-3">
									<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    									<div class="caption">
    										<div class="thumb-title">
    											<!-- <p><?php //the_tags(); ?></p> -->
    											<h3 class="xsmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 28;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="xsmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 40;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="msmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="msmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 20;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="small">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 16;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="small">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 23;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="medium">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="medium">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 22;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="large">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 20;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="large">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 28;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    										</div>
    										<div class="cat-icon pull-right"><span>interacitve</span><!-- <i class="fa fa-info" aria-hidden="true"></i> --></div>
    									</div>
    								</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content" id="motion">
					<?php
						$args2 = array(
							'post_type' => 'samples',
							'tax_query' => array(
  								array(
  								  'taxonomy' => 'core_capabilities',
  								  'field' => 'slug',
  								  'terms' => 'motion'
  								)
  							),
							//'cat' => '5',
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'order' => 'DESC',
							'paged' => get_query_var('page')
						);

						$loop = new WP_Query( $args2 );
						if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
					?>
						<div class="thumbnail-container">
							<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
									<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    									<div class="caption">
    										<div class="thumb-title">
    											<h3 class="xsmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 28;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="xsmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 40;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="msmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="msmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 20;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="small">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 16;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="small">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 23;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="medium">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="medium">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 22;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="large">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 20;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="large">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 28;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    										</div>
    										<div class="cat-icon pull-right"><span>sound &amp; motion</span></div>
    									</div>
    								</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content" id="environments">
					<?php
						$args2 = array(
							'post_type' => 'samples',
							'tax_query' => array(
  								array(
  								  'taxonomy' => 'core_capabilities',
  								  'field' => 'slug',
  								  'terms' => 'environments'
  								)
  							),
							//'cat' => '6',
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'order' => 'DESC',
							'paged' => get_query_var('page')
						);

						$loop = new WP_Query( $args2 );
						if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
					?>
						<div class="thumbnail-container">
							<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
									<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    									<div class="caption">
    										<div class="thumb-title">
    											<h3 class="xsmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 28;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="xsmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 40;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="msmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="msmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 20;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="small">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 16;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="small">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 23;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="medium">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="medium">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 22;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="large">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 20;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="large">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 28;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    										</div>
    										<div class="cat-icon pull-right"><span>environments</span></div>
    									</div>
    								</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content" id="web">
					<?php
						$args2 = array(
							'post_type' => 'samples',
							'tax_query' => array(
  								array(
  								  'taxonomy' => 'core_capabilities',
  								  'field' => 'slug',
  								  'terms' => 'web'
  								)
  							),
							//'cat' => '7',
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'order' => 'DESC',
							'paged' => get_query_var('page')
						);

						$loop = new WP_Query( $args2 );
						if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
					?>
						<div class="thumbnail-container">
							<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
									<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    									<div class="caption">
    										<div class="thumb-title">
    											<h3 class="xsmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 28;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="xsmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 40;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="msmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="msmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 20;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="small">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 16;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="small">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 23;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="medium">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="medium">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 22;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="large">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 20;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="large">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 28;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    										</div>
    										<div class="cat-icon pull-right"><span>web</span></div>
    									</div>
    								</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content" id="print">
					<?php
						$args2 = array(
							'post_type' => 'samples',
							'tax_query' => array(
  								array(
  								  'taxonomy' => 'core_capabilities',
  								  'field' => 'slug',
  								  'terms' => 'print'
  								)
  							),
							//'cat' => '8',
							'post_status' => 'publish',
							'posts_per_page' => -1,
							'order' => 'DESC',
							'paged' => get_query_var('page')
						);

						$loop = new WP_Query( $args2 );
						if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
					?>
						<div class="thumbnail-container">
							<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
									<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    									<div class="caption">
    										<div class="thumb-title">
    											<h3 class="xsmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 28;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="xsmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 40;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="msmall">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="msmall">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 20;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="small">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 16;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="small">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 23;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="medium">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 15;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="medium">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 22;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    											<h3 class="large">
    												<?php 
    													$thetitle = $post->post_title;
														$getlength = strlen($thetitle);
														$thelength = 20;
														echo substr($thetitle, 0, $thelength);
														if ($getlength > $thelength) echo "..."; 
													?>
    											</h3>
    											<span class="large">
    											<?php 
    												$thetitle = get_sub_field( 'sample_thumbnail_description' );
													$getlength = strlen($thetitle);
													$thelength = 28;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "...";
    											?>
    											</span>
    										</div>
    										<div class="cat-icon pull-right"><span>print</span></div>
    									</div>
    								</div>
								</div>
							<?php endwhile; endif; ?>
						</div>
					<?php endwhile; wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- CASE STUDIES MODULE -->
	<section id="case-studies-module">
		<div class="container-fluid">
			<div class="row">
				<?php
					$args2 = array(
						'post_type' => 'samples',
						'tax_query' => array(
  							array(
  							  'taxonomy' => 'core_capabilities',
  							  'field' => 'slug',
  							  'terms' => 'case-study'
  							)
  						),
						//'cat' => '4',
						'post_status' => 'publish',
						'posts_per_page' => 3,
						'order' => 'DESC',
						'paged' => get_query_var('page')
					);

					$loop = new WP_Query( $args2 );
					if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
				?>
					<div class="thumbnail-container">
						<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="thumbnail">
								<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    								<div class="caption">
    									<div class="thumb-title">
    										<h3 class="xsmall">
    											<?php 
    												$thetitle = $post->post_title;
													$getlength = strlen($thetitle);
													$thelength = 28;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "..."; 
												?>
    										</h3>
    										<span class="xsmall">
    										<?php 
    											$thetitle = get_sub_field( 'sample_thumbnail_description' );
												$getlength = strlen($thetitle);
												$thelength = 40;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
    										?>
    										</span>
    										<h3 class="msmall">
    											<?php 
    												$thetitle = $post->post_title;
													$getlength = strlen($thetitle);
													$thelength = 15;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "..."; 
												?>
    										</h3>
    										<span class="msmall">
    										<?php 
    											$thetitle = get_sub_field( 'sample_thumbnail_description' );
												$getlength = strlen($thetitle);
												$thelength = 20;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
    										?>
    										</span>
    										<h3 class="small">
    											<?php 
    												$thetitle = $post->post_title;
													$getlength = strlen($thetitle);
													$thelength = 16;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "..."; 
												?>
    										</h3>
    										<span class="small">
    										<?php 
    											$thetitle = get_sub_field( 'sample_thumbnail_description' );
												$getlength = strlen($thetitle);
												$thelength = 23;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
    										?>
    										</span>
    										<h3 class="medium">
    											<?php 
    												$thetitle = $post->post_title;
													$getlength = strlen($thetitle);
													$thelength = 15;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "..."; 
												?>
    										</h3>
    										<span class="medium">
    										<?php 
    											$thetitle = get_sub_field( 'sample_thumbnail_description' );
												$getlength = strlen($thetitle);
												$thelength = 22;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
    										?>
    										</span>
    										<h3 class="large">
    											<?php 
    												$thetitle = $post->post_title;
													$getlength = strlen($thetitle);
													$thelength = 20;
													echo substr($thetitle, 0, $thelength);
													if ($getlength > $thelength) echo "..."; 
												?>
    										</h3>
    										<span class="large">
    										<?php 
    											$thetitle = get_sub_field( 'sample_thumbnail_description' );
												$getlength = strlen($thetitle);
												$thelength = 28;
												echo substr($thetitle, 0, $thelength);
												if ($getlength > $thelength) echo "...";
    										?>
    										</span>
    									</div>
    									<div class="cat-icon pull-right">
    										<span>
    											<?php $terms = get_the_terms( $post->id, 'core_capabilities' ); 
    												foreach ( $terms as $term ) { echo $term->name . ' '; 
    											} ?>
    										</span>
    									</div>
    								</div>
    							</div>
							</div>
						<?php endwhile; endif; ?>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- NEWSLETTER MODULE -->
	<?php get_sidebar( 'newsletter' ); ?>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- CLIENTS MODULE -->
	<section id="clients-module" class="quote alt">
		<div class="container-fluid">
			<div class="row">
				<?php if( have_rows( 'clients' ) ): while( have_rows( 'clients' ) ): the_row(); ?>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2"><div class="client-logo"><img src="<?php the_sub_field( 'client_logo' ); ?>" alt="<?php the_sub_field( 'client_name' ); ?>"></div></div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>


