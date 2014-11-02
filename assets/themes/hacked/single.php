<?php
/*  
Template Name: Detail page template
*/  
get_header();?>
<div class="content">
	<?php
	global $id;
	global $post;

	$post_type = get_post_type_object($post->post_type);
	$post_type_name = $post_type->labels->singular_name;	
	wp_reset_query();

	if($post->post_type === ("candidate")):
	include('_page-elements/_candidate-profile.php');
	elseif ($post->post_type === ("ward")):
	include('_page-elements/_ward-detail.php');
	endif;
		?>
</div>
<?php get_footer(); ?>