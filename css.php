<?php 
$cssFiles = glob('*.css');
foreach ($cssFiles as $cssFile) {
  if (is_file($cssFile)) {  // Vérifier si le chemin est bien un fichier
    $basename = basename($cssFile);
    $gzname = $basename . '.gz';
    $fileContent = file_get_contents($basename);

    if ($fileContent !== false) {  // Vérifier si la lecture du fichier a réussi
      $compressedContent = gzencode($fileContent, 9);
      if ($compressedContent !== false) {  // Vérifier si la compression a réussi
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
      font-family: Arial, sans-serif;
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
