<?php
session_start();
?>
<?php
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
$user1->login = 'Vasisualiy';
$user1->password = '12345';
$user1->lang = 'ru';
$user1->authorization();
$user2 = new Users();
$user2->login = 'Afanasiy';
$user2->password = '54321';
$user2->lang = 'en';
$user2->authorization();
$user3 = new Users();
$user3->login = 'Petro';
$user3->password = 'EkUC42nzmu';
$user3->lang = 'ua';
$user3->authorization();
$user4 = new Users();
$user4->login = 'Pedrolus';
$user4->password = 'Cogito_ergo_sum';
$user4->lang = 'it';
$user4->authorization();
$user5 = new Users();
$user5->login = 'Sasha';
$user5->password = 'Alea_est_jacta';
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
