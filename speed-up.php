<!DOCTYPE html>
<html lang="fr">
<head>
  <script>
    function loadSites() {
      setTimeout(seite2, 1);
    }
    
    function seite2() {
      try {
        parent.info.location.href = "css/css.php";
        setTimeout(seite3, 4500);
      } catch (error) {
        console.error("Erreur lors du chargement de la page CSS :", error.message);
      }
    }
    
    function seite3() {
      try {
        parent.info.location.href = "js/js.php";
      } catch (error) {
        console.error("Erreur lors du chargement de la page JavaScript :", error.message);
      }
    }
    
    window.onload = loadSites;
  </script>
</head>
<body>
  <div id="info"></div>
</body>
</html>
