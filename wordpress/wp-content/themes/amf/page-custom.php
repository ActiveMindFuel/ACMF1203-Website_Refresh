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
	<section id="masthead">
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
	<section id="about-module">
		<div id="about"></div>
		<div class="container-fluid">
			<div class="three-col">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h2>Stimulate</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores amet eveniet, sit et dolore nihil reiciendis blanditiis quasi praesentium, non magni, illum laborum quidem temporibus atque similique optio repellendus eius?
						</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h2>Communicate</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel suscipit minima, reprehenderit provident. Soluta placeat beatae maxime, rerum illum reprehenderit, vel quia eum eius repellendus unde perferendis ratione voluptate veritatis.
						</p>
					</div>
					<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
						<h2>Motivate</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias ut facere ullam inventore et iusto, asperiores explicabo ex voluptate iste, suscipit porro dignissimos nulla molestiae vitae numquam incidunt quibusdam! Impedit!
						</p>
					</div>
				</div>
			</div>
			<div class="single-col">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi nam enim nostrum soluta amet, placeat natus animi illo quas, ullam porro praesentium, ducimus error temporibus quis eum! Odit vel illo nulla corrupti praesentium officiis neque, tempore soluta, adipisci aspernatur eum natus earum facere enim, saepe vitae accusamus similique. Quasi unde possimus dicta nemo temporibus libero inventore. At consectetur ipsa eos mollitia. Vero quod, fugiat nobis nemo in soluta possimus fuga ea illum deserunt officia. Fugit aperiam repellat iusto quis voluptas quia earum consequuntur. Libero debitis fuga error, aut quia odio repudiandae labore sit rerum, sint, illo, quis tempora a eos!
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SLIDER MODULE -->
	<section id="slider-module">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="slickslider">
					<div class="slide">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12"> your content</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12"> your content</div>
							</div>
						</div>
					</div>
					<div class="slide">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12"> your content</div>
							</div>
						</div>
					</div>
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
     				<!--
					<ul class="nav nav-pills pull-right">
					  <li role="presentation" class="active"><a href="#home">Home</a></li>
					  <li role="presentation"><a href="#profile">Profile</a></li>
					  <li role="presentation"><a href="#">Messages</a></li>
					</ul>
					-->
				</div>
			</div>
			<div class="tab-content tabs-module-two-flex-container">
				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content active" id="interactive">
					<?php
						$args1 = array(
							'post_type' => 'samples',
							'cat' => '4',
							//'taxonmy' => '12',
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
								<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
									<div class="thumbnail">
									<a href="<?php the_permalink(); ?>"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a>
    									<div class="caption">
    										<h3><?php the_title(); ?></h3>
    										<span><?php the_sub_field( 'sample_thumbnail_description' ); ?></span>
    										<div class="cat-icon pull-right"><i class="fa fa-camera" aria-hidden="true"></i></div>
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
							'cat' => '5',
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
    										<h3><?php the_title(); ?></h3>
    										<span><?php the_sub_field( 'sample_thumbnail_description' ); ?></span>
    										<div class="cat-icon pull-right"><i class="fa fa-camera" aria-hidden="true"></i></div>
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
							'cat' => '6',
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
    										<h3><?php the_title(); ?></h3>
    										<span><?php the_sub_field( 'sample_thumbnail_description' ); ?></span>
    										<div class="cat-icon pull-right"><i class="fa fa-camera" aria-hidden="true"></i></div>
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
							'cat' => '7',
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
    										<h3><?php the_title(); ?></h3>
    										<span><?php the_sub_field( 'sample_thumbnail_description' ); ?></span>
    										<div class="cat-icon pull-right"><i class="fa fa-camera" aria-hidden="true"></i></div>
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
						'cat' => '4',
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
    									<h3><?php the_title(); ?></h3>
    									<span><?php the_sub_field( 'sample_thumbnail_description' ); ?></span>
    									<div class="cat-icon pull-right"><i class="fa fa-camera" aria-hidden="true"></i></div>
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
	<section id="clients-module">
		<div class="container-fluid">
			<div class="row">
				<?php if( have_rows( 'clients' ) ): while( have_rows( 'clients' ) ): the_row(); ?>
					<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2"><div class="client-logo"><img src="<?php the_sub_field( 'client_logo' ); ?>" alt="<?php the_sub_field( 'client_name' ); ?>"></div></div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</section>
	
<?php get_footer(); ?>


