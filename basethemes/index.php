<?php
/*
Template Name: メインインデックスページ
*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(); ?>　<?php bloginfo('name'); ?></title>
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
	<h3><a href="<?php the_permalink(); ?>" class="blink"><?php the_title(); ?></a></h3>
	<div class="blogdetail"><?php the_date(); ?>　カテゴリー:<?php the_category(','); ?></div>
	<div class="mtop20">
		<p class="detail"><?php echo mb_substr(strip_tags($post-> post_content), 0, 200); ?></p>
		<div class="textright"><a href="<?php the_permalink(); ?>">続きを読む</a></div >
	</div>
</div>
<?php endwhile;endif; ?>
<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
</div>
<div class="width25float right"><?php include(TEMPLATEPATH.'/value_right.php'); ?></div>
</div>


<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>
