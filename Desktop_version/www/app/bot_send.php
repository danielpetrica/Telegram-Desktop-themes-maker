<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


<?php
include 'config.php';

$url_start = "https://api.telegram.org/bot";
$url_plus_token = $url_start.$bot_token;
$url_for_request = $url_plus_token."/sendDocument";

$link_to_file=$_POST["theme_link"];
$name_of_file = $_POST["theme_name"];
echo "Link created <br> Post:";

/***********************************************/
print_r($_POST);
/*********Apertura file, lettura contenuto************/
$fileHandle = fopen($link_to_file, "rb");
  $fileContents = stream_get_contents($fileHandle);
  fclose($fileHandle);
  echo "<br> file opened<br> ";
/*************Data creation and encoding***************************/
  $data = array('chat_id' => $channel_username, 'document' => $fileContents, 'caption' => urlencode('This telegram theme has been made on http://thememaker.site/ by our users.'), 'disable_notification' => true, );
  $params = array(
     'http' => array
     (
         'method' => 'POST',
         'header'=>"Content-Type: multipart/form-data\r\n",
         'content' =>$data,
     )
  );
  //print_r($data);
  echo "<br>";
  $ctx = stream_context_create($params);
  $result = fopen($url_for_request, 'rb', false, $ctx);
  print_r ($result);
  echo "<br>file sent? ";
  if (!$result) {
    echo "file not sent";
  };

 ?>
</body>
</html>
