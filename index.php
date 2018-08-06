<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width">

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
        <li><a href="#">Services</a></li>
        <li><a href="#">Process</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    <div id="hero">
      <div class="text">
        Milwaukee's leader in <div>powder coating technology</div>
        <a href="#">Request a Quote</a>
      </div>
    </div>

    <div id="home-about">
      <div class="site-width">
        Armour Coatings is a multi-metal job shop custom powder coater and sandblaster. We are located in Germantown, Wisconsin, about 10 minutes north of Milwaukee. We operate from a 45,000 sq. ft. facility that employs the latest technologies for part cleaning, powder delivery and curing of finishes.
      </div>
    </div>

    <div id="home-services">
      <div class="site-width">
        <h1>Services</h1>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut urna in erat iaculis ullamcorper nec nec nisi. Nulla facilisi. Proin convallis nibh ac augue tempor ultricies. Curabitur ut urna in erat iaculis ullamcorper nec nec nisi. Nulla facilisi.
      </div>
    </div>

    <div id="home-industries">
      <div class="site-width">
        <h1>Industries Served</h1>

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ut urna in erat iaculis ullamcorper nec nec nisi. Nulla facilisi. Proin convallis nibh ac augue tempor ultricies. Curabitur ut urna in erat iaculis ullamcorper nec nec nisi. Nulla facilisi.
      </div>
    </div>

    <footer>
      <div class="site-width">
        <a href="."><img src="images/logo-footer.png" alt="Armour Coatings Incorporated" id="logo-footer"></a>

        <div>
          Give us a call!
          <div>(262) 502-1600</div>
        </div>
      </div>
    </footer>

    <div id="copyright">
      &copy; <?php echo date("Y"); ?> Armour Coatings, Incorporated
    </div>

  </body>
</html>