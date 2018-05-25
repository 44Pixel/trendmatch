<!-- /// THIS IS THE TEMPLATE FOR BLOG POSTS /// -->

<?php get_header(); ?>

<div class="blog-post-wrapper">

	<?php 
	
	if( have_posts() ):
		
		while( have_posts() ): the_post(); ?>
		
        <div id="<?php the_ID();?>" class="blog-post">
			<small><?php the_time('l d-m-Y');?></small>
			<h3><?php the_title();?></h3>

			<p><?php the_content();?></p>
		</div>
		
		<?php endwhile;
		
	endif;
	
	 ?>
   
</div>
     
<?php get_footer(); ?>
