<?php 
	require_once __DIR__ . '/data.php';	
	echo "Hello {$_POST['first_name']} {$_POST['last_name']} {$_POST['middle_name']}, удачи Вам!!!"; 
?>

<form action="result.php" method="post">
	<?php for($i=0; $i<count($questions); $i++):?>		
			<h3><?= $questions[$i]?></h3>
				<?php for($j=0; $j<count($answers[$i]); $j++):?>
					<input type="radio" name="<?="question_{$i}"?>" id="<?="{$i}_{$j}"?>" value="<?="{$i}_{$j}"?>">
					<label for="<?="{$i}_{$j}"?>"><?=$answers[$i][$j]?></label><br>
				<?php endfor ?>		
	<?php endfor ?>
	<input type="submit" value="Send" >
</form>
