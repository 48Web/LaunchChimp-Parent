<?php
add_action('wp_head', 'page_head');
add_action('wp_footer', 'page_foot');
get_header();
function page_head(){?><?php }
function page_foot(){?><?php }?>

	<div id="content">
		<div class="post">
			<h1>404 Uh-Oh!</h1>
			<p>Sorry, we were unable to find the page you were looking for. </p>
		</div>
	</div><!--#end content-->
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!--#end sidebar-->
<?php get_footer(); ?>
