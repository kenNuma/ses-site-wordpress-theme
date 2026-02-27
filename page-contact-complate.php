<?php
/* Template Name: Thanks - Contact */
get_header();
?>

<main class="thanks-page">
    <section class="thanks-hero">
        <div class="container thanks-card">
            <p class="thanks-badge">送信完了</p>
            <h1 class="thanks-title">お問い合わせありがとうございます。</h1>
            <p class="thanks-lead">
                内容を確認のうえ、担当者よりご連絡いたします。<br>
                通常、<strong>1〜2営業日以内</strong>に返信いたします。
            </p>

            <dl class="thanks-info">
                <div class="thanks-row">
                    <dt>自動返信メール</dt>
                    <dd>ご入力のメールアドレス宛に自動返信メールを送信しました。</dd>
                </div>
                <div class="thanks-row">
                    <dt>届かない場合</dt>
                    <dd>迷惑メールフォルダをご確認のうえ、受信設定をご確認ください。</dd>
                </div>
            </dl>

            <div class="thanks-actions">
                <a class="cta-btn thanks-btn" href="<?php echo esc_url(home_url('/')); ?>">トップへ戻る</a>
                <a class="thanks-link" href="<?php echo esc_url(home_url('/news/')); ?>">お知らせを見る</a>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>