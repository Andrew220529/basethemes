<?php
/*
Template Name: トップページテンプレート
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php wp_head(); ?>
<?php include(TEMPLATEPATH.'/js.php'); ?>
</head>
<body>
<?php get_header(); ?>
<?php include(TEMPLATEPATH.'/value.php'); ?>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
