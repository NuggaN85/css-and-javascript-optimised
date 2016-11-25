<HTML>
  <HEAD>
     <script type="text/javascript">
        loadSites();
        function loadSites(){
           setTimeout("seite2()",1);
        }
        function seite2(){
           parent.info.location.href = "css/css.php";
           setTimeout("seite3()",4500);
        }
      
       function seite3(){
           parent.info.location.href = "js/js.php";
        }
      
     </script>
  </HEAD>
  <frameset cols=100%>
     <frame src="about:blank" name="info">
  </frameset>
</HTML>