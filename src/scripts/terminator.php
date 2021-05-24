<?
$to = "boycutkrd23@gmail.com";
$subject = "Хочу открыть Терминатор";
$name = $_POST['name'];
$message = $_POST['phone'];
$district = $_POST['district'];
$from = "noreply@mail.com";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: <".$from.">\r\n";

if (mail($to,$subject,"Имя: ".$name." Телефон: ".$message." Район: ".$district,$headers)) {
	header('Location: https://boycutkrd.ru/doneForm.html');
}
else {
	header('Location: https://boycutkrd.ru/recordFail.html');
}?>
