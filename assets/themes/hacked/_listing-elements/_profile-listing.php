<ul class="listing">

<?php

	if ( have_posts() ) while ( have_posts() ) : the_post();
	$candidate_name = get_field('candidate_name');
	$candidate_profile_picture = get_field('candidate_profile_picture');
	$candidate_party = get_field('candidate_party');

	switch($candidate_party){
	case"green":
		$party_name = "Green Party";
	break;
	case"lab":
		$party_name = "Labour Party";
	break;
	case"con":
		$party_name = "Conservative Party";
	break;
	case"ukip":
		$party_name = "UKIP";
	break;
	case"lib-dem":
		$party_name = "Liberal Democrats";
	break;
	}
?>
	<li class="listing__item listing__item">
		<img src="<?php echo $candidate_profile_picture['url'] ?>" alt="" class="listing__item__img listing__item__img--<?php echo $candidate_party ?>">
		<h2 class="listing__item__header">
			<a href="<?php the_permalink(); ?>" class="listing__item__header__link">
				<?php echo $candidate_name ?>
			</a>
		</h2>
		<p class="listing__item__meta">
			<?php echo $party_name; ?>
		</p>
	</li>
<?php endwhile; /* end loop */ ?>
</ul>