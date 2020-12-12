<?php
include 'functions.php';
/*Есть непустой массив, взять последний элемент и перенести его вначало массива*/
$arr = [1,4,5,3,8,10,2];
echo "Исходный массив: ";
output($arr);

$newArr = [];

$newArr[0] = $arr[count($arr)-1];
for ($i=0;$i<count($arr)-1;$i++)
{
    $newArr[$i+1]=$arr[$i];
}
output($newArr);



/*Посчитать время выполнения суммирования элементов матрицы*/

$matrix = [];
$count = 1000;


$matrix = generateMatrix($matrix,$count,0,100);
//outputMatrix($matrix);
$sum = getMatrixSumByFor($matrix);
$sum = getMatrixSumByForeach($matrix);
echo ("Сумма элементов = ".$sum);
getMatrixSumByString($matrix);







