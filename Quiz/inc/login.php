<form class="login-card" action="inc/main.php" method="post">
	<div class="login-item"><h3>Enter your name:</h3></div>
	<div class="login-item"><label>Last name:</label>	<input type="string" name="last_name"	id="last_name"		placeholder="LastName">	 </div>
	<div class="login-item"><label>First name:</label>	<input type="string" name="first_name"	id="first_name"		placeholder="FirstName"> </div>
	<div class="login-item"><label>Middle name:</label> <input type="string" name="middle_name" id="middle_name"	placeholder="MiddleName"></div>
	<div class="login-item"><label>E-mail:</label>		<input type="email"	 name="email"		id="email"			placeholder="E-mail">	 </div>
	<div class="login-item"><label> </label><input type="submit" value="Start"></div>
</form>
<pre>
<?php
	print_r($_POST);
?>
</pre>