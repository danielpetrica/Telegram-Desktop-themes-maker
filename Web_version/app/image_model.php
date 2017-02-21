<?php
// Generate dynamic svg values using query string info
include (data_get.php);
header("Content-type:image/svg+xml");
echo '<?xml version="1.0" encoding="utf-8" standalone="no"?>';
?>
<svg id="theme_preview" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg" height="480" viewBox="0 0 640 480" width="640" version="1.1" xmlns:cc="http://creativecommons.org/ns#" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/">
 <title id="title3728">Theme Preview</title>
 <metadata id="metadata3373">
  <rdf:RDF>
   <cc:Work rdf:about="">
    <dc:format>image/svg+xml</dc:format>
    <dc:type rdf:resource="http://purl.org/dc/dcmitype/StillImage"/>
    <dc:title>Theme Preview</dc:title>
    <dc:creator>
     <cc:Agent>
      <dc:title>Andrei-Daniel Petrica</dc:title>
     </cc:Agent>
    </dc:creator>

   </cc:Work>

  </rdf:RDF>
 </metadata>
 <g id="bg_layer">
   <?php
      echo "<image id=\"background\" width=\"640\" xlink-href=\"$img_link\" height=\"480\" y=\"0\" x=\"0\" preserveAspectRatio=\"none\"/>";
   ?>
 </g>
 <g id="front_layer">
   <?php
    print_r ("<rect id=\"title_bar\" fill-rule=\"evenodd\" height=\"50\" width=\"493.25\" y=\"0\" x=\"148.26\" stroke-width=\"0px\" fill=\"$color_gray\"/>");
   ?>
  <rect id="title_bar" fill-rule="evenodd" height="49.983" width="493.25" stroke="#000" y="-.16148" x="148.26" stroke-width="1.0175px" fill="<?php echo $color_gray?>"/>
  <rect id="input_bar" fill-rule="evenodd" height="49.99" width="490.58" stroke="#000" y="430.32" x="149.65" stroke-width=".73523px" fill="#00f"/>
  <rect id="search_bar" height="50" width="148.49" y="0" x="0" fill="#f60"/>
  <rect id="chat_generic" height="383.25" width="150" y="100" x="0" fill="#4d4d4d"/>
  <rect id="chat_active" height="49.497" width="150" y="50" x="0" fill="#f00"/>
  <rect id="search_input" height="30" width="100" y="10" x="45" fill="#666"/>
  <path id="profile_active " fill="#28170b" d="m45 75a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.828 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.654l-19.997 0.344z"/>
  <text id="menu_button" style="word-spacing:0px;letter-spacing:0px" xml:space="preserve" font-size="40px" y="40" x="5" font-family="sans-serif" line-height="125%" fill="#000000"><tspan id="tspan3439" x="5" y="40">=</tspan></text>
  <g fill="#ff0">
   <path id="profile_active -1" d="m45 125a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
   <path id="profile_active -2" d="m45 175a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
   <path id="profile_active -7" d="m45 225a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
   <path id="profile_active -0" d="m45 275a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
   <path id="profile_active -93" d="m45 325a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
   <path id="profile_active -6" d="m45 375a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
   <path id="profile_active " d="m45 430a20 20 0 0 1 -19.914 20 20 20 0 0 1 -20.085 -19.83 20 20 0 0 1 19.741 -20.17 20 20 0 0 1 20.255 19.66l-19.997 0.34z"/>
  </g>
  <g fill="#28170b">
   <rect id="msg_in" height="60" width="200" y="300" x="160"/>
   <rect id="msg_out2" height="60" width="220" y="220" x="420"/>
   <rect id="msg_in1" height="60" width="200" y="140" x="160"/>
   <rect id="msg_out3" height="60" width="220" y="360" x="420"/>
   <rect id="msg_out1" height="60" width="220" y="80" x="420"/>
  </g>
 </g>
</svg>
