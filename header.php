<?php // ヘッダー用テンプレート | template for header. ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>"/>
  <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
  <meta name="description" content="<?php bloginfo('description');?>"/>
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_stylesheet_uri(); ?>"/>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <div id="wrapper"><!-- #wrapper -->
    <header><!-- header -->
      <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
    </header><!-- /header -->
