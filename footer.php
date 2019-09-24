<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	<!-- FOOTER -->
	<footer>
		<ul>
			<li>&copy; 2019 Viking Strategic Metals. All Rights Reserved. <a href="#">Contact us</a></li>
		</ul>
	</footer>
	<!-- FOOTER (END) -->
	<!-- Back to Top -->
	<div class="back-to-top"><a data-scroll href="#top">— back to top</a></div>
</div>
<!-- WRAPPER (END) -->

<!-- MOBILE NAV -->
<div class="mobile fade">
  <div class="close"><a></a></div>
  <h1><a href="#">Viking Strategic Metals</a></h1>
  <div class="flexwrap">
    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Works</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
  </div>
</div>
<!-- MOBILE NAV (END) -->

<!-- COVER SCROLL -->
<div class="coverscroll">
  <ul>
    <li><a class="anchor" href="#top"></a></li>
    <li><a class="anchor" href="#start"></a></li>
    <li><a class="anchor" href="#one"></a></li>
    <li><a class="anchor" href="#two"></a></li>
    <li><a class="anchor" href="#three"></a></li>
    <li><a class="anchor" href="#four"></a></li>
  </ul>
</div>
<!-- COVER SCROLL (END) -->

<?php wp_footer(); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mobile.custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.visualNav.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.waypoints.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/init.js"></script>

</body>
</html>
