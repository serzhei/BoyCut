<?
$to = "boycutkrd23@gmail.com";
$subject = "Заявка с сайта";
$message = $_POST['phone'];
$from = "noreply@mail.com";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$headers .= "From: <".$from.">\r\n";

if (mail($to,$subject,"Телефон: ".$message,$headers)) {
	header('Location: https://boycutkrd.ru/doneForm.html');
}
else {
	header('Location: https://boycutkrd.ru/recordFail.html');
}?>
