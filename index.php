<?php /* Template Name: Index*/ ?>

<?php 
	get_header(); 
?>

	<div id="content">
	    <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <div class="post">
                <h1><a href="<?php the_permalink() ?>" rel="permalink"><?php the_title(); ?></a></h1>
                <div class="post-content">
                    <?php echo the_content(); ?>
                </div>

				<form id="signup" action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
				  <fieldset>
					<legend>Join Our Mailing List</legend>

					  <label for="email" id="address-label">Email Address
						<span id="response">
							
						
						</span>
					  </label>
					  <input type="text" name="email" id="email" />
					  <input type="submit" value="Signup Now" />

					  <div id="no-spam">We'll never spam or give this address away</div>
				  </fieldset>
				</form>

                <?php if(comments_open()): ?>
                    <div id="comments">
                        <?php comments_template(); ?>
                    </div>
                <?php endif; ?>
		    </div><!--#end post-->
        <?php endwhile; endif; ?>
	</div><!--#end content -->
	<div class="sidbear">
		<?php get_sidebar(); ?>
	</div><!--#end sidebar -->
	
	<script>
		jQuery(document).ready(function() {
			jQuery('#signup').submit(function() {
				// update user interface
				jQuery('#response').html('Adding email address...');

				// Prepare query string and send AJAX request
				jQuery.ajax({
					type: 'POST',
					data: {
						action:'mailchimp_add',
						email: jQuery("#email").val()
					},
					url: '<?php echo bloginfo("url"); ?>/wp-admin/admin-ajax.php',
					success: function(msg) {
						jQuery('#response').html(msg);
					},
					error: function() {
						jQuery('#response').html("An error occurred");
					}
				});

				return false;
			});
		});
	</script>

<?php get_footer(); ?>