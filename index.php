<?php 
	get_header(); 
	include("lib/admin/get-theme-options.php"); // load theme options
?>

<div id="content">
	<div class="post">
		<h1><?php echo isset($lc_homepage_headline) ? $lc_homepage_headline : "Set Your Headline In Settings"; ?></h1>
		<p><?php echo isset($lc_homepage_headline) ? $lc_homepage_headline : "Set Your Text In Settings"; ?></p>
		<?php get_template_part('lib/theme/ajax-form'); ?>
	</div><!--#end post-->
</div><!--#end content -->


<?php get_footer(); ?>