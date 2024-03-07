<?php 
$cssFiles = glob('*.css');

foreach ($cssFiles as $cssFile) {
  if (is_file($cssFile)) {
    $basename = basename($cssFile);
    $gzname = $basename . '.gz';
    $fileContent = file_get_contents($cssFile);  // Utiliser $cssFile au lieu de $basename

    if ($fileContent !== false) {
      $compressedContent = gzencode($fileContent, 9);
      
      if ($compressedContent !== false) {
        file_put_contents($gzname, $compressedContent);
      } else {
        echo "Échec de la compression du fichier $basename.";
      }
    } else {
      echo "Échec de la lecture du fichier $basename.";
    }
  }
} 
?>

<!DOCTYPE html>
<html>
<head>
  <style>
    h1 {
      font-family: 'Arial', sans-serif;  // Ajouter des guillemets autour de 'Arial'
      font-size: 30px;
      font-weight: bold;
      color: #FFA500;
    }
  </style>
</head>
<body>
  <div style="text-align: center; padding-top: 100px;">
    <h1>Terminé.</h1>
  </div>
</body>
</html>
