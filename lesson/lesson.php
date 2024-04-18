 
<?php

include 'Calculator.php';
// echo "hello world!";
$array = array(1,2,3,4);
// try{ 
// echo $array[1] / 0;
// throw new Exception("Division by zero");
// }
// catch(Exception $e){
//     echo "Поймана ошибка", $e->getMessage();
// }

// try {
//     echo 5 / 0;
//   } catch(InvalidArgumentException $ex) {
//     echo $ex->getMessage();
//   }
//   finally{
//     echo "wut";
//   }

// try {
//     echo 5 / 0;
// }
// catch(Throwable $ex) {
//     print "error";
// }



$operationFactory = new OperationFactory();
$calculator = new Calculator($operationFactory);

// echo "[--------------------------------]\n";
// echo "          enter action\n";
$action = "";
switch (($_GET["act"])){
case(1):
    $action = "+";
    break;
case(2):
    $action = "-";
    break;
case(3):
    $action = "*";
    break;
case(4):
    $action = "/";
    break;
case(5):
    $action = "!";
    break;
case(6):
        $action = "fib";
        break;
default:
    echo "error";
}

// echo "IF U CHOOSE FACTORIAL NUM2 IS USELESS";
// echo "          enter first number\n";
$firstNum = ($_GET["one"]);
// echo "          enter second number\n";
$secondNum = ($_GET["two"]);

echo "1 = +;\n";

echo "2 = -;\n";

echo "3 = *;\n";

echo "4 = /;\n";

echo "5 = !;\n";

echo "6 = fib"

// echo "[--------------------------------]\n";
// // echo "          RESULT\n";
echo "answer =";
 echo $calculator->calculate($action,$firstNum,$secondNum);


//  echo "\n";
// echo ($_GET["act"]);
// echo "\n";
// echo ($_GET["one"]);
// echo "\n";
// echo ($_GET["two"]);
?>





