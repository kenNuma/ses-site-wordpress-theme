<?php get_header(); ?>
<section class="hero">
    <div class="contact-hero-inner">
        <h1>会社概要</h1>
        <p class="contact-hero-lead">
            NEXUS WORKSについて
        </p>
    </div>
</section>
<section class="company-spec">
    <h2 class="company-spec-title">企業情報</h2>
    <div class="conpany-spec__inner">

        <dl class="spec spec--company">
        <div class="spec__row">
            <dt>会社名</dt><dd>NEXUS WORKS</dd>
        </div>

        <div class="spec__row">
            <dt>設立日</dt><dd>20xx年xx月xx日</dd>
        </div>

        <div class="spec__row">
            <dt>代表者</dt><dd>xx xxxxx</dd>
        </div>

        <div class="spec__row">
            <dt>住所</dt>
            <dd>〒150-0001<br>東京都渋谷区神宮前0-0-0</dd>
        </div>

        <div class="spec__row">
            <dt>電話番号</dt><dd>03-1234-5678</dd>
        </div>

        <div class="spec__row">
            <dt>FAX</dt><dd>03-1234-5678</dd>
        </div>

        <div class="spec__row">
            <dt>資本金</dt><dd>1000万円</dd>
        </div>

        <div class="spec__row">
            <dt>売上高</dt>
            <dd>
            <ul class="spec__list">
                <li>2022年：〇〇万円</li>
                <li>2023年：〇〇万円</li>
                <li>2024年：〇〇万円</li>
                <li>2025年：〇〇万円</li>
                <li>2026年：〇〇万円</li>
            </ul>
            </dd>
        </div>

        <div class="spec__row">
            <dt>営業時間</dt><dd>9時30分 〜 18時30分</dd>
        </div>
        </dl>
    </div>
</section>
<section class="ceo">
    <h2 class="company-spec-title">代表者メッセージ</h2>
    <div class="job-spec__inner">

        <div class="ceo__grid">
        <!-- 左：テキストカード -->
            <div class="ceo__card">
                <h3 class="ceo__title">ご挨拶</h3>

                <p>
                私たちは、ただ「作る」だけではなく、<br>
                目的に合った形を一緒に考えることを大切にしています。
                </p>
                <p>
                Webサイトやシステムは、見た目が整っていれば良い
                ものではなく、使う人にとって分かりやすく、
                そして事業の成果につながってこそ価値があると
                考えています。
                </p>
                <p>
                そのため、最初のヒアリングでは、<br>
                ご要望だけでなく、背景や課題、目指している方向性
                まで丁寧にお聞きすることを心がけています。
                </p>

                <p>
                専門的な内容についても、できる限り分かりやすくお伝えし、
                安心して進めていただけるようなパートナーでありたいと考えています。
                </p>

                <p>
                小さなご相談からでも構いません。<br>
                お気軽にお問い合わせください。
                </p>

                <p class="ceo__sign">代表取締役　山田 太郎</p>
            </div>

            <!-- 右：画像 -->
            <figure class="ceo__photo">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/ceo.png'); ?>" alt="代表者写真">
            </figure>
        </div>

    </div>
</section>
<?php get_footer(); ?>