<?php get_header(); ?>

<main class="news-single">
    <div class="news-single-inner">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <header class="news-single-header">
            <time class="news-single-date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
            <?php echo esc_html(get_the_date('Y.m.d')); ?>
            </time>
            <h1 class="news-single-title"><?php the_title(); ?></h1>
        </header>

        <div class="news-single-content">
            <?php the_content(); ?>
        </div>

        <div class="news-single-actions">
            <a class="news-back" href="<?php echo esc_url(home_url('/news/')); ?>">一覧に戻る</a>
        </div>

        <nav class="news-single-nav" aria-label="前後の記事">
            <div class="news-single-prev">
            <?php previous_post_link('%link', '&lt; 前のお知らせ'); ?>
            </div>
            <div class="news-single-next">
            <?php next_post_link('%link', '次のお知らせ &gt;'); ?>
            </div>
        </nav>

        <?php endwhile; endif; ?>

    </div>
</main>

<?php get_footer(); ?>