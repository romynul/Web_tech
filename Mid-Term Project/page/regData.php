<?php


echo "<hr><h1>File Read Output from Text File</h1><hr>";

$my_file = 'ClientData.txt';
$handle = fopen($my_file, 'r');

while(!feof($handle)) {
  echo fgets($handle) . "<br>";
}
fclose($handle);




echo "File Read successful! <a href='loginForm.php'>go back</a>";


	
    


?>