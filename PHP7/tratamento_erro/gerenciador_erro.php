<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1);

error_reporting(E_ERROR);
echo 4/0 . '<br>';

error_reporting(ALL);