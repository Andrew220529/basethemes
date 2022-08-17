<?php
/*
Template Name: サブページテンプレート
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(); ?>｜<?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
<?php wp_head(); ?>
<?php include(TEMPLATEPATH.'/js.php'); ?>
</head>

<body> 
<?php get_header(); ?>
<div class="center">
<?php if(have_posts()):while(have_posts()):the_post(); ?>
<?php the_content(); ?>
<?php endwhile;endif; ?>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
