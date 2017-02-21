<?php
include 'config.php';

$url_start = "https://api.telegram.org/bot";
$url_plus_token = $url_start.$bot_token;
$link_to_file ="http://thememaker-danielpetrica.rhcloud.com/app".$_POST["theme_link"];
$name_of_file = $_POST["theme_name"];
$url_for_request = $url_plus_token."/sendDocument";

/***********************************************/
$fileHandle = fopen($link_to_file, "rb");
  $fileContents = stream_get_contents($fileHandle);
  fclose($fileHandle);
$data = array('chat_id' => $channel_username, 'document' => $fileContents, 'caption' => 'This telegram theme has been made on http://thememaker.site/ by our users.', 'disable_notification' => true, );

  $params = array(
     'http' => array
     (
         'method' => 'POST',
         'header'=>"Content-Type: multipart/form-data\r\n",
         'content' => http_build_query($data)
     )
  );
  $url = "http://somesite.somecompany.com?chat_id=".$channel_username."&caption=This telegram theme has been made on http://thememaker.site/ by our users.";
  $result = file_get_contents($url, true, $context);
  echo $result;
  print_r ($result);
  print_r ($data);
  $ctx = stream_context_create($params);
  $fp = fopen($url, 'rb', false, $ctx);
  print_r($fp);
/*******************************************************/

/*
$url = $url_for_request;
$data = array('chat_id' => $channel_username, 'document' => $link_to_file, 'caption' => 'This telegram theme has been made on http://thememaker.site/ by our users.', 'disable_notification' => true, );

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: multipart/form-data\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
echo $context;
$result = file_get_contents($url, true, $context);
echo $result;
if ($result === FALSE) { }
var_dump($result);


function send_multipart_post_message($sync_or_async, $json1){
$url = "https://api.idolondemand.com/1/api/".$sync_or_async."/addtotextindex/v1";
// using WordPress custom functions to retrieve index and apikey
$index1 = wp_idolondemand_get_setting('index');
$apikey = wp_idolondemand_get_setting('apikey');
$eol = "\r\n";
$data = '';
$mime_boundary=md5(time());
//
$data .= '--' . $mime_boundary . $eol;
$data .= 'Content-Disposition: form-data; name="apikey"' . $eol . $eol;
$data .= $apikey . $eol;
$data .= '--' . $mime_boundary . $eol;
$data .= 'Content-Disposition: form-data; name="index"' . $eol . $eol;
$data .= $index1 . $eol;
$data .= '--' . $mime_boundary . $eol;
$data .= 'Content-Disposition: form-data; name="json"; filename="allposts.json"' . $eol;
$data .= 'Content-Type: application/json' . $eol;
$data .= 'Content-Transfer-Encoding: base64' . $eol . $eol;
$data .= base64_encode($json1) . $eol;
// alternatively use 8bit encoding
//$data .= 'Content-Transfer-Encoding: 8bit' . $eol . $eol;
//$data .= $json1 . $eol;
$data .= "--" . $mime_boundary . "--" . $eol . $eol;
$params = array('http' => array(
'method' => 'POST',
'header' => 'Content-Type: multipart/form-data; boundary=' . $mime_boundary,
'content' => $data
//'proxy' => 'tcp://localhost:8888' //use with Charles to catch http traffic
));
$ctx = stream_context_create($params);
$response = file_get_contents($url, FILE_TEXT, $ctx);
return $response;
}
*/
 ?>
