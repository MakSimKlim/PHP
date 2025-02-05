<form action="index.php" method="post">
	<h1>Ваш любимый цвет:</h1>
		$keys = array_keys(COLORS);
		$value = array_values(COLORS);
		print_r($keys);
		print_r(values);

	<select name="color" id="color">
		<option value="" disabled selected>---Choose color---</option>
		<option value="black">	Черный	</option>
		<option value="red">	Красный		</option>
		<option value="green">	Зеленый	</option>
		<option value="blue">	Синий	</option>
		<option value="white">	Белый	</option>
		<?php
		
		for($i = 0; $i < count(COLORS); $i++)
			echo "<option value=\"$keys[$i]\">$values[$i]</option>"
		?>
 	</select>
	 <input type="submit" value="Submit">

</form>