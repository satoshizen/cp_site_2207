

    
    <div class="contents-button">
        
        <?php wp_nav_menu(array(
            'container' => 'nav',
            'container_class' => 'contents-nav',
            'items_wrap' => '<ul id="%1$s" class="%2$s contents-nav-list">%3$s</ul>',
            'menu' => 'main_nav'
        )); ?>
    </div>
    <!-- フッター -->
    <footer class="footer">
    <!-- ここにフッターが入ります -->
    <small>Copyright🄫2022株式会社オーロラ物流<br>All Right Reserved.</small>
</footer>

        <!-- JS -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
        <!--自作のJS-->
        <!-- <script src="js/g-nav.js"></script> -->

        <!-- <script src="./js/header.js"></script> -->

    <?php wp_footer(); ?>
    </body>
</html>