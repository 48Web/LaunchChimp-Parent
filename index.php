<?php /* Template Name: Index 
	
	By default we'll render the mailchimp signup form

*/ ?>

<?php 
	get_header(); 
?>

<div id="content">
	<div class="post">
		<form id="signup" action="<?=$_SERVER['PHP_SELF']; ?>" method="get">
			<label for="email" id="address-label">Email Address</label>
			<span id="response"></span>
				  
			<input type="text" name="email" id="email" />
			<input type="submit" value="Signup Now" />

			<div id="no-spam">We'll never spam or give this address away</div>
		</form>
	</div><!--#end post-->
</div><!--#end content -->
	
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