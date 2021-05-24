<?
$to = "boycutkrd23@gmail.com";
$subject = "Обучение Барберингу";
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$from = "noreply@mail.com";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: <".$from.">\r\n";

if (mail($to,$subject,"Имя: ".$name." Телефон: ".$phone." Email: ".$email,$headers)) {
	header('Location: https://boycutkrd.ru/doneForm.html');
}
else {
	header('Location: https://boycutkrd.ru/recordFail.html');
}?>
