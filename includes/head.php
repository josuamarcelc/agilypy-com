<?php
$page_title       = $page_title       ?? 'AgilePy — Minimalist Frontend Python Micro-Framework';
$page_description = $page_description ?? 'AgilePy is a fast, minimal, and modular Python framework for building clean frontend views using Flask.';
$page_url         = $page_url         ?? 'https://agilepy.com/';
$page_keywords    = $page_keywords    ?? 'AgilePy, Python microframework, Flask frontend, Jinja2, modular framework, Lumen style, Python routing';
$current_page     = $current_page     ?? 'home';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($page_title) ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta name="keywords" content="<?= htmlspecialchars($page_keywords) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="author" content="AgilePy Team" />
  <link rel="canonical" href="<?= htmlspecialchars($page_url) ?>" />

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="/assets/favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="/assets/favicon/favicon.svg" />
  <link rel="shortcut icon" href="/assets/favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="AgilePy" />
  <link rel="manifest" href="/assets/favicon/site.webmanifest" />

  <!-- Open Graph -->
  <meta property="og:type" content="website" />
  <meta property="og:url" content="<?= htmlspecialchars($page_url) ?>" />
  <meta property="og:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta property="og:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta property="og:image" content="https://agilepy.com/assets/images/agilepy-preview.jpg" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:url" content="<?= htmlspecialchars($page_url) ?>" />
  <meta name="twitter:title" content="<?= htmlspecialchars($page_title) ?>" />
  <meta name="twitter:description" content="<?= htmlspecialchars($page_description) ?>" />
  <meta name="twitter:image" content="https://agilepy.com/assets/images/agilepy-preview.jpg" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">

  <!-- Theme -->
  <link rel="stylesheet" href="/assets/static/css/theme.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'].'/assets/static/css/theme.css') ?>" />

  <script async src="/agile-sw.js"></script>
</head>
<body>
