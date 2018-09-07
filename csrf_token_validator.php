<?php

$result = false;
if(isset($_POST['submit'])){
  if(isset($_COOKIE['session_id']) && isset($_COOKIE['csrf_token']) && isset($_POST['csrf_token'])){

    $file = fopen("data/file.txt", "r") or die("Unable to open file containing csrf token");
    while (!feof($file)) {
      $session_id = chop(fgets($file));
      if($session_id == $_COOKIE['session_id']){
        if($_COOKIE['csrf_token'] == $_POST['csrf_token']){
          fclose($file);
    		  $result = true;
          return;
        }
      }
    }

		fclose($file);
  }
}

?>
