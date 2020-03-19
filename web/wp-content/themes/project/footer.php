	
		<footer>

	        <div class="container">
	            <div class="row">
	                <div class="col-lg-8 col-lg-offset-2 text-center">
	                    <p class="text-faded">"Everything is easy, when you are crazy about it and nothing is easy, when you are lazy about it."</p>
	                    <p>RecoveryExperts.com</p>
	                </div>
	            </div>
	        </div>

	        <hr>

	        <div class="container" style="margin-bottom:20px;">
	        	<div class="row">

		        	<div class="col-lg-6">
		                <p style="padding-top: 10px;margin-bottom:0">Copyright © Aljay Quizon Mallari 2016</p>
		            </div>

		            <div class="col-lg-6 text-right">
		                <ul class="list-inline" style='margin-bottom: 0;'>

		                	<li>
		                		<a target="_blank" rel="nofollow" href="http://facebook.com/aljaymallari"><i class="fa fa-facebook" aria-hidden="true"></i></a>
		                	</li>

		                	<li>
		                		<a target="_blank" rel="nofollow" href="https://ph.linkedin.com/in/aljay-mallari-772150110"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
		                	</li>
							
		                	<li>
		                		<a target="_blank" rel="nofollow" href="https://plus.google.com/u/0/102219937711764403829/posts"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
		                	</li>
		                </ul>
		            </div>
	            </div>
	        </div>
	    </footer>

		<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>
		<script type='text/javascript' src='<?= get_template_directory_uri(); ?>/js/bootstrap.js'></script>

		<?php wp_footer(); ?>
		<script>
	    	$(function() {
			  $('a[href*="#"]:not([href="#"])').click(function() {
			    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			      var target = $(this.hash);
			      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			      if (target.length) {
			        $('html, body').animate({
			          scrollTop: target.offset().top
			        }, 500);
			        return false;
			      }
			    }
			  });
			});

			

			$(window).scroll(function() {
			  if ($(document).scrollTop() > 50) {
			    $('nav').addClass('shrink');
			  } else {
			    $('nav').removeClass('shrink');
			  }
			});

			

			jQuery("#phone_number").on("click", function(){
				jQuery(this).text("+63 935 832 7155");
			});

			jQuery("#email").on("click", function(){
				jQuery(this).text("mallarialjay07@gmail.com");
			});

			

			

			jQuery(document).ready(function(){
				jQuery("<div style='clear:both'></div>").insertBefore(".alm-btn-wrap");
			});
			
	    </script>
	</body>
</html>