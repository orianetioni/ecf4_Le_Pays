<?php
/*
Template Name: sport
*/
?>

<?php get_header(); ?>
<div class="container">
    <h1>Activité sportives</h1>
    <?php $args = array(
        'category_name' => 'activites-sportives',
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
                        <h4 class="card-title" style="font-weight: bold;">
                            <?php the_title(); ?></h4>
                            <h5 class="card-text"><small class="text-muted"><?php the_category(); ?></small></h5>
                            <?php if ( has_post_thumbnail() ) { ?>
                            <?php the_post_thumbnail(); ?>
                        <p class="card-text post__meta" style="font-family:Arial;">
                            Publié le <?php the_time(get_option('date_format')); ?>
                            par <?php the_author(); ?> 
                        </p>
                        <blockquote><?php the_tags(); ?></blockquote>
                        <?php   
                    } ?>
                        <div style="font-family:'Serif sans', serif; font-size: 18px;">
                            <?php echo substr(get_the_excerpt(), 0, 300) . "…"; ?>
                        </div>
                        <p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary post__link">Lire la suite</a>
                        </p>
                    </div>
                </article>
            </div>
        </div>
        <?php endwhile;
        ?>
        <?php   wp_reset_postdata(); // always always remember to reset postdata when using a custom query, very important
            endif; ?>
    </div>
</div>
<?php get_footer(); ?>