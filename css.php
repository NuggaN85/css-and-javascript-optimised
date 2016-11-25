<?php 
$cssFiles = glob('*.css');
foreach($cssFiles as $cssFile){ 
$basename = basename($cssFile);
$gzname   = $basename.'.gz';
file_put_contents($gzname, gzencode( file_get_contents($basename),9));
} 
?>

<!DOCTYPE html>
<html>
<head></head>
<body>

<style>
h1 {font-family:arial;font-size:30px;font-weight:bold;color:#FFA500}
</style>

<center>
<br /><br /><br /><br /><br />
<h1>Done in stylesheet!</h1>
</center>

</body>
</html>