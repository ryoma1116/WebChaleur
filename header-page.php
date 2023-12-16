<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div class="header-inner">
      <h1 class="header-logo">
        <a href="<?php echo esc_url(home_url("/")) ?>" class="header-logo__link">
          WebChaleur
        </a>
      </h1>
      <nav class="global-nav sp-none">
        <ul class="global-nav__list">
          <il class="global-nav__item">
            <a href="#" class="global-nav__link">Home</a>
          </il>
          <il class="global-nav__item">
            <a href="<?php echo esc_url(home_url("/#about")) ?>" class="global-nav__link">About</a>
          </il>
          <il class="global-nav__item">
            <a href="<?php echo esc_url(home_url("/#works")) ?>" class="global-nav__link">Works</a>
          </il>
          <il class="global-nav__item">
            <a href="<?php echo esc_url(home_url("/#service")) ?>" class="global-nav__link">Service</a>
          </il>
          <il class="global-nav__item">
            <a href="https://ryo-web.site/" target="_blank" class="global-nav__link">
              Blog
              <img src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/g-link.webp")); ?>" alt="外部リンクのアイコン" loading="lazy">
            </a>
          </il>
        </ul>
      </nav>
      <a href="#contact" class="header-contact sp-none">
        contact
      </a>
      <div class="hamburger js-hamburger sp-show">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <div class="drawer js-drawer">
        <div class="drawer-inner">
          <div class="drawer-nav">
            <ul class="drawer-nav__list">
              <li class="drawer-nav__item">
                <a href="#" class="drawer-nav__link">Home</a>
              </li>
              <li class="drawer-nav__item">
                <a href="#about" class="drawer-nav__link">About</a>
              </li>
              <li class="drawer-nav__item">
                <a href="#works" class="drawer-nav__link">Works</a>
              </li>
              <li class="drawer-nav__item">
                <a href="#service" class="drawer-nav__link">Service</a>
              </li>
              <li class="drawer-nav__item">
                <a href="https://ryo-web.site/" target="_blank" class="drawer-nav__link">
                  Blog
                  <img src="<?php echo esc_url(get_theme_file_uri("/assets/img/common/g-link-white.webp")); ?>" alt="外部リンクのアイコン" loading="lazy">
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </header>
  <div id="smooth-wrapper">
    <div id="smooth-content">
      <main class="main">