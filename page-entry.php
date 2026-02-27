<?php get_header(); ?>

<section class="hero">
    <div class="contact-hero-inner">
        <h1>エントリー</h1>
        <p class="contact-hero-lead">
        簡単な情報をご入力の上、エントリーしてください
        </p>
    </div>
</section>

<section class="contact-body">
    <p class="contact-info">
        こちらから連絡先と簡単な自己紹介を記入して送信してください。<br>
        追って採用担当からご連絡致します。
    </p>
    <div class="contact-container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</section>
<script>
    document.addEventListener('wpcf7mailsent', function() {
        location = '/contact/entry-complate/';
    }, false);
</script>
<?php get_footer(); ?>