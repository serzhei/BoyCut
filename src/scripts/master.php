<?
$to = "boycutkrd23@gmail.com";
$subject = "Хочу к вам";
$name = $_POST['name'];
$message = $_POST['phone'];
$email = $_POST['email'];
$link = $_POST['link'];
$skill = $_POST['skill'];
$from = "noreply@mail.com";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: <".$from.">\r\n";

if (mail($to,$subject,"Имя: ".$name." Телефон: ".$message." Email: ".$email." Ссылка: ".$link." Скилы: ".$skill,$headers)) {
	header('Location: https://boycutkrd.ru/doneForm.html');
}
else {
	header('Location: https://boycutkrd.ru/recordFail.html');
}?>
