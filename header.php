<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ページの説明が入ります">

    <!-- CSS -->

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css"> -->

    <!-- <link rel="stylesheet" href="./css/style.css"> -->

    <!-- FontAwesome -->
    <!-- <script src="https://kit.fontawesome.com/33d01a83f0.js" crossorigin="anonymous"></script> -->

    <?php wp_head(); ?>

</head>

<body>


    <!-- ヘッダー -->
    <header class="header">
        <!-- ここにヘッダーが入ります -->
        <div class="header-inner <?php if (!is_front_page()) {
                                        echo "scrolled";
                                    } ?>">
            <div class="openbtn"><span></span><span></span><span></span></div>
            <?php wp_nav_menu(array(
                'container' => 'nav',
                'container_id' => 'g-nav',
                'items_wrap' => '<div id="%1$s g-nav-list" class="%2$s"><ul>%3$s</ul></div>',
                'menu' => 'global-navigation'
            )); ?>

            <?php wp_nav_menu(array(
                'container' => 'nav',
                'container_class' => 'pc-nav',
                'items_wrap' => '<ul id="%1$s" class="%2$s pc-nav-list">%3$s</ul>',
                'menu' => 'global-navigation'
            )); ?>

        </div>
        <section class="header-logo">
            <img class="logo image" src="<?php echo get_template_directory_uri(); ?>/images/aurora_logo.png" alt="オーロラ物流">
        </section>
    </header>
