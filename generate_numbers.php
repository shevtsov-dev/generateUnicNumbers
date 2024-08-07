<?php

    function calculateLuhnCheckDigit($number)
    {
        //Реверс числа
        $number = strrev($number);
        $sum = 0;

        //Проверка на соответствие числа алгоритму
        for ($i = 0, $j = strlen($number); $i < $j; $i++) {
            $val = $number[$i];
            if ($i % 2 == 0) {
                $val *= 2;
                if ($val > 9) {
                    $val -= 9;
                }
            }
            $sum += $val;
        }
        return (10 - ($sum % 10)) % 10;
    }

    function generateUniqueNumbers($length, $count)
    {
        $startTime = microtime(true);

        echo 'Заданная длина: ' . $length . '. Количество: ' . $count . PHP_EOL;
        $numbers = [];
        $min = pow(10, $length - 2);
        $max = pow(10, $length - 1) - 1;

        while (count($numbers) < $count) {
            $number = random_int($min, $max);
            $checkDigit = calculateLuhnCheckDigit($number);
            $uniqueNumber = $number . $checkDigit;

            if(!isset($numbers[$uniqueNumber])) {
                $numbers[$uniqueNumber] = true;
                echo 'Сгенерированное число: ' . $uniqueNumber . PHP_EOL;
            }
        }

        $endTime = microtime(true);
        $executionTime = $endTime - $startTime;

        $uniqueNumbersArray = array_keys($numbers);
        echo json_encode($uniqueNumbersArray, JSON_PRETTY_PRINT);
        echo PHP_EOL . 'Время выполнения скрипта: ' . $executionTime . ' секунд' . PHP_EOL;
    }

    generateUniqueNumbers(16, 10000);
