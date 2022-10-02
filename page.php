<?php get_header(); ?>
<main>
    <?php if (have_posts()) : ?>
        <div class="section-title">
            <div class="section-wrapper">
                <h2 class="sub-title"><span><?php the_title(); ?><span>-<?php echo strtoupper($post->post_name); ?>-</span></span></h2>
            </div>
        </div>
        <section class="cover">
            <img src="<?php echo get_template_directory_uri(); ?>/images/24167646_s.jpg" alt="truck02">
        </section>
        <?php while (have_posts()) : the_post(); ?>
            <div class="main-wrapper">
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>
    <?php else : ?>

    <?php endif; ?>

</main>
<?php get_footer(); ?>