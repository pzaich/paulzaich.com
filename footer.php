</div>
<div class="desktop-hidden">
  <?php include (TEMPLATEPATH . '/sidebar.php' ); ?>
</div>
<div class="clear"></div>
	</div>
</div>
<div id="footer-wrapper">
	<div id="footer-inner-wrapper">

		<footer id="footer" class="source-org vcard copyright">
			<a href="#" id="contact-me">Contact</a>
			<div id="contact-holder"><?php echo do_shortcode('[contact-form-7 id="53" title="contact form footer"]'); ?>
				<div class="clear"></div>
			</div>
			<small>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></small>
			<i class="icon-github">

		</footer>
	</div>
</div>


	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-17353369-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

<script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js"></script>


</body>

</html>
