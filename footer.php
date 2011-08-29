<?php // Footer 
	include("lib/admin/get-theme-options.php"); // load theme options
?>
<div id="footer">
	&copy; <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a>
	<?php
		if ($lc_theme_show_nav == "true") { ?>
			<div id="nav">
				<?php theme_nav(); ?>
			</div>
		<?php } 
	?>
</div><!--#end footer-->
</div><!--#end container-->

<div class="hide">
	<?php wp_footer(); ?>
</div>

<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','<?php echo $lc_google_analytics_key; ?>'],['_trackPageview'],['_trackPageLoadTime']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>