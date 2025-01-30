<?php
$returning_visitor = false;
if(!isset($_COOKIE['OldUser']))
{
echo setcookie('OldUser', '1', time() + 3600);
}		
else 
{
$returning_visitor = true;
}
echo $returning_visitor ? 'С возвращением из Cookie' : 'Бобро пожаловать в Cookie';		
?>