<?php
session_start();
?>
<?php
class Users
{
	public $login;
	private $password;
	public $lang;
	public function _construct($login, $password, $lang) {
		$this->login - $login;
		$this->password - $password;
	}
	function present() {
		echo 'Человека зовут'. $this->login;
	}
}

$user1 = new Users();
$user1->login = 'Vasisualiy';
$user1->present();




//  $users = [
// [
// 'login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'
// ],
// [
// 'login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'
// ],
// [
// 'login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'
// ],
// [
// 'login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'
// ],
// [
// 'login' => 'Sasha', 'password' => 'Alea_est_jacta',
// ],
// ];

//  foreach ($users as $user) {
//  		if (isset($_POST['text']) && $_POST['text'] == $user['login'] 
//  			&& $_POST['password'] == $user['password']){
// 				$_SESSION['user'] = $user['login'];
// 				$_SESSION['lang'] = $user['lang'];
// 				header("Location: second.php");
// 			}
// 		}
// 	?>
<html><body>
	Неверный пароль!
<form method="POST">
<input type="submit" value="Вернуться" name="back">
// </form>
// <?php
// if (isset($_POST['back']) ) {
// 	header("Location: index.php");
// }
// ?>
// </body></html>
