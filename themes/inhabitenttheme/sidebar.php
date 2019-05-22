<?php
/**
 * The sidebar containing the main widget area.s
 *
 * @package RED_Starter_Theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
<div>
<div class ="contactsidebar">
		 Contact Info
		 <ul>
		 <li>info@inhabitent.co
		 <li>778-456-7891</ul>
</div>
<div class ="hourssidebar">
Business Hours
<ul>
	<li>Monday-Friday: 9am to 5pm

	<li>Saturday: 10am to 2pm

<li>Sunday: Closed</ul>
</div>
