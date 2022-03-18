<?php error_reporting (E_ALL ^ E_NOTICE); ?> 
<?php
    include 'mysql.php';

   if( $_GET["lable"] || $_GET["data"] ) {
      echo "label ". $_GET['lable']. "<br />";
      echo "data ". $_GET['data']. " ";
      
      exit();
   }
?>
<html>
   <body>
   
      <form action = "<?php $_PHP_SELF ?>" method = "GET">
         label: <input type = "text" name = "label" />
         data: <input type = "text" name = "data" />
         <input type = "submit" />
      </form>
      
   </body>
</html>
