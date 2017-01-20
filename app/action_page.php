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
    $color_gray = $_POST["color_gray"];
    $color_dark= $_POST["color_dark"];
    $color_green_dark = $_POST["color_green_dark"];
    $color_green_light = $_POST["color_green_light"];
    $color_green_ripple_active=$_POST["color_green_ripple_active"];
    $textcolor=$_POST["textcolor"];
    $msgInBg=$_POST["msgInBg"];
    $msgOutBg=$_POST["msgOutBg"];
    $msgFile1Bg=$_POST["msgFile1Bg"];
    $dialogsBgActive=$_POST["dialogsBgActive"];
    $menuBg = $_POST["menuBg"];
    $img_link = $_POST["img_input_image"];
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


  /*  $file_parts = pathinfo($img_link);
    switch($file_parts['extension'])
    {
        case "jpg":
        echo "<p>Inserted a jpg file</p>";
        $img_position = "themes/".$theme_name."/background.jpg";
        $f_extension = ".jpg";
        break;

        case "jpeg":
        echo "<p>Inserted a jpeg file</p>";
        $img_position = "themes/".$theme_name."/background.jpeg";
        $f_extension = ".jpeg";
        break;
        case "png":
        echo "<p>Inserted a png file</p>";
        $img_position = "themes/".$theme_name."/background.png";
        $f_extension = ".png";
        break;
        case "gif":
        echo "<p>Inserted a gif file</p>";
        $img_position = "themes/".$theme_name."/background.gif";
        $f_extension = ".gif";
        break;

        case "": // Handle file extension for files ending in '.'
        echo "empty file extension \n\n";
        break;
        case NULL: // Handle no file extension
        echo "null imput\n\n";
        break;
        default
        echo "Default option \n\n";
    };    */


/*
          // Code assumes necessary extensions are installed and a successful file upload has already occurred

          // Create a FileInfo object
          $finfo = new FileInfo(null, '/path/to/magic/file');

          // Determine the MIME type of the uploaded file
          switch ($finfo->file($_FILES['image']['tmp_name'], FILEINFO_MIME)) {
              case 'image/jpg':
                  $im = imagecreatefromjpeg($_FILES['image']['tmp_name']);
              break;

              case 'image/png':
                  $im = imagecreatefrompng($_FILES['image']['tmp_name']);
              break;

              case 'image/gif':
                  $im = imagecreatefromgif($_FILES['image']['tmp_name']);
              break;
          }
*/

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
    print_r($zip);
    $zip->close();


    /*end of php block*/?>
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
