<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="description" content="From this page you can download your theme">
    <title>Result Theme</title>
  </head>
  <body>That's your theme:
    <?php
    echo "\n\n";
    /*Colors Variables get*/
    $color_gray = $_POST["color_gray"];
    $color_dark= $_POST["color_dark"];
    $color_green_dark = $_POST["color_green_dark"];
    $COLOR_GREEN_LIGHT = $_POST["color_green_light"];
    $COLOR_GREEN_RIPPLE_ACTIVE=$_POST["color_green_ripple_active"];
    $textcolor=$_POST["textcolor"];
    $msgInBg=$_POST["msgInBg"];
    $msgOutBg=$_POST["msgOutBg"];
    $msgFile1Bg=$_POST["msgFile1Bg"];

    include 'model.php';
    //echo $model_theme;
    //echo "\n\n";
    //echo "Stop copying before this line!";
    //echo "\n\n";
    // File Maker //
    /*
    created to prevent path injections
    */
    $theme_name = str_replace("/", "_badyou_", $_POST["name"]); //contains the good themename
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
