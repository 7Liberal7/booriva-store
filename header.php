<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php bloginfo( 'description' ); ?></title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/slick.css">
  <link rel="stylesheet" href="css/jquery.fancybox.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400,600;1,700&family=Sunshiney&family=Waiting+for+the+Sunrise&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="header__inner">
        <div class="header__top">
          <div class="header__location">
            <img class="header__location-img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/header__location.png" alt="location">
          </div>
          <div class="header__location">
            <p class="header__location-text"><?php the_field('address') ?></p>
          </div>
          <div class="header__phone">
            <img class="header__phone__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/header__phone.png" alt="phone">
          </div>
          <div class="header__phone">
            <a href="tel:+380638433471" class="header__phone-link">+38 063 843 34 71</a>
          </div>
          <div class="header__title">
            <img class="header__title__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/header__logo.svg" alt="booriva">
          </div>
          <div class="header__search">
            <a href="#" class="header__search">
              <img class="header__search__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/header__search.png" alt="search">
            </a>
          </div>
          <div class="header__search">
            <p class="header__search__text">Поиск</p>
          </div>
          <div class="header__love">
            <a href="#" class="header__love">
              <img class="header__love__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/header__love.png" alt="love">
            </a>
          </div>
          <div class="header__shop">
            <a href="#" class="header__shop">
              <img class="header__shop__img" src="<?php bloginfo( 'template_url' ); ?>/assets/images/header__shop.png" alt="shop">
            </a>
          </div>
        </div>
        <div class="header__bottom">
          <nav class="header__list__links">
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link') ?></a></ul>
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link1') ?></a></ul>
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link2') ?></a></ul>
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link3') ?></a></ul>
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link4') ?></a></ul>
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link5') ?></a></ul>
            <ul class="header-item-link"><a class="header-link" href="#"><?php the_field('header-link6') ?></a></ul>
            <ul class="header-item-link__last"><a class="header-link" href="#"><?php the_field('header-link7') ?></a></ul>
          </nav>
        </div>
      </div>
    </div>
  </header>