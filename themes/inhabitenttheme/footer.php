<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>


</div><!-- #content -->
	

	<footer id="colophon" class="site-footer" role="contentinfo">
				

	<div class="footerbox">

    	 <div class ="contact">
		 	<h3>Contact Info</h3>
			<p><i class="fas fa-envelope"></i> <a href="mailto:info@inhabitent.com"> info@inhabitent.com</a></p>
			<p><i class="fas fa-phone"></i><a href="tel:+17884567891">778-456-7891</a></p>
			<p> <i class="fab fa-facebook-square"></i>
				<i class="fab fa-twitter-square"></i>
				<i class="fab fa-google-plus-square"></i></p>
		</div>
		<div class ="hours">
			<h3>Business Hours</h3>
 			<p><b>Monday-Friday</b>: 9am to 5pm</p>
			<p><b>Saturday</b>: 10am to 2pm</p>
			<p><b>Sunday</b>: Closed</p>
		</div>
		<div class="footerlogo">
			<img class ="header-logo logo-green" alt="footerlogo" src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-text.svg'?>" />
		</div>

		<div class="copyright">
				<p>copyright &copy; 2019 inhabitent</p>
			</div>

	</div>	

	
	</footer>
	<!-- #colophon -->
	</div>
	 <!-- #page -->
	<?php wp_footer(); ?>		
</body>

</html>
