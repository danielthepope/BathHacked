<ul class="listing">

<?php

	if ( have_posts() ) while ( have_posts() ) : the_post();
	$candidate_name = get_field('candidate_name');
	$candidate_profile_picture = get_field('candidate_profile_picture');
	$candidate_party = get_field('candidate_party');
?>
	<li class="listing__item">
		<img src="<?php echo $candidate_profile_picture['url'] ?>" alt="" class="listing__item__img">
		<h2 class="listing__item__header">
			<?php echo $candidate_name ?>
		</h2>
		<p class="listing__item__meta listing__item__meta--<?php echo $candidate_party ?>">
			<?php echo $candidate_party; ?>
		</p>
	</li>
<?php endwhile; /* end loop */ ?>
</ul>