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
    <section class="strengths">
        <h2 class="section-title">強み</h2>
        <div class="strengths-bg">
            <div class="container">
                <ul class="strengths-contents">
                    <li data-num="01">
                        <h3>スキルマッチ<br>精度の高さ</h3>
                        <p>技術スキルだけでなく、業務内容やチーム特性を踏まえた人材を提案します。</p>
                    </li>
                    <li data-num="02">
                        <h3>スピーディーな<br>対応力</h3>
                        <p>最短即日での人材提案など、急な要件変更にも柔軟に対応します。</p>
                    </li>
                    <li data-num="03">
                        <h3>エンジニア<br>フォロー体制</h3>
                        <p>定期的なフォローにより、安定した稼働と長期的な関係を実現します。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();