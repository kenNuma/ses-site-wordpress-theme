<?php get_header(); ?>

<section class="contact-hero">
    <div class="contact-hero-inner">
        <h1>お問い合わせ</h1>
        <p class="contact-hero-lead">
        新規のご相談・ご質問はこちらから<br>
        内容を確認のうえ、担当者より<br>
        ご連絡いたします。
        </p>
    </div>
</section>

<section class="contact-body">
    <p class="contact-info">
        新規開発、ご提案、ご相談など、お気軽にご連絡ください。<br>
        各種お問い合わせは、営業日（土日祝を除く）に順次回答させていただきます。<br>
        担当の者が確認次第のご連絡となるため、回答まで数日いただく場合がございます。<br>
        あらかじめご了承ください。
    </p>
    <div class="contact-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>

<?php get_footer(); ?>