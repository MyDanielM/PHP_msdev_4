<?php

function output ($anyArr){
    //Функция вывода массива
    echo '<pre>';
    echo var_dump($anyArr);
    echo '</pre>';
}

function outputMatrix($matrix){
    //Функция вывода матрицы
    echo '<pre>';
    foreach ($matrix as $string)
    {
        foreach ($string as $item)
            echo ($item . ' ');
        echo '</br>';
    }
}

function generateMatrix($matrix,$count, $begin,$end){
    //Функция рандомной генерации матрицы
    for($i = 0; $i<$count; $i++)
    {
        for($j=0; $j<$count; $j++)
            $matrix[$i][$j] = rand($begin,$end);
    }
    return $matrix;
}

function getMatrixSumByFor($matrix){
    //Функция подсчета элементов в матрице с помощью цикла for
    $sum=0;
    $timeBeforeFor = date("H:i:s");
    $sec1 = microtime();
    echo ("Начали считать с помощью \"for\" в " . $timeBeforeFor);
    echo "</br>";
    for($i = 0; $i<count($matrix); $i++)
    {
        for($j=0; $j<count($matrix[$i]); $j++)
        {
            $sum += $matrix[$i][$j];
        }
    }
    $timeAfterFor = date("H:i:s");
    $sec2 = microtime();
    $dif = $sec2-$sec1;
    echo ("Закончили считать в ". $timeAfterFor);
    echo "</br>";
    echo ("Прошло ".$dif." секунд");
    echo "</br>";

    return $sum;
}
function getMatrixSumByForeach($matrix){
    //Функция подсчета элементов в матрице с помощью цикла foreach
    $sum=0;
    $timeBeforeFor = date("H:i:s");
    $sec1 = microtime();
    echo ("Начали считать с помощью \"foreach\" в " . $timeBeforeFor);
    echo "</br>";
    foreach ($matrix as $string)
    {
        foreach ($string as $item)
        {
            $sum+=$item;
        }
    }
    $timeAfterFor = date("H:i:s");
    $sec2 = microtime();
    $dif = $sec2-$sec1;
    echo ("Закончили считать в ". $timeAfterFor);
    echo "</br>";
    echo ("Прошло ".$dif." секунд");
    echo "</br>";

    return $sum;
}

function getMatrixSumByString($matrix){
    //Функция подсчёта элементов в строке
    echo "</br>";
    for($i = 0; $i<count($matrix); $i++)
    {
        $strSum = 0;
        for($j=0; $j<count($matrix[$i]); $j++)
        {
            $strSum+=$matrix[$i][$j];
        }
        echo ("Сумма в строке $i = $strSum");
        echo "</br>";
    }
}