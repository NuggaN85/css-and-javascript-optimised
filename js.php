<?php 
$jsFiles = glob('*.js');

foreach ($jsFiles as $jsFile) {
  if (is_file($jsFile)) {
    $basename = basename($jsFile);
    $gzname = $basename . '.gz';
    $fileContent = file_get_contents($jsFile);  // Utiliser $jsFile au lieu de $basename

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
      color: #006400;  // Modifier la couleur à la valeur hexadécimale appropriée
    }
  </style>
</head>
<body>
  <div style="text-align: center; padding-top: 100px;">
    <h1>Terminé.</h1>
  </div>
</body>
</html>
