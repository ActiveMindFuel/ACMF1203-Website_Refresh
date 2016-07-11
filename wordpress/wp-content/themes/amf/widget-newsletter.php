<section id="newsletter" style="background-image:url('<?php the_field( 'newsletter_image', $acfw ); ?>');">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
				<h3><?php the_field( 'newsletter_header', $acfw ); ?></h3>
				<p><?php the_field( 'newsletter_description_detail', $acfw ); ?></p>
				<div class="newsletter-input">
					<?php the_field( 'newsletter_email_input', $acfw ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
