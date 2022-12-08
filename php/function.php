<?php

$divide = "----------------<br><br>";

function sayHello(){
    echo "hello php";
}

sayHello();

echo $divide;

function sum($a, $b){ //함수의 파라미터는 php 변수화된 문자를 사용
    return $a + $b;
}

echo sum(5, 8);

echo $divide;

$num = 1; // 반복조건 초기화
$sum = 0;
while($num <= 100){
    $sum += $num;
    $num++;
}
echo $sum;

echo $divide;

function sumAll($n){
    $num = 1; // 반복조건 초기화
    $sum = 0;
    while($num <= $n){
    $sum += $num;
    $num++;
}
return $sum;
}

echo sumAll(100);


?>