<?php
session_start();
?>
<?php
class Trans {
	public $lang = ['ru' => 'Привет', 'en' => 'Hi', 'ua' => 'Привіт', 'it' => 'Salvo'];

	public function _construct($lang){
		$this->lang = $lang;
	}
	public function greeting() {
		if (isset($_SESSION['user']) && isset($_SESSION['lang'])) {
			echo $this->lang[$_SESSION['lang']]. ', '. $_SESSION['user'];
	}
		elseif (isset($_SESSION['user']) && !isset($_SESSION['lang'])) {
	?>
	<html>
<p> Выберите необходимый язык</p>
<form method="POST">
<select name="languages">
<option selected value="en" name="lang">Английский</option>
<option value="ru" name="lang">Русский</option>
<option value="it" name="lang">Итальянский</option>
<option value="ua" name="lang">Украинский</option>
</select>
<input type="submit" name="click" value="Отправить">
</form>
<?php
if(isset($_POST['click'])) {
	$_SESSION['lang'] = $_POST['languages'];
	echo $this->lang[$_SESSION['lang']]. ', '. $_SESSION['user'];
}
}
	}
}
$obj = new Trans();
$obj->greeting();
?>