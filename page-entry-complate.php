<?php
/* Template Name: Thanks - Entry */
get_header();
?>

<main class="thanks-page">
    <section class="thanks-hero">
        <div class="container thanks-card">
            <p class="thanks-badge">応募完了</p>
            <h1 class="thanks-title">エントリーありがとうございます。</h1>
            <p class="thanks-lead">
                内容を確認のうえ、担当者よりご連絡いたします。<br>
                通常、<strong>1〜3営業日以内</strong>に選考についてご案内します。
            </p>

            <dl class="thanks-info">
                <div class="thanks-row">
                    <dt>自動返信メール</dt>
                    <dd>ご入力のメールアドレス宛に自動返信メールを送信しました。</dd>
                </div>
                <div class="thanks-row">
                    <dt>次のステップ</dt>
                    <dd>書類確認後、面談日程の調整をご連絡します。</dd>
                </div>
            </dl>

            <div class="thanks-actions">
                <a class="cta-btn thanks-btn" href="<?php echo esc_url(home_url('/recruit/')); ?>">募集一覧へ戻る</a>
                <a class="thanks-link" href="<?php echo esc_url(home_url('/conpany/')); ?>">会社概要を見る</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>