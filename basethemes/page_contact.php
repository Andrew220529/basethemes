<?php
/*
Template Name: お問い合わせページテンプレート
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
  <form action="/mail" method="POST">
    <script src="https://www.google.com/recaptcha/api.js?render=サイトキー"></script>
    <script>
    grecaptcha.ready(function() {
      grecaptcha.execute('サイトキー', {action: 'homepage'}).then(function(token) {
        var recaptchaResponse = document.getElementById('recaptchaResponse');
        recaptchaResponse.value = token;
      });
    });
    </script>
      <input type="hidden" name="recaptchaResponse" id="recaptchaResponse" /><br><br>
  </form>
  <?php get_footer(); ?>
  <?php wp_footer(); ?>
</body>
</html>
