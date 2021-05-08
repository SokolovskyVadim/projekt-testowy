<?php 
$to = "night___life@mail.ru";
$subject = "Заявка с 9-9 headphones";

$name = "";
$soc = "";
$file = "";
$tel = "";
$mail = "";
$site = "";
$theme = "";
$msg = "";
$time = "";
$header = "";

if (!empty($_POST['name'])) { $name="\nИмя: ".$_POST['name']; }
if (!empty($_POST['soc'])) { $soc="\nСоциальная сеть: ".$_POST['soc']; }
if (!empty($_POST['file'])) { $file="\nДобавлено фото: ".$_POST['file']; }
if (!empty($_POST['tel'])) { $tel = $_POST['tel']; }
if (!empty($_POST['mail'])) { $mail="\nE-Mail: ".$_POST['mail']; }
if (!empty($_POST['site'])) { $site="\nСайт: ".$_POST['site']; }
if (!empty($_POST['theme'])) { $theme="\nТема: ".$_POST['theme']; }
if (!empty($_POST['msg'])) { $msg="\nСообщение: ".$_POST['msg']; }
if (!empty($_POST['time'])) { $time="\nСообщение: ".$_POST['time']; }
if (!empty($_POST['header'])) { $header=$_POST['header`']; }


// if(!preg_match("/^(17|29|25|44|33)[0-9]{3}-[0-9]{2}-[0-9]{2}+$/", $tel)) {
// echo 'error_tel';
// return;
// }
if(!preg_match("/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/", $tel)) {
echo 'error_tel';
return;
}

$tel = 'Телефон: '.$tel;
$header = 'Заказали обратный звонок';

$message = $header.$name. ' ' . $tel.$mail.$site.$theme.$msg.$time.$soc.$file;

$headers = "From: Оставлена заявка: с 9-9 headphones<cvetogamma>\r\n";

mail($to, $subject, $message, $headers);
header("Location: {$_SERVER['HTTP_REFERER']}");
?>