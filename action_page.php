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
    echo "Copy This inside your theme_name.tdesktop-theme file";
    include 'model.php';
    echo $model_theme;
    echo "\n\n";
    echo "Stop copying before this line!";

    // File Maker //
    $theme_name = $_GET["name"]
    if (!file_exists("themes\\".$qname)) {
          mkdir("quotes\\".$qname, 0777, true);
    };

     ?>
  </body>
</html>
