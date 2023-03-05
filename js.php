<?php 
$jsFiles = glob('*.js');
foreach($jsFiles as $jsFile){ 
  $basename = basename($jsFile);
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
      color: #006400;
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
