<?php
	$for = "Introduction to PHP2";

	//Consts
	define('NAME', 'value');
	//const PI = 3.14;
	const PREFIX = 'OPTION';

	$int = 1024;

$heredoc_string = <<<HEREDOC_STRING
Heredoc-string (RAW-string) - это строка с форматированием.
Такие строки игнорируют Escape- последовательности, и выводятся
точно также как и задаются.
Heredoc строки часто используют для формирования разметки:
	<code>
		code here
	</code>
	!!! Поддерживает интерполяцию: <code>$int</code>;
HEREDOC_STRING;

$nowdoc_string = <<< 'NOWDOC_STRING'
Nowdoc строки раскрывают переменную
!!! Единственное отличие что она не поддерживает инторполяции: <code>$int</code>;
NOWDOC_STRING;

	$escape_sequences = <<<ESCAPE_SEQUENCES
	<h3>Escape-последовательности</h3>

ESCAPE_SEQUENCES;

$heredoc_string2 = <<<HEREDOC_STRING2
1. Почему функции НЕ поддерживают перегрузку в PHP; 
- PHP является языком с динамической типизацией, что означает, что типы переменных определяются во время выполнения. Перегрузка функций на основе типов параметров просто не нужна
- Вместо перегрузки функций PHP позволяет использовать параметры по умолчанию. Это позволяет разработчикам определять функции с несколькими параметрами и задавать значения по умолчанию для этих параметров

HEREDOC_STRING2;

	require 'functions.php';
	require 'index.view.php';//Также как #include, встраивает содержимое целевого файла
	//закрывающая метка в *.php файле не обязательна
?>