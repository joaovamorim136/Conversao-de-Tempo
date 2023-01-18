<?php

echo "Insira o valor em segundos para saber Hora/Minuto/Segundo: ";
    $total_segundos = intval(fgets(STDIN));

    $horas = intval($total_segundos / 3600);
    $total_segundos = intval($total_segundos % 3600);

    $minutos = intval($total_segundos / 60);
    $total_segundos = intval($total_segundos % 60);

    $segundos = $total_segundos;

echo $horas . ":" . $minutos . ":" . $segundos
?>