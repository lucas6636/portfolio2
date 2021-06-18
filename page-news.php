<?php get_header() ;?>

    <main class="main">

        <div class="news-page">
            <div class="news-page__contents inner inner-s">
                <div class="news-page__title">
                    <h1><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">NEWS</span></span></h1>
                    <div class="border"></div><!-- /border -->
                </div><!-- /news-page__title -->
                <div class="news-page__wrap">
                    <div class="news-page__items">

                    <?php
                    global $post;
                    $args = array( 'posts_per_page' => 8 );
                    $myposts = get_posts( $args );
                    foreach( $myposts as $post ) {
                    setup_postdata($post);
                    ?>

                        <article class="news-page__item">
                            <div class="news-page__info">
                                <time date_time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d')?></time>
                                <?php the_category(); ?>
                            </div><!-- /news-page__info -->
                            <div class="news-page__text">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div><!-- /news-page__text -->
                        </article><!-- /news-page__item -->

                        <?php
                        }
                        wp_reset_postdata();
                        ?>

                    </div><!-- /news-page__items -->
                </div><!-- /news-page__wrap -->
            </div><!-- /news-page__contents -->
        </div><!-- /news-page -->

    </main><!-- /main -->
    
<?php get_footer() ;?>