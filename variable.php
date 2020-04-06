<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Variable</title>
  </head>


  <body>


     <h1>Variable<h1>
<!-- $가 붙으면 무조건 변수 -->
<?php
$a = 1;
  echo $a + 1;
 ?>

 <?php

 $name = "\"Found\"";
 echo "Lorem ipsum dolor sit amet, consectetur adipisicing elit,
 sed do eiusmod tempor incididunt ut labore et ".$name." dolore magna
 aliqua. Ut enim ad ".$name." minim veniam, quis nostrud exercitation
 ullamco laboris nisi ut aliquip ex ea commodo consequat.
 Duis php aute irure dolor in reprehenderit in voluptate velit
 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
 occaecat cupidatat ".$name." non proident, sunt in culpa qui officia
 deserunt mollit anim id est laborum by ".$name;


 ?>



  </body>
</html>
