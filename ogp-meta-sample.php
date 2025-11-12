<!-- OGP & Twitter Card -->
<?php
// 共通設定
$ogp_title       = wp_title('|', false, 'right') . get_bloginfo('name');
$ogp_description = get_bloginfo('description');
$ogp_url         = (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$ogp_site_name   = get_bloginfo('name');
$ogp_locale      = 'ja_JP';

// og:image の指定（投稿にアイキャッチ画像がある場合はそれを優先）
if (has_post_thumbnail()) {
    $ogp_img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
    $ogp_img_url = $ogp_img[0];
} else {
    // デフォルト画像（サイト共通OGP画像）
    $ogp_img_url = get_template_directory_uri() . '/img/ogp.jpg';
}
?>
<meta property="og:site_name" content="<?php echo esc_attr($ogp_site_name); ?>" />
<meta property="og:url" content="<?php echo esc_url($ogp_url); ?>" />
<meta property="og:type" content="<?php echo (is_front_page() || is_home()) ? 'website' : 'article'; ?>" />
<meta property="og:title" content="<?php echo esc_attr($ogp_title); ?>" />
<meta property="og:description" content="<?php echo esc_attr($ogp_description); ?>" />
<meta property="og:image" content="<?php echo esc_url($ogp_img_url); ?>" />
<meta property="og:locale" content="<?php echo esc_attr($ogp_locale); ?>" />
<!-- <meta property="fb:app_id" content="AppID"> -->

<meta name="twitter:card" content="summary_large_image" />
<!-- <meta name="twitter:site" content="@YourAccount" /> -->
<meta name="twitter:title" content="<?php echo esc_attr($ogp_title); ?>" />
<meta name="twitter:description" content="<?php echo esc_attr($ogp_description); ?>" />
<meta name="twitter:image:src" content="<?php echo esc_url($ogp_img_url); ?>" />
