<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

    <meta name="format-detection" content="telephone=no">

    <title>Armour Coatings<?php if (isset($PageTitle)) echo " | " . $PageTitle; ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <meta name="description" content="">
    <meta name="keywords" content="">

    <link href="https://fonts.googleapis.com/css?family=Exo:700,800|Open+Sans:600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="inc/main.css?<?php echo filemtime('inc/main.css'); ?>">

    <script type="text/javascript" src="inc/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $("a[href^='http']").not("[href*='" + window.location.host + "']").prop('target','new');
        $("a[href$='.pdf']").prop('target', 'new');

        $('a.download').each(function(){ 
          $(this).prop({'href': 'download.php?f='+$(this).prop('href'), 'target': ''});
        });
      });
    </script>
  </head>
  <body>

    <header>
      <div class="site-width">
        <a href="."><img src="images/logo.png" alt="Armour Coatings Incorporated" id="logo"></a>

        <div>
          <div>(262) 502-1600</div>
          Germantown, WI
        </div>
      </div>
    </header>

    <nav>
      <ul class="site-width">
        <li><a href="services.php">Services</a></li>
        <li><a href="process.php">Process</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
