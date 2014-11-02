
<?php if ( have_posts() ) while ( have_posts() ) : the_post();

// Get the custom field values
$candidate_name = get_field('candidate_name');
$candidate_profile_picture = get_field('candidate_profile_picture');
$candidate_party = get_field('candidate_party');
$candidate_gender = get_field('candidate_gender');
$candidate_date_of_birth = get_field('candidate_date_of_birth');
$candidate_email = get_field('candidate_email');
$candidate_twitter_handle = get_field('candidate_twitter_handle');
$candidate_website = get_field('candidate_website');

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
<div class="profile">
	<div class="profile__header">
		<h1 class="profile__header__title">
			<?php echo $candidate_name."(".$candidate_party.")"; ?>
		</h1>
		<img class="profile__header__img profile__header__img--<?php echo $candidate_party ?>" src="<?php echo $candidate_profile_picture['url']; ?>" alt="">
	</div>
	<div class="profile__details">
		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Party</h3>
			<span class="profile__details__item__bd">
				<?php echo $party_name; ?>
			</span>
		</div>
		<?php if ($candidate_date_of_birth): ?>
		<div class="profile__details__item">
			<h3 class="profile__details__item__label">DOB</h3>
			<span class="profile__details__item__bd">
				<?php echo $candidate_date_of_birth; ?>
			</span>
		</div>
		<?php endif ?>
		<?php if ($candidate_gender): ?>

		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Gender</h3>
			<span class="profile__details__item__bd">
				<?php echo $candidate_gender; ?>
			</span>
		</div>
		<?php endif ?>
		<?php if ($candidate_email): ?>
		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Email</h3>
			<span class="profile__details__item__bd">
				<a href="mailto:<?php echo $candidate_email; ?>" class="profile__details__item__bd__link">
					<?php echo $candidate_email; ?>
				</a>
			</span>
		</div>
		<?php endif ?>
		<?php if ($candidate_twitter_handle): ?>
		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Twitter</h3>
			<span class="profile__details__item__bd">
				<a href="https://www.twitter.com/<?php echo $candidate_twitter_handle; ?>" class="profile__details__item__bd__link">
					@<?php echo $candidate_twitter_handle; ?>
				</a>
			</span>
		</div>
		<?php endif ?>
		<?php if ($candidate_website): ?>
		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Website</h3>
			<span class="profile__details__item__bd">
				<a href="<?php echo $candidate_website; ?>" class="profile__details__item__bd__link">
					View candidate's website
				</a>
			</span>
		</div>
		<?php endif ?>
	</div>
	<!-- <div class="profile__details">
		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Policies</h3>
			<ul class="profile__details__item__bd--listing">
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
			</ul>
		</div>

		<div class="profile__details__item">
			<h3 class="profile__details__item__label">Vested Interests</h3>
			<ul class="profile__details__item__bd--listing">
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
			</ul>
		</div>

		<div class="profile__details__item">
			<h3 class="profile__details__item__label">In the media</h3>
			<ul class="profile__details__item__bd--listing">
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
				<li class="profile__details__item__bd--listing__item">
					Example info here
				</li>
			</ul>
		</div>
	</div> -->
</div>
<?php endwhile; /* end loop */ ?>