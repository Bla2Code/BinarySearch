<?php
$elem = 5;
$mas = range(1, 100);
echo search($mas, $elem, 0, (count($mas) - 1));
function search($mas, $elem, $f, $end) {
    if ($f > $end) {
        return 'Элемент не найден';
    }
    $i = (int)floor(($f + $end) / 2);
    if ($mas[$i] == $elem) {
        return 'Значение ' . $elem . ' находится в позици ' . $i;
    } elseif ($mas[$i] > $elem) {
        return search($mas, $elem, $f, $i - 1);
    } else {
        return search($mas, $elem, $i + 1, $end);
    }
}