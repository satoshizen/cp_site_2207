<?php get_header(); ?>
<!-- メイン -->
<main>
    <section class="main-wrapper">
        <?php if (have_posts()) : ?>
        <section class="new under-line">
            <div class="sub-container">
                <div class="section-title">
                    <div class="section-wrapper">
                        <h2 class="sub-title"><span>トピック<span>-Topic-</span></span></h2>
                    </div>
                </div>
                <section class="cover">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/24167646_s.jpg" alt="truck02">
                </section>
                <dl>
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="top-info">
                            <a href="<?php the_permalink(); ?>">
                            <dt><time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                            </dt>
                            <dd>
                                    <?php the_title(); ?>
                                <?php the_excerpt(); ?></a>
                            </dd>
                    </div>
                </dl>
                        <?php endwhile; ?>
                            <?php wp_pagenavi(); ?>
                            <?php else : ?>                
                                <!--  記事がない場合 -->
                                <p>記事が見つかりません。</p>
            </div>

        </section>
        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>