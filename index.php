<?php /* Template Name: Index*/ ?>

<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
	<div id="content">
		<div class="post">
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="post-content">
				<?php echo the_content(); ?>
			</div>
			
			<?php if(comments_open()): ?>
				<div id="comments">
					<?php comments_template(); ?>
				</div>
			<?php endif; ?>
		
		</div>
	</div><!--#end content -->
	<div class="sidbear">
		<?php get_sidebar(); ?>
	</div><!--#end sidebar -->
	
<?php endwhile; endif; get_footer(); ?>