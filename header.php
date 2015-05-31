<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title('|', true, 'right'); ?>
      <?php bloginfo('name'); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>
    <main class="cd-main-content">
    <div class="header">
      <div class="container">
          <div class="col-lg-8">
            <a class="" href="<?php bloginfo('url'); ?>">
              <img class="header-logo" src="<?php bloginfo('template_directory');?>/images/logo-header.png" alt="<?php bloginfo('name'); ?>" />
              <p class="header-title"><?php bloginfo('name'); ?></p>
              <p class="header-tagline"><?php bloginfo('description'); ?></p>
            </a>
          </div>
          <a href="#0" class="cd-btn hidden-lg hidden-md"><span class="glyphicon glyphicon-option-vertical" aria-hidden="true"></span></a>
      </div>

    </div>
