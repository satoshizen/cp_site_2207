<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>トップページ</title>
        <meta name="description" content="ページの説明が入ります">

        <!-- CSS -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

        <link rel="stylesheet" href="./css/style.css">
        
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/33d01a83f0.js" crossorigin="anonymous"></script>

        <? wp_head(); ?>

    </head>
    <body>


        <!-- ヘッダー -->
        <header class="header">
            <!-- ここにヘッダーが入ります -->
            <div class="header-inner">
                <div class="openbtn"><span></span><span></span><span></span></div>
                <nav id="g-nav">
                    <div id="g-nav-list"><!--ナビの数が増えた場合縦スクロールするためのdiv※不要なら削除-->
                        <ul>
                            <li><a href="index.html">HOME</a></li>  
                            <li><a href="company.html">COMPANY</a></li>  
                            <li><a href="service.html">SERVICE</a></li>  
                            <li><a href="safety.html">SAFETY</a></li>
                            <li><a href="recruit.html">RECRUIT</a></li>
                            <li><a href="topic.html">TOPIC</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </div>
                </nav>
                <nav class="pc-nav">
                    <ul class="pc-nav-list">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="company.html">COMPANY</a></li>
                        <li><a href="service.html">SERVICE</a></li>
                        <li><a href="safety.html">SAFETY</a></li>
                        <li><a href="recruit.html">RECRUIT</a></li>
                        <li><a href="topic.html">TOPIC</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </nav>                   
            </div>
            <section class="header-logo">
                <img class="logo image" src="./images/オーロラ物流logo.png" alt="オーロラ物流">
            </section>
        </header>

    