<section id="address">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<p><?php the_field( 'address_street', $acfw ); ?></p>
				<p><?php the_field( 'address_city', $acfw ); ?></p>
				<p><?php the_field( 'address_phone', $acfw ); ?></p>
				<p><?php the_field( 'address_email', $acfw ); ?></p>
				<div class="social-container">
					<ul class="social">
						<?php /*
        				   $facebook = get_sub_field( 'social_facebook' ); 
        				   $twitter = get_sub_field( 'social_twitter' );
        				   $linkedin = get_sub_field( 'social_linkedin' ); 
        				   $vimeo = get_sub_field( 'social_vimeo' );
        				   $youtube = get_sub_field( 'social_youtube' ); 
        				   //if( $facebook ) { */
        				?>
							<li><a href="<?php the_sub_field( 'social_facebook' ); ?>"><div class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
						<?php //} ?>
						<?php //if( $twitter ) { ?>
							<li><a href="<?php the_sub_field( 'social_twitter' ); ?>"><div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
						<?php //} ?>
						<?php //if( $linkedin ) { ?>
							<li><a href="<?php the_sub_field( 'social_linkedin' ); ?>"><div class="icon"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
						<?php //} ?>
						<?php //if( $vimeo ) { ?>
							<!-- <li class="icon"><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li> -->
						<?php //} ?>
						<?php //if( $youtube ) { ?>
							<!-- <li><a href="<?php the_sub_field( 'social_youtube' ); ?>"><div class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></div></a></li> -->
						<?php //} ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>