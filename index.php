<html>
  <head>
    <title>PHP Test</title>
    <?php
    function unique($strings) {
     $uniqueStrings = array();
     foreach ($strings as $string) {
        foreach ($uniqueStrings as $uString) {
           if ($string == $uString) break;
        }
        if ($string != $uString)
           $uniqueStrings[] = $string;
     }
     return $uniqueStrings;
  }
      ?>
  </head>


  <body>
  Enter numbers: <br>
    <form method="POST">
      <input type="text" name="numbers" value=""/>
      <input type="submit" name="Submit" value="Submit"/>
    </form>





    <?php 




//              1 3  3 3
//$str = array(42, 24, 2, 4, 42, 24, 2, 4, 24, 42, 42, 24);
/*
if(isset($_POST['numbers'])){
  $str=preg_split("/[\s,]+/", $_POST['numbers']);
}
*/
if(isset($_POST['numbers'])){
  $str=preg_split("/[\s,]+/", $_POST['numbers']); // is an array

$uStr = unique($str);


  foreach ($uStr as $st)
   print ("$st <br>");
}






?> 

    <!--
    This script places a badge on your repl's full-browser view back to your repl's cover
    page. Try various colors for the theme: dark, light, red, orange, yellow, lime, green,
    teal, blue, blurple, magenta, pink!
    -->
    <script src="https://replit.com/public/js/replit-badge.js" theme="blue" defer></script> 
  </body>
</html>