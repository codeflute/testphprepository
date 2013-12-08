<?php 

//echo $_SERVER['DOCUMENT_ROOT']; 
//echo print_r($_SERVER); 
echo dirname($_SERVER['SCRIPT_NAME']);
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'] . dirname($_SERVER['SCRIPT_NAME']) . '/includes/magicquotes.inc.php';
?> 