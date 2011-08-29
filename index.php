<?php /* Template Name: Index 
	
	By default we'll render the mailchimp signup form

*/ ?>

<?php 
	get_header(); 
?>

<div id="content">
	<div class="post">
		<?php get_template_part('lib/theme/ajax-form'); ?>
	</div><!--#end post-->
</div><!--#end content -->


<?php get_footer(); ?>