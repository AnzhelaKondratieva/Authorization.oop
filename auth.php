<?php
session_start();
?>
<?php 


// класс USERS!
class Users
{
public $login;
public $password;
public $lang;
public function __construct($login, $password, $lang)
{
$this->login = $login;
$this->password = $password;
$this->lang = $lang;
}
public function present()
{
return "my name is {$this->login} ваш язык {$this->lang}";
}
public $users = [
['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
['login' => 'Sasha', 'password' => 'Alea_est_jacta', ],
];
// ФУНКЦИЯ Создание юзера!
function getUser()
{
//если юзер авторизован
if (isset($_SESSION['user'])) {
$number = $_SESSION['user'];
return new Users($users[$number]['login'], $users[$number]['password'], $users[$number]['lang']);
}
//если юзер не авторизован
if ($_POST['login'] && $_POST['password']){
foreach ($users as $key => $value) {
if ($_POST['login'] == $value['login'] && $_POST['password'] == $value['password']) {
$_SESSION['user'] = $key;
return new Users($_POST['login'], $_POST['password'], $value['lang']);
}
}
}
return null;
}

}
class Trans
{
public $lang;
public $user;

public function __construct()
{
$this->user = getUser('Vasisualiy');
$this->lang = 'ua'; // язык по умолчанию, отбражаеться если не выбрано другое

//тащим язык из настроек пользователя
if (!empty($this->user->lang)) {
$this->lang = $this->user->lang;
}
// если все таки в сесии лежит выбранный язык.
if (isset($_SESSION['lang'])) {
$this->lang = $_SESSION['lang'];
}
}

//переводимых фраз много, надо их как-то идентифицировать
public function getLang($phrase)
{
return $trans[$phrase][$this->lang];
}
}

if(isset($_POST['lang'])){
$_SESSION['lang'] = $_POST['lang'];
}

$trans = new Trans();
echo $trans->getLang('hello');
$user = getUser('Vasisualiy')->present();
echo $trans->getLang('bye');