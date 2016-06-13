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
	<section id="samples-module">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<ul class="nav nav-pills pull-right">
					  <li role="presentation" class="active"><a href="#home">Home</a></li>
					  <li role="presentation"><a href="#profile">Profile</a></li>
					  <li role="presentation"><a href="#">Messages</a></li>
					</ul>
				</div>
			</div>
			<div class="tab-content tabs-module-two-flex-container">
				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content active" id="home">Home</div>
				<div role="tabpanel" class="tab-pane tabs-module-box-element tabs-module-two-content" id="profile">
					<div class="row">
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="thumbnail">
    							<img src="..." alt="...">
    							<div class="caption">
    								<h3>Thumbnail label</h3>
    								<p>...</p>
    								<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    							</div>
    						</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="thumbnail">
    							<img src="..." alt="...">
    							<div class="caption">
    								<h3>Thumbnail label</h3>
    								<p>...</p>
    								<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    							</div>
    						</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="thumbnail">
    							<img src="..." alt="...">
    							<div class="caption">
    								<h3>Thumbnail label</h3>
    								<p>...</p>
    								<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    							</div>
    						</div>
						</div>
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3">
							<div class="thumbnail">
    							<img src="..." alt="...">
    							<div class="caption">
    								<h3>Thumbnail label</h3>
    								<p>...</p>
    								<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
    							</div>
    						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>


