<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
  <link rel="shortcut icon" href="<?php echo url('assets/images/favicon.ico') ?>">
  
  <?php echo js('responsive-nav.js', $async = true) ?>

  <?php echo css('assets/css/responsive-nav.css') ?>
  <?php echo css('assets/css/main.css') ?>
  <?php echo css('assets/css/mine.css') ?>

  <script>var nav = responsiveNav(".nav-collapse");</script>

</head>
<body>

  <header class="header cf" role="banner">
    <a class="logo" href="<?php echo url() ?>">
      <img src="<?php echo url('assets/images/logo.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
    </a>
    <?php snippet('menu') ?>
  </header>