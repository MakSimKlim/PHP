<?php
	echo'<pre>';
	print_r($_FILES);
	//$fullpath = 'D:\\PHP\\' . $_FILES['file']['name'];
	$fullpath = __DIR__ . '\..\uploads\\' . $_FILES['file']['name'];
	move_uploaded_file($_FILES['file']['tmp_name'], $fullpath);
	//echo $result;
	echo'<pre>';
?>

<?php if($_FILES['file']['type'] === 'image/jpeg'):?>
<img src="../uploads/<?= $_FILES['file']['name'] ?>" alt="<?= $fullpath ?>" height="500px">
<?php endif?>

<?php if($_FILES['file']['type'] === 'audio/mpeg'):?>
	<audio controls ip="player" >
		<source src="../uploads/<?=$_FILES['file']['name']?>">
	</audio>
<?php endif?>

<?php if($_FILES['file']['type'] === 'video/x-matroska'): ?>
    <video controls ip="player">
        <source src="../uploads/<?=$_FILES['file']['name']?>">
    </video>
<?php endif ?>