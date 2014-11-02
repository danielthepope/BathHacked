<?php
/*  
Template Name: Home/landing page template
*/  
get_header(); ?>
	<div class="content">
		<div class="listing">
			<h1>Your one-stop shop for All The Political Things</h1>
		</div>
		<ul class="listing">
			<li class="listing__item listing__item--fancy">
				<a href="candidate/" class="listing__item--fancy__link">Who can you vote for?</a>
			</li>
			<li class="listing__item listing__item--fancy">
				<a href="ward/" class="listing__item--fancy__link">What happened last time?</a>
			</li>
			<li class="listing__item listing__item--fancy">
				<a href="ward/" class="listing__item--fancy__link">How will you vote next time?</a>
			</li>
		</ul>
	</div><!--#content-->
<?php get_footer(); ?>
