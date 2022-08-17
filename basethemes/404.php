<?php
/*
Template Name: 404 テンプレート
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php wp_head(); ?>
<?php include(TEMPLATEPATH.'/js.php'); ?>
</head>

<body>
<div id="wrap">
<?php get_header(); ?>
<div class="center">
<div class="sub_value_right">
お探しのコンテンツは存在しません。 メニューから移動をお願いします。
</div>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</div>
</body>
</html>
