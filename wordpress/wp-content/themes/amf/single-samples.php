<?php get_header(); ?><div class="wrap-header">
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- HEADER -->
	
	
	<section id="samples-module" class="interactive-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="header-img"><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></div>
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SAMPLE SLIDER MODULE -->
	<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
		<?php 
           $images = get_sub_field( 'sample_images' ); 
           $video = get_sub_field( 'sample_video' );
           if( $images ) {
        ?>
			<section id="samples-slider-module">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="slickslider-samples">
								<?php if( have_rows( 'sample_images' ) ): while ( have_rows( 'sample_images' ) ): the_row(); ?>
									<div class="slide">
										<div class="container-fluid">
											<div class="row">
												<div class="col-xs-12"><img src="<?php the_sub_field( 'sample_image' ); ?>" alt=""></div>
											</div>
										</div>
									</div>
								<?php endwhile; endif; ?>
							</div>
							
							<div class="slider-nav" data-slick='{"slidesToShow": 7, "slidesToScroll": 1}'>
								<?php if( have_rows( 'sample_thumbnails' ) ): while ( have_rows( 'sample_thumbnails' ) ): the_row(); ?>
									<div class="slide-thumb"><img src="<?php the_sub_field( 'sample_image_thumbnail' ); ?>" alt=""></div>
								<?php endwhile; endif; ?>
							</div>
						</div>					
					</div>
				</div>
			</section>
		<?php } ?>
		<?php if( $video ) { ?>
			<section id="samples-video-module">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<!-- SAMPLE VIDEO MODULE -->
							<div class="video-container">
								<video id="sampleMovie" preload autoplay controls>
									<source src="http://activemindfuel.com/samples/interactive/mp4/<?php the_sub_field( 'sample_video' ); ?>.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' /><?php //echo get_stylesheet_directory_uri(); ?>
									<source src="http://activemindfuel.com/samples/interactive/ogg/<?php the_sub_field( 'sample_video' ); ?>.oggtheora.ogv" type='video/ogg; codecs="theora, vorbis"' />
									<source src="http://activemindfuel.com/samples/interactive/webm/<?php the_sub_field( 'sample_video' ); ?>.webmsd.webm" type='video/webm; codecs="vp8, vorbis"' />
									<object type="application/x-shockwave-flash" data="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" width="97%" height="97%">
										<param name="movie" value="http://releases.flowplayer.org/swf/flowplayer-3.2.1.swf" />
										<param name="allowFullScreen" value="false" />
										<param name="wmode" value="transparent" />
										<param name="flashvars" value='config={"clip":{"url":"flv/ElementsWeb.flv","autoPlay":false,"autoBuffering":true}}' />
									</object>
								</video>
							</div>
						</div>
					</div>
				</div>
			</section>
		<?php } ?>
		
	
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SAMPLE DESCRIPTION -->
	<section id="sample-description">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
					<h1><?php the_title(); ?></h1>
					<p><?php the_sub_field( 'sample_full_description' ); ?></p>
				</div>
			</div>
		</div>
	</section>
	<?php endwhile; endif; ?>
	<?php $hastag = get_field( 'tag' ); if( $hastag != '' ) { ?>
	<section id="tags">
		<div class="container-fluid">
			<div class="row">
				<?php 
					$args2 = array(
						'post_type' => 'samples',
						//'cat' => 4,
						'tag__in' => get_field( 'tag' ), //how can I make this a variable?
						'post__not_in' => array($post->ID),
						'post_status' => 'publish',
						'posts_per_page' => -1,
						'order' => 'DESC',
						'paged' => get_query_var('page')
					);
					
					is_single();
			
					$loop = new WP_Query( $args2 );
					if ( have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post(); echo $title;
				?>
			
					<div class="thumbnail-container">
						<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
							<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
								<div class="thumbnail cat">
									<div class="row">
										<div class="col-xs-5 col-sm-5 col-md-6 col-lg-5"><a href="<?php the_permalink(); ?>"><span class="img-container"><img src="<?php the_sub_field( 'sample_thumbnail_image' ); ?>" alt="..."></a></span></div>
										<div class="col-xs-7 col-sm-7 col-md-6 col-lg-7">
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
    							</div>
							</div>
						<?php endwhile; endif; ?>
					</div>
	
				<?php endwhile; wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<?php } ?>
<?php get_footer(); ?>
