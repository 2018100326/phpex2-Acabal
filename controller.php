<!DOCTYPE html>
<html>
<head></head>
<body>
   <?php 
      include 'functions.class.php';
      $functions = new Functions;

      
      echo '<span style="color: black; font-size: 30px; <br> ">' .$functions -> findMaxRange($_GET['first'],$_GET['second']); 
      echo "<br/>";
      echo "<br/>";
      echo "<br>" . $functions -> countOnes($_GET['integer']);
      echo "<br/>";
      echo "<br/>";
      echo "<br>" . $functions -> twoParts($_GET['path1'],$_GET['path2']);
      echo "<br/>";
      echo "<br/>";
      echo "<br>" . $functions -> isSastryNumber($_GET['test']);

   ?>

</body>