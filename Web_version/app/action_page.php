<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/meshki/1.4.2/meshki.min.css">
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/meshki/1.4.2/meshki.min.js"></script>
    <meta charset="utf-8">
    <meta name="description" content="From this page you can download your theme">
    <title>Result Theme</title>
  </head>
  <body>That's your theme:
    <?php
    echo "\n\n";
    /*Colors Variables get*/
    include 'data_get.php';
    include 'model.php';

    /*
    created to prevent path injections
    */
    $theme_name = str_replace("/", "_badyou_", $_POST["name"]); //contains the good themename
    $dir = "themes/".$theme_name."/colors.tdesktop-theme"; //theme directory
    /* IF theme folder doesn't exist it creates it */
    if (!file_exists("themes/".$theme_name))
          {
                mkdir("themes/".$theme_name, 0777, true);
          };

    $link = $dir; /*Get's the link to the theme for the download link*/

    /*open the theme, if a theme with the same name exists
    it cancel it and write the new theme created with model.php*/
    $fh = fopen($dir, 'w');
    fwrite($fh, $model_theme);
    fclose($fh);
    echo "<br>";
    //That's the file name the user saves on desktop.
    $file_name = "colors.tdesktop-theme";

    $content = file_get_contents($img_link);

    $img_position = "themes/".$theme_name."/background.jpg";
    file_put_contents($img_position, $content);

    $zip = new ZipArchive();
    $filelink = "themes/".$theme_name."/".$theme_name."_zip_.tdesktop-theme";
    $thisdir= "themes/".$theme_name."/";

    if ($zip->open($filelink, ZipArchive::CREATE)!==TRUE) {
        exit("cannot open <$filename>\n");
    }
    $zip->addFile($thisdir . "colors.tdesktop-theme", "colors.tdesktop-theme");
    $zip->addFile($img_position, "background.jpg");
    echo "numfiles: " . $zip->numFiles . "\n";
    echo "<br>";
    echo "status:" . $zip->status . "\n";
    echo "<br>";
    //çprint_r($zip);
    $zip->close();


    /*end of php block*/?>
    <div>
      <h3>Simple Theme Preview</h3>
      <img src="<?php echo'image_model.php?'.http_build_query($_POST);?>" alt="Simple theme preview">
    </div>
    <table>
      <tr>
        <td>Download just the colors file. </td>
        <td><form action="download.php" method="post">
            <input type="hidden" name="link" value="<?php echo $link ?>">
            <input type="hidden" name="name" value="<?php echo $file_name?>">
            <input type="submit">
        </form>
      </tr>
      <tr>
        <td>Download the version containing the background image. </td>
        <td><form action="download.php" method="post">
            <input type="hidden" name="link" value="<?php echo $filelink?>">
            <input type="hidden" name="name" value="<?php echo $file_name?>">
            <input type="submit">
        </form>
      </tr>
    </table>
     <!--<p>
       Would you like to send it to <a href="https://t.me/themeslist">https://t.me/themeslist</a> instead? if yes click the following link.
       <form action="bot_send.php" method="post">
          <input type="hidden" name="theme_link" value="<?php echo $filelink;?>">
          <input type="hidden" name="theme_name" value="<?php echo $file_name;?>">
          <button type="submit" value="submit"> Submit to Telegram channel</button>
       </form>
     </p>-->
  </body>
</html>
