<?php get_header() ;?>

<main class="main">

        <div class="single">
            <div class="single__contents inner inner-s">
                <div class="single__title">
                    <h1><?php the_title(); ?></h1>
                    <div class="single__info">
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d')?></time>
                        <?php the_category(); ?>
                    </div><!-- /single__info -->
                </div><!-- /single__title -->
                <div class="single__wrap">
                    <div class="single__content">
                        <?php the_content(); ?>
                    </div><!-- /single__content -->
                </div><!-- /single__wrap -->
                <div class="single__link">
                    <div class="single__prev"><?php previous_post_link(); ?></div><!-- /single__prev -->
                    <div class="single__next"><?php next_post_link(); ?></div><!-- /single__next -->
                </div><!-- /single__link -->
            </div><!-- /single__contents -->
        </div><!-- /single -->

    </main><!-- /main -->

<?php get_footer() ;?>