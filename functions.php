<?php

add_action('wp_enqueue_scripts', 'add_styles');

register_nav_menus(array(
    "global" => "グローバルメニュー"
));

function add_styles() {

    //フォントの読み込み
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Noto+Sans+JP:wght@300;400;500;700&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'theme-style',
        get_stylesheet_uri(),
        array('google-fonts'),
        filemtime(get_stylesheet_directory() . '/style.css')
    );

    //CSSの読み込み
    // reset styleを登録
    wp_register_style(
        'reset_style',
        'https://unpkg.com/ress/dist/ress.min.css',
        array(),
        '1.0'
    );

    // main.cssを最後に実行
    wp_enqueue_style(
        'main_style',
        get_stylesheet_directory_uri() . '/css/main.css',
        array('reset_style'),
        '1.0'
    );

}


add_action('wp_enqueue_scripts', 'add_scripts');
function add_scripts()
{
    // デフォルトのjQueryを削除
    wp_deregister_script('jquery');


    //JSの読み込み

    //jqueryを登録
    wp_register_script(
        'jquery_script',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js',
        array(),
        '1.0'
    );

    // // main.jsを最後に実行
    // wp_enqueue_script(
    //     'main_script',
    //     get_template_directory_uri() . '/js/main.js',
    //     array('jquery_script'),
    //     // 'jquery_script' , 'slick-script' が読み込まれた後に'main_script'を読み込む
    //     '1.0',
    //     true
    // );

    // 通常scriptタグが<head>に置かれるが、wp_enqueue_scriptの5番目の引数をtrueにすることによって
    // </body>の前に配置される
}
?>