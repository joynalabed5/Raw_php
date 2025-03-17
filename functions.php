//basic function

<?php
function bat(){
    echo "tigers bat";
}

bat();

?>





//passing by value(default)
<?php
function addFive($value) {
    $value += 5;
    echo "Inside function: $value<br>";
}

$num = 10;
addFive($num);
echo "Outside function: $num";
?>


//passing by reference

<?php

function addSix(&$value) {  //(&)it indicates the passing by reference
    $value += 6;
    echo "Inside function: $value<br>";
}

$num = 10;
addSix($num);
echo "Outside function: $num";
?>



//Variadic Function in PHP

<?php

function greet($greeting, ...$names) {
    foreach ($names as $name) {
        echo "$greeting, $name!<br>";
    }
}

greet("Hello", "Alice", "Bob", "Charlie");

?>

//example 2 of variadic function

<?php

function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x); //determines how many arguments were passed
    for ($i = 0; $i < $len; $i++) {
        $n += $x[$i];
    }
    return $n;
}

?>


//The variadic argument must be the last argument

<?php
function myFamily($lastname, ...$firstname) {
  $txt = "";
  $len = count($firstname);
  for($i = 0; $i < $len; $i++) {
    $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
  }
  return $txt;
}

$a = myFamily("Doe", "Jane", "John", "Joey");
echo $a;
?>


