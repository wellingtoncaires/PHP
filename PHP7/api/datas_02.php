<div class="titulo">Datas #02</div>

<?php
header('Content-type: text/html; charset=iso-8859-1');
$formatoData1 = 'D, d \d\e M \d\e Y';
$formatoData2 = '%A, %d de %B de %Y';
$formatoDataHora = '%A, %d de %B de %Y - %H:%M:%S';

$agora = new DateTime();

// print_r($agora);
// echo '<br>';

echo $agora->format($formatoData1) . '<br>';

setlocale(LC_TIME, 'ptb', 'ptb.utf-8');
echo strftime($formatoData2, $agora->getTimestamp()) .'<br>';

$amanha = new DateTime('+2 week');
echo strftime($formatoData2, $amanha->getTimestamp()) .'<br>';
