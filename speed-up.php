<html>
  <head>
    <script>
      function loadSites() {
        setTimeout(() => {
          seite2();
        }, 1);
      }
      
      function seite2() {
        parent.info.location.href = "css/css.php";
        setTimeout(() => {
          seite3();
        }, 4500);
      }
      
      function seite3() {
        parent.info.location.href = "js/js.php";
      }
      
      window.onload = loadSites;
    </script>
  </head>
  <body>
    <div id="info"></div>
  </body>
</html>
