<?php
get_header();
?>
<main>
    <section class="fv">
        <div class="fv-inner">
            <div class="catch-copy shadow">
                <h1>技術と人を、最適につなぐ。</h1>
                <p>高精度なスキルマッチと迅速な対応で、<br>現場にフィットするエンジニアを提供します。</p>
            </div>
            <a class="fv-cta cta-btn"href="">お問い合わせ</a>
        </div>
    </section>
    <section class="overview container">
        <h2 class="section-title">事業概要</h2>
        <div class="overview-contents">
            <div class="ov-content">
                <div class="ov-content-svg">
                    <img class="ov-svg settings" src="<?php echo esc_url(get_template_directory_uri() . '/img/settings.svg'); ?>" alt="">
                    <img class="ov-svg person" src="<?php echo esc_url(get_template_directory_uri() . '/img/person.svg'); ?>" alt="">
                </div>
                <div class="ov-content-text">
                    <h3>ITエンジニアの<br>　常駐支援(SES)</h3>
                    <p>Web・業務系・インフラなど、幅広い分野のエンジニアを必要な期間・スキルに応じて提供します。</p>
                </div>
            </div>
            <div class="ov-content">
                <div class="ov-content-svg">
                    <img class="ov-svg check" src="<?php echo esc_url(get_template_directory_uri() . '/img/check.svg'); ?>" alt="">
                    <img class="ov-svg folder" src="<?php echo esc_url(get_template_directory_uri() . '/img/folder.svg'); ?>" alt="">
                </div>
                <div class="ov-content-text">
                    <h3>プロジェクト単位<br>　での技術支援</h3>
                    <p>短期・中長期問わず、開発フェーズや課題に応じた人材をアサインします。</p>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();