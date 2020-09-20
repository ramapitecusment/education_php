<?php
	//Если город пустой - покажем форму
	if (!isset($_REQUEST['city'])) {
?>
		<form action="" method="GET">
			<input type="text" name="city">
			<input type="submit">
		</form>
<?php
	}
?>

<?php
	//Если форма была отправлена и город не пустой:
	if (isset($_REQUEST['city'])) {
		$city = strip_tags($_REQUEST['city']);
		echo 'Ваш город: '.$city;
	}
?>

<form action="" method="GET">
	<input name="name" value="<?php if (isset($_GET['name'])) echo $_GET['name']; ?>">
	<textarea name="message">
		<?php if (isset($_GET['message'])) echo $_GET['message']; ?>
	</textarea>
	<input type="submit">
</form>