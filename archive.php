<?php get_header(); ?>
<!-- メイン -->
<main>
    <div class="section-title">
        <div class="section-wrapper">
            <h2 class="sub-title"><span>トピック<span>-Topic-</span></span></h2>
        </div>
    </div>
    <section class="cover">
        <img src="<?php echo get_template_directory_uri(); ?>/images/24167646_s.jpg" alt="truck02">
    </section>
    <section class="main-wrapper">
        <?php if (have_posts()) : ?>
        <section class="new under-line">
            <div class="sub-container">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="top-info">
                            <a href="<?php the_permalink(); ?>">
                            <div><time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                            </div>
                            <div>
                                    <h3><?php the_title(); ?></h3>
                                <?php the_excerpt(); ?>
                            </div></a>
                    </div>
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