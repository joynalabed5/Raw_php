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




