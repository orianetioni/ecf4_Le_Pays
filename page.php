<?php get_header(); ?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>    
	<div class="col-12 pt-4"> 
      <h1 class="title text-center"><?php the_title(); ?></h1>
   </div>
		<?php the_content();?>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>

