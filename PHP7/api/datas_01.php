<div class="titulo">Datas #01</div>

<?php
header('Content-type: text/html; charset=iso-8859-1');
echo time() . '<br>';
echo date('D, d \d\e  \d\e Y H:i A') . '<br>';

echo strftime('%A, %d de %B de %Y', time()) . '<br>';
setlocale(LC_TIME, 'ptb', 'ptb.utf-8');
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() +(24 * 60 * 60);
echo strftime()