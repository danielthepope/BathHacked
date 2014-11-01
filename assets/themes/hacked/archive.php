<?php
/*  
Template Name: Listing template
*/  
get_header(); ?>

<?php
global $id;
global $post;

$post_type = get_post_type_object($post->post_type);
$post_type_name = $post_type->labels->singular_name;	
wp_reset_query();
	?>
<div class="content">
	<?php
		if($post->post_type === ("candidate")):
		include('_listing-elements/_profile-listing.php');
		elseif ($post->post_type === ("ward")):
		include('_listing-elements/_ward-listing.php');
		endif;
	 ?>
</div>
<?php get_footer(); ?>
