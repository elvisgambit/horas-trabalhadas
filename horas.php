<!DOCTYPE html>
<html>
<body>

<?php 
// Faz o cálculo das horas
$total = (strtotime('2021-08-30 18:00:00')) - (strtotime('2021-08-30 08:00:00'));

// Encontra as horas trabalhadas
$hours      = floor($total / 60 / 60);

// Encontra os minutos trabalhados
$minutes    = round(($total - ($hours * 60 * 60)) / 60);

// Formata a hora e minuto para ficar no formato de 2 números, exemplo 00
$hours = str_pad($hours, 2, "0", STR_PAD_LEFT);
$minutes = str_pad($minutes, 2, "0", STR_PAD_LEFT);

// Exibe no formato "hora:minuto"
echo $hours.':'.$minutes.' Horas Trabalhadas';
?>

</body>
</html>
