<?php 
$cssFiles = glob('*.css');
foreach($cssFiles as $cssFile){ 
  $basename = basename($cssFile);
  $gzname   = $basename.'.gz';
  file_put_contents($gzname, gzencode(file_get_contents($basename),9));
} 
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    h1 {
      font-family: arial;
      font-size: 30px;
      font-weight: bold;
      color: #FFA500;
    }
  </style>
</head>
<body>
  <center>
    <br /><br /><br /><br /><br />
    <h1>Terminé.</h1>
  </center>
</body>
</html>
