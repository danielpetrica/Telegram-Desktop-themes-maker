<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="description" content="From this page you can download your theme">
    <title>Result Theme</title>
  </head>
  <style media="screen">
    body {
      background: linear-gradient(166deg, #ff9900, #19a6a6);
    }
  </style>
  <body>That's your theme:
    <?php
    //header('Content-Type: text/plain');
    //print_r($_GET); comented to prevent injection.
    echo "\n\n";
    // Provides: <body text='black'>

    /*Colors Variables get*/
    $COLOR_GRAY = $_GET["secondary_color"];
    $main_color= $_GET["main_color"];
    $COLOR_GREEN_DARK = $_GET["accent_color_2"];
    $COLOR_GREEN_LIGHT = $_GET["green_light"];
    $COLOR_GREEN_RIPPLE_ACTIVE=$_GET["green_light_shadow"];
    $textcolor=$_GET["textcolor"];
    $msgInBg=$_GET["msgInBg"];
    $msgOutBg=$_GET["msgOutBg"];
    $msgFile1Bg=$_GET["msgFile1Bg"]

    /*The comented code down here existed just for testing purpose*/
    //echo "\n\n";
    //echo "Copy This inside your theme_name.tdesktop-theme file";
    include 'model.php';
    //echo $model_theme;
    //echo "\n\n";
    //echo "Stop copying before this line!";
    //echo "\n\n";
    // File Maker //
    /*
    created to prevent path injections
    */
    $theme_name = str_replace("/", "_badyou_", $_GET["name"]); //contains the good themename
    $dir = "themes/".$theme_name."/".$theme_name.".tdesktop-theme"; //theme directory
    /* IF theme folder doesn't exist it creates it */
    if (!file_exists("themes/".$theme_name))
          {
                mkdir("themes/".$theme_name, 0777, true);
          };

    $link=$dir;/*Get's the link to the theme for the download link*/

    /*open the theme, if a theme with the same name exists
    it cancel it and write the new theme created with model.php*/
    $fh = fopen($dir, 'w');
    fwrite($fh, $model_theme);
    fclose($fh);
    echo "<br>";
    //That's the file name the user saves on desktop.
    $file_name = $theme_name.".tdesktop-theme";
    /*end of php block*/?>
     <a href="download.php?link=<?php echo $link."&name=".$file_name; ?>"> Download it!</a>";
  </body>
</html>
