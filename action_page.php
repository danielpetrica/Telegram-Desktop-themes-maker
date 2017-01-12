<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>REsult Theme</title>
  </head>
  <body>That's your theme:
    <?php
    header('Content-Type: text/plain');
    print_r($_GET);
    echo "\n\n";
    $COLOR_GRAY = $_GET["main_color"];
    $COLOR_DARK = $_GET["accent_color"];
    $COLOR_GREEN_DARK = $_GET["accent_color_2"];
    $COLOR_GREEN_LIGHT = $_GET["green_light"];
    $COLOR_GREEN_RIPPLE_ACTIVE=$_GET["green_light_shadow"];
    echo "\n\n";

    include 'model.php';
    echo $model_theme;
     ?>
  </body>
</html>
