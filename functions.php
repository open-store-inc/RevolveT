<?php
//投稿にアイキャッチ画像を追加できるように設定
add_theme_support('post-thumbnails');

set_post_thumbnail_size(300, 300, true);

// カスタム投稿の設定 strat 長谷川
add_action('init', 'create_post_type');
function create_post_type()
{
  // ニュース投稿(日本語)
  register_post_type('shop', [ // 投稿タイプ名の定義
    'labels' => [
      'name' => '店舗情報', // 管理画面上で表示する投稿タイプ名
      'singular_name' => 'shop', // カスタム投稿の識別名
    ],
    'public'        => true,  // 投稿タイプをpublic
    'has_archive'   => true, // アーカイブ機能ON
    'show_in_rest'  => true,  // Gutenbergを有効にする
    'supports' => array('title', 'editor', 'thumbnail'), //アイキャッチ画像を有効にする
  ]);
}