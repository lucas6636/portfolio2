<?php get_header() ;?>

<main class="main">

        <div class="news-page">
            <div class="news-page__contents inner">
                <div class="news-page__title">
                    <h1><?php the_title(); ?></h1>
                </div><!-- /news-page__title -->
                <div class="news-page__wrap">
                    <div class="news__content">
                        <?php the_content(); ?>
                    </div><!-- /news__content -->
                </div><!-- /news-page__wrap -->
            </div><!-- /news-page__contents -->
        </div><!-- /news-page -->

    </main><!-- /main -->

<?php get_footer() ;?>