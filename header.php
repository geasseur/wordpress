<!DOCTYPE html>
<html>
  <head>
    <title><?php bloginfo('name'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
    <!-- leave this for stats -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
    <?php wp_get_archives('type=monthly&format=link'); ?> <?php //comments_popup_script(); <?php wp_head(); ?>
  </head>
  <body>
    <div id="page">
    <header>
      <img class="logoBlog" src="logo.png" alt="logo du blog">
      <h1>Blog de la tech tonique</h1>
      <nav class="navbar navbar-toggleable-md navbar-light" id="barreNavigation">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="col-12 navbar-nav mr-auto mb-3 row d-flex flex-nowrap justify-content-around align-items-center">
            <li><button type="button" class="btn btn-secondary mt-3 btn-lg" onclick="apparition(invisible)">Ordinateur</button></li>
            <li><button type="button" onclick="apparition2(invisible2)" class="btn btn-secondary mt-3 btn-lg">Smartphone</button></li>
            <li><button type="button" onclick="apparition3(invisible3)" class="btn btn-secondary mt-3 btn-lg">PC Portable</button></li>
            <li><button type="button" onclick="apparition4(invisible4)" class="btn btn-secondary mt-3 btn-lg">Casque VR</button></li>
          </ul>
        </div>
      </nav>
    </header>
