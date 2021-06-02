<<?php get_header(); ?>

	<div class="container-fluid">
		<div class="row">
			<div class="col">
	        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    		<div class="col-md-auto">
					<h1><?php the_title(); ?></h1>
			</div>
			<div class="col-md-8">
					<?php the_content(); ?>
			<div class="col-md-4">
					<?php the_post_thumbnail(); ?>
	</div>
	
<?php the_excerpt(); ?>
</div>
	</div>
	</div>
	</div>

<?php endwhile; endif; ?>
     

<?php get_sidebar();?>
<?php get_footer(); ?>