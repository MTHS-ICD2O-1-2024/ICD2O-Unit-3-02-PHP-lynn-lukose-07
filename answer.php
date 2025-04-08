<!DOCTYPE html>
<!-- ICS2O-Unit3-02-HTML-PHP -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Pyramid, PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Lynn Lukose" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link
    rel="stylesheet"
    href="https://code.getmdl.io/1.3.0/material.deep_purple-pink.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link
    rel="apple-touch-icon"
    sizes="180x180"
    href="./apple-touch-icon.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="32x32"
    href="./favicon-32x32.png" />
  <link
    rel="icon"
    type="image/png"
    sizes="16x16"
    href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of a right rectangular pyramid, PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Pyramid, PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="Image of pyramid with labeled sides" width="250" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          $length = $_GET["length"];
          $width = $_GET["width"];
          $height = $_GET["height"];

          // process
          $volume = ($length * $width * $height) / 3;

          // output
          echo "If the pyramid has a length of " . $length . "mm, a width of " . $width . "mm and a height of " . $height . "mm.";
          echo "<br />";
          echo "Then the volume of the pyramid will be " . $volume . " mm³.";
          ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>
