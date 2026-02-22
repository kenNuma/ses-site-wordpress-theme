<?php
/* Template Name: News List */
get_header();
?>
<section class="hero">
    <div class="contact-hero-inner">
        <h1>お知らせ</h1>
    </div>
</section>
<main class="news-page">
    <div class="news-inner">

        <?php
        $paged = max(1, get_query_var('paged'));

        $news_query = new WP_Query([
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 5,  // ここは好きに
            'paged'          => $paged,
        ]);
        ?>

        <?php if ($news_query->have_posts()) : ?>
        <div class="news-list">
            <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
            <a class="news-item" href="<?php the_permalink(); ?>">
                <time class="news-date" datetime="<?php echo esc_attr(get_the_date('Y-m-d')); ?>">
                <?php echo esc_html(get_the_date('Y.m.d')); ?>
                </time>

                <h2 class="news-item-title"><?php the_title(); ?></h2>

                <span class="news-arrow" aria-hidden="true">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                    <path d="M9 18l6-6-6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                </span>
            </a>
            <?php endwhile; ?>
        </div>

        <?php
            $pagination = paginate_links([
            'total'     => $news_query->max_num_pages,
            'current'   => $paged,
            'mid_size'  => 1,
            'prev_text' => '&lt;',
            'next_text' => '&gt;',
            'type'      => 'list',
            ]);

            if ($pagination) :
        ?>
            <nav class="news-pagination" aria-label="ページネーション">
            <?php echo $pagination; ?>
            </nav>
        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

        <?php else : ?>
        <p class="news-empty">
            現在公開されているお知らせはありません。<br>
            最新情報は随時更新いたします。
        </p>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>