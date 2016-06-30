<?php get_header(); ?><div class="wrap-header">
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- HEADER -->
	<section id="samples-module">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="header-img">Category Interactive
					</div>								
				</div>
			</div>
		</div>
	</section>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SAMPLE SLIDER MODULE -->
	<?php if( have_rows( 'samples' ) ): while( have_rows( 'samples' ) ): the_row(); ?>
		<?php 
           $images = get_sub_field( 'sample_iamge' ); 
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
									<source src="<?php echo get_stylesheet_directory_uri(); ?>/samples/interactive/mp4/<?php the_sub_field( 'sample_video' ); ?>.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"' />
									<source src="<?php echo get_stylesheet_directory_uri(); ?>/samples/interactive/ogg/<?php the_sub_field( 'sample_video' ); ?>.oggtheora.ogv" type='video/ogg; codecs="theora, vorbis"' />
									<source src="<?php echo get_stylesheet_directory_uri(); ?>/samples/interactive/webm/<?php the_sub_field( 'sample_video' ); ?>.webmsd.webm" type='video/webm; codecs="vp8, vorbis"' />
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
	<?php endwhile; endif; ?>
	<!-- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -->
	<!-- SAMPLE DESCRIPTION -->
	<section id="sample-description">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
					<h1><?php the_title(); ?></h1>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, illum ratione. Consequuntur a debitis dicta, ipsam perferendis fugiat possimus laborum esse quae voluptas. Harum iure quia, voluptate quibusdam explicabo voluptatibus blanditiis doloribus unde magnam culpa atque. Perspiciatis, odit nemo. Blanditiis a eos ipsam accusamus natus dicta hic magnam, commodi delectus.
					</p>
				</div>
			</div>
		</div>
	</section>
	<?php get_sidebar( 'newsletter' ); ?>
<?php get_footer(); ?>
