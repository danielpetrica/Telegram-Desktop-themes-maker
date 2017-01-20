<?php
$link=$_POST["link"];
$name=$_POST["name"];
// We'll be outputting a .tdesktop-theme
header('Content-Type: application/.tdesktop-theme');

// It will be called $theme_name.tdesktop-theme
header('Content-Disposition: attachment; filename= "'.$name.'"');

// The PDF source is in original.pdf
readfile($link);

 ?>
