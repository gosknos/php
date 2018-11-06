<?php
include "Calculator.php";
$names = array("Patrick", "John", "Marie", "Claire", "Paul");
foreach ($names as $name) {
    if (strlen($name)>=2 && $name[0]=='P' && $name[1]=='a'){
        print "$name, ";
    }
}

function sum($x, $y) {
    return $x + $y;
}
function sub($x, $y){
    return $x - $y;
}
function multi($x, $y){
    return $x * $y;
}
function div($x, $y){
    return $x / $y;
}


/**
if (!isset($_GET['op']) || !isset($_GET['x']) || !isset($_GET['y'])) {
    echo "<h1> Incorrect or incomplete data </h1>";
    exit();
}

$x=$_GET['x'];
$y=$_GET['y'];

switch ($_GET['op']){
    case 'sum':
        $result = $x+$y;
        echo "<h1> $x+$y = $result </h1>";
        break;
    case 'sub':
        $result = $x-$y;
        echo "<h1> $x -$y = $result </h1>";
        break;
    case 'div':
        if($y==0) {echo "<h1> cannot divide by 0 ! </h1>";}
        else {
            $result = $x/$y;
            echo "<h1> $x/$y = $result </h1>";
        }
        break;
    case 'multi':
        $result = $x*$y;
        echo "<h1> $x*$y = $result </h1>";
        break;
    default:
        $op=$_GET['op'];
        echo "<h1> Unrecognized operation: $op</h1>";
}

echo sum(5, 7);
echo ("\n");
echo sub(10, 1);
echo ("\n");
echo multi (2,4);
echo ("\n");
echo div (10,5); */


$calculator = new Calculator();
echo $calculator->sum(5, 7);
echo ("\n");
echo $calculator->sub(8, 2);
echo ("\n");
echo $calculator->multi(2, 5);
echo ("\n");
echo $calculator->div(20, 4);

?>