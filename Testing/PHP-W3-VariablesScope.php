<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<?php
$a = 5; // global scope

function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $a</p>";
}
myTest();

echo "<p>Variable x outside function is: $a</p>";

##############################################################

function myTest() {
    $b = 5; // local scope
    echo "<p>Variable x inside function is: $b</p>";
  }
  myTest();
  
  // using x outside the function will generate an error
  echo "<p>Variable x outside function is: $b</p>";

##############################################################

$c = 5;
$d = 10;

function myTest() {
  global $c, $d;
  $e = $c + $d;
}

myTest();
echo $e; // outputs 15

##############################################################

$x = 5;
$y = 10;

function myTest() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15

##############################################################

function myTest() {
    static $m = 0;// static retains information
    echo $m;
    $m++;
  }
  
  myTest();
  myTest();
  myTest();
?>
</body>
</html>