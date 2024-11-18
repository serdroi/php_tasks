<?php

function bubbleSort(array $arr): array {
    $n = count($arr);
    $swapped = false;
    
    // Внешний цикл для контроля количества проходов
    // Äußere Schleife zur Steuerung der Anzahl der Durchgänge
    for ($i = 0; $i < $n - 1; $i++) {
        $swapped = false;
        
        // Внутренний цикл для сравнения элементов
        // Innere Schleife zum Vergleichen von Elementen
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Если текущий элемент больше следующего, меняем их местами
            // Wenn das aktuelle Element größer als das nächste ist, tauschen Sie sie aus
            if ($arr[$j] > $arr[$j + 1]) {
                // Обмен значений
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
                
                $swapped = true;
            }
        }
        
        // Если за проход не было обменов, массив уже отсортирован
        // Wenn während des Durchlaufs kein Austausch stattgefunden hat, ist das Array bereits sortiert
        if (!$swapped) {
            break;
        }
    }
    
    return $arr;
}

// Пример использования:
// Anwendungsbeispiel:
$array = [64, 34, 25, 12, 22, 11, 90];
$sortedArray = bubbleSort($array);
print_r($sortedArray);

// Особенности этой реализации:
// 1. Используется флаг $swapped для оптимизации - если за проход не было обменов, значит массив уже отсортирован
// 2. Внутренний цикл уменьшает количество итераций на $i, так как после каждого прохода последние $i элементов уже находятся на своих местах
// 3. Функция возвращает новый отсортированный массив
// Временная сложность:
// Худший случай: O(n²)
// Средний случай: O(n²)
// Лучший случай: O(n) (когда массив уже отсортирован)
// -------------------------------------------------
// Initialisieren Sie das Objekt. Merkmale dieser Implementierung:
// 1. Das Flag $swapped wird zur Optimierung verwendet. Wenn während des Durchlaufs keine Swaps stattgefunden haben, ist das Array bereits sortiert
// 2. Die innere Schleife reduziert die Anzahl der Iterationen um $i, da nach jedem Durchlauf die letzten $i-Elemente bereits vorhanden sind
// 3. Die Funktion gibt ein neues sortiertes Array zurück
// Zeitschwierigkeit:
// Schlimmster Fall: O(n²)
// Durchschnittsfall: O(n²)
// Bester Fall: O(n) (wenn das Array bereits sortiert ist) 
