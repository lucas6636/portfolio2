<?php get_header() ;?>

<div class="hero">
    <h1>NEXT</h1>
    <div class="hero__contents inner">
        <div class="hero__meta">
            <div class="hero__wrapper">
                <div class="hero__title">
                    <h2><span class="bgextend bgLRextendTrigger"><span
                                class="bgappearTrigger">未来を創り続ける事業<br>今までにないテクノロジーを</span></span></h2>
                </div><!-- /hero__title -->
                <div class="hero__text">
                    <p>We have to keep making it forever.</p>
                    <p>As long as there is a future and events.</p>
                </div><!-- /hero__text -->
            </div><!-- /hero__wrapper -->
        </div><!-- /hero__meta -->
    </div><!-- /hero__contents -->
</div><!-- /hero -->

<main class="main">

    <section class="about">
        <div class="about__contents inner">
            <div class="about__info">
                <div class="about__title">
                    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">Who are we and what are
                                we going to do?</span></span></h2>
                </div><!-- /about__title -->
                <div class="about__text">
                    <p>私たちは『今』という状況を、『未来』で創らなければならない。やがて文化となり文明となり、その拡がりが社会貢献になるのが私たちの願いであり目的であります。</p>
                </div><!-- /about__text -->
            </div><!-- /about__info -->
            <div class="about__img"></div><!-- /about__img -->
        </div><!-- /about__contents -->
    </section><!-- /about -->

    <section class="vision">
        <div class="vision__contents inner">
            <div class="vision__title">
                <h2>
                    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">VISION</span></span></h2>
                </h2>
            </div><!-- /vision__title -->
            <div class="vision__items">
                <div class="vision__item">
                    <p>まず、『未来』とは何でしょうか？時間軸には『過去』『今』『未来』と三種類あります。私たちが目指すのは未来。ではその未来とはどのようなものなのか。</p>
                    <div class="vision__img"><img src="<?php echo get_template_directory_uri()?>/img/vision.jpg" alt="">
                    </div><!-- /vision__img -->
                </div><!-- /vision__item -->
                <div class="vision__item">
                    <p>社会全体を変える大きな動きも、誰かの心を動かす小さな変化も、その動的なものがあらゆる未来が創られます。今ある環境を、もっとこうなった意味もなく過ぎていくのはロスに近い。その為にアクションを起こす。そのアクションこそ次なるチャンスへのチケットを手に入れられる。
                    </p>
                    <div class="vision__img"><img src="<?php echo get_template_directory_uri()?>/img/vision1.jpg"
                            alt=""></div><!-- /vision__img -->
                </div><!-- /vision__item -->
                <div class="vision__item">
                    <p>しかし、それを手に入れるには並大抵ではありません。そこで私たちがその『未来』を創り上げるためのお手伝いをさせてほしいのです。</p>
                    <div class="vision__img"><img src="<?php echo get_template_directory_uri()?>/img/vision2.jpg"
                            alt=""></div><!-- /vision__img -->
                </div><!-- /vision__item -->
            </div><!-- /vision__text -->
            <div class="vision__link"><a href="<?php echo home_url('/vision'); ?>">VIEW MORE</a></div>
            <!-- /vision__link -->
        </div><!-- /vision__contents -->
    </section><!-- /vision -->

    <section class="business">
        <div class="business__contents inner">
            <div class="business__title">
                <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">BUSINESS</span></span></h2>
            </div><!-- /business__title -->
            <div class="business__items">
                <div class="business__item">
                    <div class="business__img"><img src="<?php echo get_template_directory_uri()?>/img/office.jpg"
                            alt=""></div><!-- /business__img -->
                    <p>創業時から『過去』『今』があるから『未来』がある。それを通じて社会に新たなる価値を生み出したいという信念をもとで活動し、様々なサービスを提供しています。</p>
                </div><!-- /business__item -->
                <div class="business__item">
                    <div class="business__img"><img src="<?php echo get_template_directory_uri()?>/img/office1.jpg"
                            alt=""></div><!-- /business__img -->
                    <p>例えば創業時からサービスを提供しておりますweb開発アプリケーション「PXE」(ピクシー)は今までにない直観的かつクリエイティブな開発できるとお客様からお喜びの言葉をいただいております。
                    </p>
                </div><!-- /business__item -->
                <div class="business__item">
                    <div class="business__img"><img src="<?php echo get_template_directory_uri()?>/img/office2.jpg"
                            alt=""></div><!-- /business__img -->
                    <p>私たちの価値あるサービスを提供できたことには大変感謝しております。しかしそれはあくまでも通過点でしかありません。私たちは更に『未来』を続けていきます。</p>
                </div><!-- /business__item -->
            </div><!-- /business__items -->
            <div class="business__link"><a href="<?php echo home_url('/business'); ?>">VIEW MORE</a></div>
            <!-- /business__link -->
        </div><!-- /business__contents -->
    </section><!-- /business -->

    <section class="news">
        <div class="news__contents inner">
            <div class="news__wrap">
                <div class="news__title">
                    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">NEWS</span></span></h2>
                </div><!-- /news__title -->
            </div><!-- /news__wrap -->
            <div class="news__wrapper">

                <?php if(have_posts()) :?>
                <?php while(have_posts())  : the_post(); ?>


                <article class="news__item" id="post-<?php the_ID(); ?>" <?php post_class('news__item'); ?>>
                    <a href="<?php the_permalink(); ?>">
                        <div class="news__img"><?php the_post_thumbnail('medium'); ?></div><!-- /news__img -->
                        <div class="news__meta">
                            <div class="news__info">
                                <time date_time="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d')?></time>
                                <?php the_category(); ?>
                            </div><!-- /news__info -->
                            <div class="news__desc">
                                <p><?php the_title(); ?></p>
                            </div><!-- /news__desc -->
                        </div><!-- /news__meta -->
                    </a>
                </article><!-- /news__item -->


                <?php endwhile; ?>
                <?php endif; ?>

            </div><!-- /news__wrapper -->
            <div class="news__link"><a href="<?php echo home_url('/news'); ?>">View more</a></div><!-- /news__link -->
        </div><!-- /news__contents -->
    </section><!-- /news -->

    <section class="career">
        <div class="career__contents inner">
            <div class="career__wrap">
                <div class="career__title">
                    <h2><span class="bgextend bgLRextendTrigger"><span class="bgappearTrigger">CAREER</span></span></h2>
                </div><!-- /career__title -->
            </div><!-- /career__wrap -->
            <div class="career__text">
                <p>「『未来』を創る為に様々な価値観が必要である」。私たちの『未来』を創り上げるためこのミッションのもとに集まり、それぞれの価値観や個性を出し合いながら活動しています。私たちのこれから、そして社会の為。これらを貢献するための心から共鳴し、ともに実践する仲間を求めています。
                </p>
            </div><!-- /career__text -->
            <div class="career__link"><a href="<?php echo home_url('/career'); ?>">View more</a></div>
            <!-- /career__link -->
        </div><!-- /career__contents -->
    </section><!-- /career -->

</main><!-- /main -->

<?php get_footer() ;?>