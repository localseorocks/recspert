<?php /* Template Name: Homepage */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	?>
	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex align-items-center">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
					<h1 data-aos="fade-up">Find a local Recspert near you</h1>
					<h2 data-aos="fade-up" data-aos-delay="400">Recsperts offers many solutions find yours below!</h2>
					<div data-aos="fade-up" data-aos-delay="800">
						<input type="text" class="form-control">
					</div>
				</div>
				<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
					<img src="<?php echo get_stylesheet_directory_uri();?>/assets/img/hero-img.png" class="img-fluid" alt="">
				</div>
			</div>
		</div>
	</section><!-- End Hero -->

	<main id="main">
		<?php
		the_content();
		?>
		<!-- ======= Clients Section ======= -->
		<section id="clients" class="clients clients">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-4 col-6">
						<img src="https://via.placeholder.com/150" class="img-fluid" alt="" data-aos="zoom-in"><br/>Mind & Body
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<img src="https://via.placeholder.com/150" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100"><br/>Sport Coach
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<img src="https://via.placeholder.com/150" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200"><br/>Lifegaurds
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<img src="https://via.placeholder.com/150" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300"><br/>Sports Medicine
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<img src="https://via.placeholder.com/150" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400"><br/>Sports Officials
					</div>
					<div class="col-lg-2 col-md-4 col-6">
						<img src="https://via.placeholder.com/150" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"><br/>Senior Activities
					</div>
				</div>
			</div>
		</section><!-- End Clients Section -->
	</main>
	<?php

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.

get_footer();
