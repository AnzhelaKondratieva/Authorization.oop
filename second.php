<?php
session_start();
?>
<?php
class Languages
{
	public $lang;
}
$english = new Languages();
$english->lang = 'Hi';
$russian = new Languages();
$russian->lang = 'Привет';
$ukrainian = new Languages();
$ukrainian->lang = "Привіт";
$italian = new Languages();
$italian->lang = 'Salvo';