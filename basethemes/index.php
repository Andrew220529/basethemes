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
        <div class="l_blog">
            <div class="l_blog__body">
                <?php if(have_posts()):while(have_posts() ):the_post();?>
                <div class="l_blog__item">
                    <h3 class="title"><a href="<?php the_permalink(); ?>" class="blink"><?php the_title(); ?></a></h3>
                    <p class="detail">
                        <span><?php the_date(); ?></span>
                        <span><?php the_category(','); ?></span>
                    </p>
                    <div class="content">
                        <p><?php echo mb_substr(strip_tags($post-> post_content), 0, 200); ?></p>
                        <p class="more"><a href="<?php the_permalink(); ?>">続きを読む</a></p>
                    </div>
                </div>
                <?php endwhile;endif; ?>
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
            </div>
            <?php include(TEMPLATEPATH.'/blog_sidebar.php'); ?>
        </div>
		<?php get_footer(); ?>
		<?php wp_footer(); ?>
	</body>
</html>