<ul class="listing">

<?php

	if ( have_posts() ) while ( have_posts() ) : the_post();
?>
	<li class="listing__item">
		<h2 class="listing__item__header">
			<?php the_title(); ?>
		</h2>
		<p class="listing__item__meta">
			<?php the_content(); ?>
		</p>
	</li>
<?php endwhile; /* end loop */ ?>
</ul>