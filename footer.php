<footer class="footer">

    <div class="footer-inner container">

    <!-- 左 -->
    <div class="footer-left">
        <div class="footer-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/img/company-logo.svg" alt="logo">
        </div>
        <p>
        Web制作・システム開発<br>
        WordPress / EC / 業務システム
        </p>

        <p>
        〒150-0001<br>
        東京都渋谷区神宮前0-0-0
        </p>

        <p>
        TEL：03-1234-5678<br>
        MAIL：contact@nexusworks.jp
        </p>

        <p>営業時間：平日 10:00〜18:00</p>

        <a class="cta cta-btn" href="/contact">お問い合わせはこちら</a>
    </div>


    <!-- 右（お知らせ） -->
    <div class="footer-right">
        <h2>お知らせ</h2>

        <ul class="news-list">

        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5
        );
        $news = new WP_Query($args);
        if($news->have_posts()):
            while($news->have_posts()): $news->the_post();
        ?>

        <li class="news-item">
            <a href="<?php the_permalink(); ?>">
                <span class="date"><?php the_time('Y.m.d'); ?></span>
                <p><?php the_title(); ?></p>
            </a>
        </li>

        <?php endwhile; endif; wp_reset_postdata(); ?>

        </ul>

        <a class="more-btn" href="/news">もっとみる</a>
    </div>

    </div>

    <p class="copyright">© <?php echo date('Y'); ?> Kamura Design</p>

</footer>
<?php wp_footer(); ?>
</body>
</html>