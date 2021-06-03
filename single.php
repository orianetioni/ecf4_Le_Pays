<?php get_header(); ?>
<div class="container">
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <div class="card mb-3" style="margin: 5% 0 5% 0; padding: 5%;">
        <div class="row g-0">

            <div class="col-md-4">
                <img class="card-img-top img-article" style="max-width: 540px; height:auto;"
                    src="<?php the_post_thumbnail();?>">
            </div>
            

            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <small class="post__meta text-muted">
                        Publié le <?php the_time( 'j F Y à H:i' );?>
                        par <?php the_author(); ?>
                    </small>
                    <p class="card-text">
                        <small class="text-muted"><?php the_category() ?></small>
                        <small class="text-muted"><?php the_tags() ?></small>
                    </p>
                </div>
            </div>

        </div>
        <hr>
        <div>
            <div class="content">
                <?php the_excerpt(); ?>
            </div>
        </div>

    </div>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>