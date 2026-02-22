<?php
get_header();
?>
<main class="top">
    <section class="fv">
        <div class="fv-inner">
            <div class="catch-copy shadow">
                <h1>技術と人を、最適につなぐ。</h1>
                <p>高精度なスキルマッチと迅速な対応で、<br>現場にフィットするエンジニアを提供します。</p>
            </div>
            <a class="fv-cta cta-btn"href="">お問い合わせ</a>
        </div>
    </section>
    <section class="section overview container">
        <h2 class="section-title">事業概要</h2>
        <div class="overview-contents">
            <div class="ov-content">
                <div class="ov-content-svg">
                    <img class="ov-svg settings" src="<?php echo esc_url(get_template_directory_uri() . '/img/settings.svg'); ?>" alt="">
                    <img class="ov-svg person" src="<?php echo esc_url(get_template_directory_uri() . '/img/person.svg'); ?>" alt="">
                </div>
                <div class="ov-content-text">
                    <h3>ITエンジニアの<br class="responsive-br"><span class="responsive-br">　</span>常駐支援(SES)</h3>
                    <p>Web・業務系・インフラなど、幅広い分野のエンジニアを必要な期間・スキルに応じて提供します。</p>
                </div>
            </div>
            <div class="ov-content">
                <div class="ov-content-svg">
                    <img class="ov-svg check" src="<?php echo esc_url(get_template_directory_uri() . '/img/check.svg'); ?>" alt="">
                    <img class="ov-svg folder" src="<?php echo esc_url(get_template_directory_uri() . '/img/folder.svg'); ?>" alt="">
                </div>
                <div class="ov-content-text">
                    <h3>プロジェクト単位<br class="responsive-br"><span class="responsive-br">　</span>での技術支援</h3>
                    <p>短期・中長期問わず、開発フェーズや課題に応じた人材をアサインします。</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section strengths">
        <h2 class="section-title">強み</h2>
        <div class="strengths-bg">
            <div class="container">
                <ul class="strengths-contents">
                    <li data-num="01">
                        <h3>スキルマッチ<br class="responsive-br">精度の高さ</h3>
                        <p>技術スキルだけでなく、業務内容やチーム特性を踏まえた人材を提案します。</p>
                    </li>
                    <li data-num="02">
                        <h3>スピーディーな<br class="responsive-br">対応力</h3>
                        <p>最短即日での人材提案など、急な要件変更にも柔軟に対応します。</p>
                    </li>
                    <li data-num="03">
                        <h3>エンジニア<br class="responsive-br">フォロー体制</h3>
                        <p>定期的なフォローにより、安定した稼働と長期的な関係を実現します。</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section technology container">
        <h2 class="section-title">提供サービス</h2>
        <div class="technology-contents">
            <div class="front techno-item">
                <h3>フロントエンド開発</h3>
                <h4>・業務内容</h4>
                <p>UI実装、画面設計、改善対応</p>
                <h4>・対応技術</h4>
                <div class="swiper scroll">
                    <ul class="swiper-wrapper">
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_html.svg"); ?> alt="">
                            <p>HTML</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_css.svg"); ?> alt="">
                            <p>CSS</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_js.svg"); ?> alt="">
                            <p>JS</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/typescript.svg"); ?> alt="">
                            <p>TS</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_react.svg"); ?> alt="">
                            <p>React</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_vue.svg"); ?> alt="">
                            <p>Vue.js</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/nextdotjs.svg"); ?> alt="">
                            <p>Next.js</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="front techno-item">
                <h3>バックエンド開発</h3>
                <h4>・業務内容</h4>
                <p>API開発、DB設計、業務ロジック</p>
                <h4>・対応技術</h4>
                <div class="swiper scroll">
                    <ul class="swiper-wrapper">
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_php.svg"); ?> alt="">
                            <p>PHP</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_ralavel.svg"); ?> alt="">
                            <p>Laravel</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_python.svg"); ?> alt="">
                            <p>Python</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/dotnet.svg"); ?> alt="">
                            <p>.NET</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_fastapi.svg"); ?> alt="">
                            <p>FastAPI</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/Vector_mysql.svg"); ?> alt="">
                            <p>MySQL</p>
                        </li>
                        <li class="scroll-item swiper-slide">
                            <img src=<?php echo esc_url(get_template_directory_uri() . "/img/mariadb.svg"); ?> alt="">
                            <p>MariaDB</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="recruit container">
        <div class="recruit-contents">
            <div class="recruit-card">
                <h2>未経験から<br class="responsive-br"><span>エンジニア</span>へ</h2>
                <ul class="recruit-list">
                    <li>・安心の研修</li>
                    <li>・継続サポート</li>
                    <li>・キャリアアップ</li>
                </ul>
                <a href="#" class="recruit-btn cta-btn">
                    未経験向け採用を見る<br>
                    <p>※募集要項・働き方をご確認いただけます</p>
                </a>
            </div>
            <div class="recruit-card">
                <h2>経験を生かして<br class="responsive-br"><span>次のステージ</span>へ</h2>
                <ul class="recruit-list">
                    <li>・案件選択制</li>
                    <li>・技術環境</li>
                    <li>・正当評価</li>
                </ul>
                <a href="#" class="recruit-btn cta-btn">
                    経験者向け採用を見る<br>
                    <p>※募集要項・働き方をご確認いただけます</p>
                </a>
            </div>
        </div>
    </section>
</main>
<?php
get_footer();