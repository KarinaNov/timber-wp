<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'description' ); ?> </title>
  <!-- <link rel="stylesheet" href="css/normilize.css"> -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/style.css"> -->
  <?php wp_head(); ?>


</head>
<body>

  <header class="header" style="background-image: url( <?php the_field('top__bg'); ?>);">
    <div class="header__inner">
      <img src="<?php bloginfo( 'template_url' ); ?> /assets/img/home.png" alt="">
      <div class="header__name">
        <?php the_field('header__name') ?>
      </div>
      <a class="phone" href="<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
      <div class="header__title">
      <?php the_field('header__title'); ?>
  </div>
  <div class="header__sale">
  <img src=" <?php the_field('header__sale'); ?>" alt="">
  </div>
</div>
  </header>