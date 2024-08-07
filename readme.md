Документация

Название задачи: Генерация уникальных чисел с контрольными числами

Описание задачи:
Разработайте PHP-скрипт, который генерирует большое количество уникальных чисел заданной длины, 
включая контрольное число для проверки их целостности. 
Скрипт должен быть оптимизирован для высокой скорости работы и эффективного использования ресурсов.

Требования: 

1. Функциональность:
Напишите функцию generateUniqueNumbers($length, $count), которая выполняет следующие действия:
    $length — длина числа (включая контрольное число).
    $count — количество уникальных чисел для генерации.
    Генерируйте уникальные числа длиной $length символов, где последние цифры являются контрольным числом.
    Контрольное число должно быть рассчитано с использованием алгоритма Луна (Luhn).

2. Алгоритм Луна (Luhn):
Реализуйте функцию calculateLuhnCheckDigit($number) для расчета контрольной цифры, которая делает число корректным по алгоритму Луна.

3. Производительность:
Скрипт должен быть оптимизирован для работы с большим количеством данных. Необходимо обеспечить быструю генерацию уникальных чисел.

4. Вывод:
Скрипт должен выводить сгенерированные уникальные числа в формате JSON, где каждое число содержит исходную часть и контрольное число.
Реализуйте возможность измерения времени выполнения скрипта.

Ожидаемые результаты:
1. Рабочий PHP-скрипт, который корректно выполняет все требования.
2. Скрипт должен эффективно генерировать большое количество уникальных чисел и измерять время выполнения.
3. Документация с инструкциями по запуску и тестированию скрипта.

Инструкции по запуску

Запустите скрипт командой: 
php generate_numbers.php

Примечания:
Скрипт генерирует уникальные числа длиной 16 символов (включая контрольное число) и выводит 10000 таких чисел в формате JSON.
Если нужно изменить длину генерируемого уникального числа и их количество, изменяем следующие параметры в файле generate_numbers.php:
generateUniqueNumbers($length, $count); 
где $length - длина генерируемого уникального числа,
    $count - количество генерируемых уникальных чисел.
Время выполнения скрипта измеряется и выводится в секундах.
Код оптимизирован для работы с большими объемами данных, обеспечивая быструю генерацию уникальных чисел.