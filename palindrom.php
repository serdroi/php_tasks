<?php

// Способ 1: Через строковое преобразование
function isPalindromeString(int $number): bool {
    // Преобразуем число в строку
    $str = (string)$number;
    // Сравниваем строку с её перевернутой версией
    return $str === strrev($str);
}

// Способ 2: Математический подход (без преобразования в строку)
function isPalindromeMath(int $number): bool {
    // Отрицательные числа не могут быть палиндромами
    if ($number < 0) {
        return false;
    }
    
    // Если число однозначное - это палиндром
    if ($number < 10) {
        return true;
    }
    
    $original = $number;
    $reversed = 0;
    
    // Переворачиваем число
    while ($number > 0) {
        $digit = $number % 10;
        $reversed = $reversed * 10 + $digit;
        $number = (int)($number / 10);
    }
    
    return $original === $reversed;
}

// Примеры использования:
$testNumbers = [121, 123, 12321, 12345, 1001];

foreach ($testNumbers as $num) {
    echo "Число $num: ";
    echo isPalindromeMath($num) ? "палиндром" : "не палиндром";
    echo "\n";
}


// Особенности реализации:

// 1. Строковый метод (isPalindromeString):
// Проще в реализации
// Использует больше памяти
// Может быть медленнее на больших числах

// 2.Математический метод (isPalindromeMath):
// Не использует дополнительные строковые преобразования
// Более эффективен по памяти
// Работает только с целыми числами
// Обрабатывает отрицательные числа
// Более производительный на больших числах

// Примеры вывода:
// Число 121: палиндром
// Число 123: не палиндром
// Число 12321: палиндром
// Число 12345: не палиндром
// Число 1001: палиндром

// -------------------------------------------------

// Implementierungsmerkmale:

// 1. String-Methode (isPalindromeString):
// Einfacher umzusetzen
// Benötigt mehr Speicher
// Bei größeren Zahlen kann es langsamer sein

// 2. Mathematische Methode (isPalindromeMath):
// Verwendet keine zusätzlichen String-Konvertierungen
// Speichereffizienter
// Funktioniert nur mit ganzen Zahlen
// Behandelt negative Zahlen
// Leistungsstärker bei größeren Zahlen

// Ausgabebeispiele:
// Nummer 121: Palindrom
// Nummer 123: kein Palindrom
// Nummer 12321: Palindrom
// Nummer 12345: kein Palindrom
// Nummer 1001: Palindrom 
