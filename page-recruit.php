<?php get_header(); ?>
<section class="hero">
    <div class="contact-hero-inner">
        <h1>採用情報</h1>
    </div>
</section>
<section class="recruit-catch">
    <h2>「作る」だけで終わらせない</h2>
    <h3>成果に責任を持つ仕事を一緒にしませんか</h3>
</section>
<section>
    <a class="recruit-row" href="<?php echo esc_url( home_url('/recruit/inexperienced/') ); ?>">
        <span class="recruit-row__text">未経験・新卒/Webエンジニア</span>
        <span class="recruit-row__btn">詳細</span>
    </a>

    <a class="recruit-row" href="<?php echo esc_url( home_url('/recruit/career/') ); ?>">
        <span class="recruit-row__text">キャリア/Webエンジニア</span>
        <span class="recruit-row__btn">詳細</span>
    </a>

</section>
<?php get_footer(); ?>