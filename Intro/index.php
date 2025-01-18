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

	require 'functions.php';
	require 'index.view.php';//Также как #include, встраивает содержимое целевого файла
	//закрывающая метка в *.php файле не обязательна
?>