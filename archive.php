<?php get_header() ;?>
    <main class="main">

        <div class="news-page">
            <div class="news-page__contents inner">
                <div class="news-page__title">
                    <h1>NEWS</h1>
                </div><!-- /news-page__title -->
                <div class="news-page__wrap">
                    <div class="news-page__items">

                    <?php if(have_posts()) :?>
                    <?php while(have_posts())  : the_post(); ?>
                        <article class="news-page__item">
                            <div class="news-page__info">
                                <time date_time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日')?></time>
                                <?php the_category(); ?>
                            </div><!-- /news-page__info -->
                            <div class="news-page__text">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </div><!-- /news-page__text -->
                        </article><!-- /news-page__item -->
                    <?php endwhile; ?>
                    <?php endif; ?>


                    </div><!-- /news-page__items -->
                </div><!-- /news-page__wrap -->
            </div><!-- /news-page__contents -->
        </div><!-- /news-page -->

    </main><!-- /main -->
    <?php get_footer() ;?>