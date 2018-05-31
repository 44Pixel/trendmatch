<?php /* Template Name: Legal */ ?>

<?php get_header(); ?>

<div class="page-wrapper">
	<section class="hero">
		<div class="container">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>	
		</div>
	</section>
</div>
         
<?php get_footer(); ?>