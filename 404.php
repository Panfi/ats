<?php get_header();?>
<div class="container">
    <div class="row">
        <?php if ( have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="page-header page-bg">
                    <div class="container">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
                <div class="container">
                    <?php the_content();?>
                </div>

            <?php endwhile; else: ?>


                <div class="page-header">
                    <br><br><br><br><h1>Oh no!</h1>
                </div>
                <br><br><p>Error 404 page not found!</p>

            <?php endif; ?>
            <br><br>
            </div>
        </div>
    </div>
</div>
<?php get_footer();?>