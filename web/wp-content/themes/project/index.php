<?php get_header(); ?>

	<header id="section1" class="container-fluid">

	    <div class="container">

	        <div class="row">

	            <div class="col-lg-12">

	            	<div class="profile-image-parent">

	                	<img class="profile-image" src="<?= get_template_directory_uri(); ?>/images/aljayDSC_0079.jpg" alt="Aljay Quizon Mallari">
						
	                </div>

	                <div class="intro-text">
	                    <h1 class="name">Web Developer</h1>

	                    <hr class="star-light">
						
	                    <span class="skills"> PHP - PHP MVC - Front End</span>

	                    <p style="width:90%;margin:0 auto;margin-top:20px;">
							Full stack developer/Web developer with years of experience, highly familiar with PHP, MySql, JQuery, Javascript, Ajax, HTML, HTML5, CSS, CSS3 and WordPress. I have a lot of experience in PHP with Object Oriented Programming technique, MVC, Mysql and Ajax and also, I do have a lot of experience in front end development, such as PSD to HTML and HTML to WordPress theme.
	                    </p>
	                </div>
	                <a href="#section3" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
	            </div>
	        </div>
	    </div>

	</header>

    <section id="section2" class="bg-primary">
	
        <div class="container">

            <div class="row">
            	<div class="col-md-12 text-center">
            		<h2 class="section-heading">Portfolio</h2>
            	</div>
            	<?php echo do_shortcode('[ajax_load_more post_type="portfolio" scroll="false" posts_per_page="6" button_label="View More"]'); ?>
            </div>

        </div>
    </section>

    <section id="section3" class="container-fluid sec-default">
	
    	<div class="container">
		
			<div class="row">

				<div class="col-md-12 text-center">
					<h2 class="section-heading">Current Skill Set</h2>
				</div>
				<?php
					$skills_query = new WP_Query(array(
						'post_type'=>'skill_post_type',
						'posts_per_page'=>'6',
						'meta_key'		=> 'is_featured',
						'meta_value'	=> '1'
					));
					
					if ( $skills_query->have_posts() ) {

						while ( $skills_query->have_posts() ) {

							$skills_query->the_post();

						?> 
						<div class="col-md-4 col-sm-6 col-xm-6">
							<div class="skill-col">
								<div class="c100 p<?php echo get_field( "percentage" ); ?> orange">
									<span><?php echo get_field( "percentage" ); ?>%</span>
									<div class="slice">
										<div class="bar"></div>
										<div class="fill"></div>
									</div>
								</div>
							</div>
							<h3> <?php the_title(); ?> </h3>
							<p class="description"> <?php echo get_the_excerpt(); ?> </p>
						</div>
						<?php
						}
					}
					/* Restore original Post Data */
					wp_reset_postdata();
				?>
				<div class="text-center"><a href="#section3" class="btn btn-primary btn-xl page-scroll">Find Out More</a></div>
				<?php //echo do_shortcode("[ajax_load_more post_type='skill_post_type' orderby='title' posts_per_page='6' scroll='false']"); ?>
			</div>
		</div>
    </section>

    <section id="section5" class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <p style="width:60%;margin:0 auto;margin-bottom:40px;">
                    	Ready to start your new project with me? Then! Give me a call or send me an email and I will get back to you.
                    </p>
                </div>

	            <div class="row">
	                <div class="col-md-3 wow fadeInLeft animated animated contact-info" style="visibility: visible; animation-name: fadeInLeft;">
	                    <div class="single_contact_info">
	                        <h3>Call Me</h3>
	                        <p><a id="phone_number" style="color:#7E7D7D">+63 935 XXX XXXX</a></p>
	                    </div>

	                    <div class="single_contact_info">
	                        <h3>Email Me</h3>
	                        <p><a id="email" style="color:#7E7D7D">mallarialjayXX@xxxxx.xxx</a></p>
	                    </div>

	                    <div class="single_contact_info">
	                        <h3>Address</h3>
	                        <p>Region III - Central Luzon, Philippines</p>
	                    </div>
	                </div>

	                <div class="col-md-9  wow fadeInRight animated animated" style="visibility: visible; animation-name: fadeInRight;">

	                    <div class="contact-form">
	                    	<?php echo do_shortcode('[contact-form-7 id="11" title="Untitled"]'); ?>
	                    </div>
	                </div>
	            </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>