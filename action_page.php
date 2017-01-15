<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <title>REsult Theme</title>
  </head>
  <style media="screen">
    body {
      background: linear-gradient(166deg, #ff9900, #19a6a6);
    }
  </style>
  <body>That's your theme:
    <?php
    //header('Content-Type: text/plain');
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
    //echo $model_theme;
    echo "\n\n";
    echo "Stop copying before this line!";
    echo "\n\n";
    // File Maker //
    $theme_name = $_GET["name"];
    $dir = "themes\\".$theme_name.".tdesktop-theme";
    if (!file_exists("themes\\".$theme_name))
          {
                mkdir("themes\\".$theme_name, 0777, true);
          };
    $link=$dir;
    $fh = fopen($dir, 'w');
    fwrite($fh, $model_theme);
    fclose($fh);
    echo "Open your file!: ";
    echo "<br>"; ?>
     <a href="download.php?link=<?php echo $link; ?>"> Download it!</a>";
  </body>
</html>
