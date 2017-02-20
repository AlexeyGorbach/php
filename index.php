<?php
  function printTree($space,$file) {
	  global $sapi;
	  if ($sapi=='cli')
		  echo ($space.$file."\n");
	  else echo $space.$file."<br />";
  }
  function showTree($folder, $space) {
    $files = scandir($folder);
    foreach($files as $file) {
      if (($file == '.') || ($file == '..')) continue;
      $f0 = $folder.'/'.$file;
	  if (is_link($f0)) {
		echo (readlink($f0);
      }
	 
      else printTree($space,$file);
    }
  }
  $sapi = php_sapi_name();
  showTree("./", "");
?>