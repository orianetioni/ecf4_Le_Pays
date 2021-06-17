<?php
/*
* Template Name: front-page
*/
?>
<?php get_header(); ?>

<div class="intro text-center mt-5 mb-5 pb-5">
	<h1 style="font-family:'Source Serif Pro', serif; font-weight:500; font-size: 110px;">La Une !</h1>
	<p style="font-family: 'Arial'; font-size: 20px;">
		Bienvenue sur le site Du journal LE PAYS <br> représentant l'actualité sportive et
		culturelle de chez nous
	</p>
	<hr class="style2"> <br>
	<hr class="style3">
	</hr>
</div>

<div class="container pb-3">

	
	<?php $args = array(
		'posts_per_page' => 6,
		'order' => 'DESC'
	); ?>

	<?php $rp = new WP_Query( $args ); ?>
	<div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
		<?php if($rp->have_posts()) :
    			while($rp->have_posts()) : $rp->the_post(); ?>
		<div class="col">
			<div class="card h-100">
				<article class="post">
					<div class="card-body">
						<h4 class="card-title" style="font-family:'Source Serif Pro', serif; font-weight:bold;">
							<?php the_title(); ?></h4>
						<?php if ( has_post_thumbnail() ) { ?>
						<?php the_post_thumbnail(); ?>
						<p class="card-text post__meta" style="font-family:Arial;">
							Publié le <?php the_time(get_option('date_format')); ?>
							par <?php the_author(); ?> • <?php comments_number(); ?>
						</p>
						<?php	
					} ?>
						<div style="font-family:'Source Serif Pro', serif; font-size: 16px;">
							<?php the_excerpt(); ?>
						</div>
						<p>
							<a href="<?php the_permalink(); ?>" class="btn btn-outline-secondary post__link">Lire la suite</a>
						</p>
					</div>
				</article>
			</div>
		</div>

		<?php endwhile;
        ?>
		<?php wp_reset_postdata(); 
			endif; ?>
	</div>
</div>
<?php get_footer(); ?>

