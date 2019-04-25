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
	public function _construct($login, $password, $lang, $users) {
		$this->login = $login;
		$this->password = $password;
		$this->lang = $lang;
	}
	function authorization() {
		if (isset($_POST['text']) && $_POST['text'] == $this->login 
 			&& $_POST['password'] == $this->password){
				$_SESSION['user'] = $this->login;
				$_SESSION['lang'] = $this->lang;
				header("Location: second.php");
			}
	}
}


$user1 = new Users();
$user1->login = 'Sasha';
$user1->password = 'Alea_est_jacta';
$user1->authorization();
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
