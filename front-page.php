<?php get_header(); ?>
<!-- メイン -->
<main>
    <!-- ここにメインが入ります -->
    <section class="cover">
        <img src="<?php echo get_template_directory_uri(); ?>/images/brian-stalter-arotxe540N4-unsplash.jpg" alt="truck01">
    </section>
    <section class="main-wrapper">
        <section class="top-main under-line">
            <div class="sub-container">
                <h2>株式会社オーロラ物流</h2>
                <P>私たちの会社は荷物を運ぶ会社です。荷物を通して人と人との『信頼』や『まごころ』も同時に運びます。<br>
                    『皆で考え、皆で取り組む』が当社のモットーです。<br>
                    全従業員が経営者としての感覚で顧客サービスや安全対策に取り組んでおります。<br>
                    『お客様の満足』が私たちの最高の喜びです。</P>
            </div>
        </section>
        <section class="new under-line">
            <div class="sub-container">
                <h2 id="newsinfo">更新情報・お知らせ</h2>
                <dl>
                    <?php $args = array(
                     'posts_per_page' => 3, //3件表示
                     'order'   => 'DESC', //記事の順番変更
                    );
                    $post_query = new WP_Query($args);
                    if ($post_query->have_posts()) : ?>

                        <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                                <div class="top-info">
                                    <dt><time class="news_time" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                    </dt>
                                    <dd>
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        <?php the_excerpt(); ?></a>
                                    </dd>
                                </div>
                        <?php endwhile; ?>
                            <?php else : ?>                
                                <!--  記事がない場合 -->
                                <p>記事が見つかりません。</p>

                    <?php endif; ?>
                </dl>
                <div class=" more-btn">
                    <a href="<?php echo home_url('/topic/') ?>" class="btn btn--grn btn--radius">もっと見る<i class="fas fa-arrow-down"></i></a>
                </div>
            </div>

        </section>

    </section>

</main>

<?php get_footer(); ?>