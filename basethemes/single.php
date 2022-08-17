<?php
/*
Template Name: シングル投稿テンプレート
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
<div class="center clearbox">
<div class="width70float">
<?php if(have_posts()):while(have_posts() ):the_post(); ?>
<div class="blog_tmp mbottom50">
	<h1><?php the_title(); ?></h1>
	<div class="blogdetail"><?php the_date(); ?>　カテゴリー:<?php the_category(','); ?></div>
	<div class="mtop20"><?php the_content(); ?></div>
</div>
<?php endwhile;endif; ?>
</div>
<div class="width25float right"><?php include(TEMPLATEPATH.'/value_right.php'); ?></div>
</div>
<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
