<?php get_header(); ?>
<!-- メイン -->
    <main>
        <!-- ここにメインが入ります -->
        <?php if (have_posts()) : ?>
            <section class="section-title">
                <div class="section-wrapper">
                    <h2 class="sub-title"><span>トピック<span>-Topic-</span></span></h2>
                </div>
            </section>
            <section class="cover">
                <img src="<?php echo get_template_directory_uri(); ?>/images/24217177_m.jpg" alt="truck03">
            </section>
                <?php while (have_posts()) : the_post(); ?>
                <div class="main-wrapper">
                    <section class="topic0403 under-line">
                        <a href="<?php the_permalink(); ?>">
                        <div class="sub-container">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                    </section>
                <?php endwhile; ?>
                    <?php wp_pagenavi(); ?>
                <?php else : ?>

        <?php endif; ?>
                </div>
    </main>

<?php get_footer(); ?>