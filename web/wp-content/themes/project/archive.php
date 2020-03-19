<?php get_header(); ?>
    
    <section id="section3" class="container-fluid sec-default">
    	
    	<div class="container">
			<div class="row">

				<div class="col-md-12 text-center">
					<h2 class="section-heading">Current Skill Set</h2>
				</div>
				<?php echo do_shortcode("[ajax_load_more post_type='skill_post_type' orderby='title' posts_per_page='6']"); ?>
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
	                        <p><a id="phone_number" style="color:#7E7D7D">+63 905 XXX XXXX</a></p>
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