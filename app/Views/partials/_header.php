<!DOCTYPE html>
<html lang="<?= $activeLang->short_form ?>">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
  <title><?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?></title>
  <meta name="description" content="<?= escSls($description); ?>"/>
  <meta name="keywords" content="<?= escSls($keywords); ?>"/>
  <meta name="author" content="<?= escSls($baseSettings->application_name); ?>"/>
  <meta property="og:locale" content="en_US"/>
  <meta property="og:site_name" content="<?= escSls($baseSettings->application_name); ?>"/>
<?php if (isset($postType)): ?>
  <meta property="og:type" content="<?= $ogType; ?>"/>
  <meta property="og:title" content="<?= $ogTitle; ?>"/>
  <meta property="og:description" content="<?= escSls($description); ?>"/>
  <meta property="og:url" content="<?= currentFullURL(); ?>"/>
  <meta property="og:image" content="<?= $ogImage; ?>"/>
  <meta property="og:image:width" content="<?= $ogWidth; ?>"/>
  <meta property="og:image:height" content="<?= $ogHeight; ?>"/>
  <meta property="article:author" content="<?= $ogAuthor; ?>"/>
  <meta property="fb:app_id" content="<?= $generalSettings->facebook_app_id; ?>"/>
<?php foreach ($ogTags as $tag): ?>
  <meta property="article:tag" content="<?= escSls($tag->tag); ?>"/>
<?php endforeach; ?>
  <meta property="article:published_time" content="<?= $ogPublishedTime; ?>"/>
  <meta property="article:modified_time" content="<?= $ogModifiedTime; ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:site" content="@<?= escSls($baseSettings->application_name); ?>"/>
  <meta name="twitter:creator" content="@<?= escSls($ogCreator); ?>"/>
  <meta name="twitter:title" content="<?= escSls($post->title); ?>"/>
  <meta name="twitter:description" content="<?= escSls($description); ?>"/>
  <meta name="twitter:image" content="<?= $ogImage; ?>"/>
<?php else: ?>
  <meta property="og:image" content="<?= getLogo(); ?>"/>
  <meta property="og:image:width" content="240"/>
  <meta property="og:image:height" content="90"/>
  <meta property="og:type" content="website"/>
  <meta property="og:title" content="<?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?>"/>
  <meta property="og:description" content="<?= escSls($description); ?>"/>
  <meta property="og:url" content="<?= currentFullURL(); ?>"/>
  <meta property="fb:app_id" content="<?= $generalSettings->facebook_app_id; ?>"/>
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:site" content="@<?= escSls($baseSettings->application_name); ?>"/>
  <meta name="twitter:title" content="<?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?>"/>
  <meta name="twitter:description" content="<?= escSls($description); ?>"/>
<?php endif;
if ($generalSettings->pwa_status == 1): ?>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="<?= escSls($baseSettings->application_name); ?>">
  <meta name="msapplication-TileImage" content="<?= base_url('assets/img/pwa/192x192.png'); ?>">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="theme-color" content="#FFFFFF">
  <link rel="manifest" href="<?= base_url('manifest.json'); ?>">
  <link rel="apple-touch-icon" href="<?= base_url('assets/img/pwa/180x180.png'); ?>">
<?php endif; ?>
  <link rel="shortcut icon" href="<?= getFavicon(); ?>"/>
  <link rel="search" type="application/opensearchdescription+xml" title="Askbrn" href="opensearch.xml">
  <link rel="canonical" href="<?= currentFullURL(); ?>"/>
  <link rel="alternate" href="<?= currentFullURL(); ?>" hreflang="<?= $activeLang->language_code; ?>"/>
  <?= view('partials/_fonts'); ?>
  
  <link rel="preload" href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" as="style">
  <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
  <link rel="preload" href="<?= base_url('assets/vendor/font-icons/css/font-icon-2.0.min.css'); ?>" as="style">
  <link href="<?= base_url('assets/vendor/font-icons/css/font-icon-2.0.min.css'); ?>" rel="stylesheet"/>
  <link rel="preload" href="<?= base_url('assets/css/style-2.0.min.css'); ?>" as="style">
  <link href="<?= base_url('assets/css/style-2.0.min.css'); ?>" rel="stylesheet"/>
  <link rel="preload" href="<?= base_url('assets/css/plugins-2.0.css'); ?>" as="style">
  <link href="<?= base_url('assets/css/plugins-2.0.css'); ?>" rel="stylesheet"/>
<?php if ($darkMode == true) : ?>
  <link href="<?= base_url('assets/css/dark-2.0.css'); ?>" rel="stylesheet"/>
<?php endif; ?>
  <script>var rtl = false;</script>
<?php if ($activeLang->text_direction == "rtl"): ?>
  <link href="<?= base_url('assets/css/rtl-2.0.min.css'); ?>" rel="stylesheet"/>
  <script>var rtl = true;</script>
<?php endif; ?>
  <?= view('partials/_css_js_header'); ?>
  <?= $generalSettings->adsense_activation_code; ?>
  <?= $generalSettings->custom_header_codes; ?>
</head>
<body>
<header id="header">
    <?= view('nav/_nav_top'); ?>
    <div class="logo-banner">
        <div class="container">
            <div class="col-sm-12">
                <div class="row">
                    <div class="left">
                        <a href="<?= langBaseUrl(); ?>">
                            <img src="<?= $darkMode == 1 ? getLogoFooter() : getLogo(); ?>" alt="logo" class="logo" width="190" height="60">
                        </a>
                    </div>
                    <div class="right">
                        <div class="pull-right">
                            <?= view('partials/_ad_spaces', ['adSpace' => 'header', 'class' => '']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= view('nav/_nav_main'); ?>
    <div class="mobile-nav-container">
        <div class="nav-mobile-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="nav-mobile-header-container">
                        <div class="menu-icon">
                            <a href="javascript:void(0)" class="btn-open-mobile-nav"><span class="no-text">mobile menu</span><i class="icon-menu"></i></a>
                        </div>
                        <div class="mobile-logo">
                            <a href="<?= langBaseUrl(); ?>">
                                <img src="<?= $darkMode == 1 ? getLogoFooter() : getLogo(); ?>" alt="logo" class="logo" width="150" height="50">
                            </a>
                        </div>
                        <div class="mobile-search">
                            <a class="search-icon"><i class="icon-search"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div id="overlay_bg" class="overlay-bg"></div>
<div class="mobile-nav-search">
    <div class="search-form">
        <form action="<?= generateURL('search'); ?>" method="get">
            <input type="text" name="q" maxlength="300" pattern=".*\S+.*" class="form-control form-input" placeholder="<?= trans("placeholder_search"); ?>" required>
            <button class="btn btn-default"><i class="icon-search"></i></button>
        </form>
    </div>
</div>
<?= view('nav/_nav_mobile'); ?>
<?= view('partials/_modals'); ?>