<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<div id="content">
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<p>These aren't the droids you're looking for</p>	
		</div>
	</div><!--#end content-->
	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!--#end sidebar-->
	
<?php endwhile; endif; get_footer(); ?>