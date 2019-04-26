<?php
session_start();
?>
<?php
$users = [
[
'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'
],
[
'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'
],
[
'login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'
],
[
'login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'
],
[
'login' => 'Sasha', 'password' => 'Alea_est_jacta',
],
];
class Users
{
	public $login;
	public $password;
	public $lang;
	public function _construct($login, $password, $lang) {
		$this->login = $login;
		$this->password = $password;
		$this->lang = $lang;
	}
	public function getUser($login, $password, $lang) {
			if (isset($_SESSION['user'])) {
				$number = $_SESSION['user'];
				return new Users($users[$number]['login'], $users[$number]['password'], $users[$number]['lang']);
			}
			if ($_POST['text'] && $_POST['password']){
foreach ($users as $key => $value) {
if ($_POST['text'] == $value['login'] && $_POST['password'] == $value['password']) {
$_SESSION['user'] = $key;
return new Users($_POST['login'], $_POST['password'], $value['lang']);
}
}
return null;
}
}
	public function authorization() {
		$this->login = $login;
		$this->password = $password;
		$this->lang = $lang;
		if (isset($_POST['text']) && $_POST['text'] == $this->login 
 			&& $_POST['password'] == $this->password){
				$_SESSION['user'] = $this->login;
				$_SESSION['lang'] = $this->lang;
				header("Location: second.php");
			}
			
			}
	}

$user2 = new Users();
$user2->authorization();
$user2->getUser('Vasisualiy', '12345', 'ru');
?>


<html><body>
	Неверный пароль!
<form method="POST">
<input type="submit" value="Вернуться" name="back">
</form>
<?php
if (isset($_POST['back']) ) {
	header("Location: index.php");
}
?>
</body></html>
