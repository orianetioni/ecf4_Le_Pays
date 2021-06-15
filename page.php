<?php get_header(); ?>
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>    
	<div class="col-12 pt-4"> 
      <h1 class="title text-center"><?php the_title(); ?></h1>
    </div>	
		<div class="container-fluid d-flex">
			<div class="col-2"></div>
			<div class="col-2">	
				
			</div>
			<div class="col-6">		
			<div class="col-2"></div>
				
				<?php the_content();?>
				
			</div>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>

