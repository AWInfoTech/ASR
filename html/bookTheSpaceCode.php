<?php
/**
 * PHPMailer simple file upload and send example
 */
$msg;
$noOfGuest = $_POST["noOfGuest"];
$date = $_POST["date"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$note = $_POST["note"];
$newsletter = $_POST["newsletter"];
if (!empty($_POST)) {
	require 'class.phpmailer.php';
	$mail = new PHPMailer;
	$mail->setFrom('info@americanspiritsroadhouse.com', 'no-reply');
    $mail->addAddress('blog.himanshu@gmail.com', 'Info');//info@americanspiritsroadhouse.com
    $mail->Subject = 'Request For Space Booking';
    $mail->msgHTML('<table><thead><tr><th><h3>Request For Space Booking</h3></th></tr></thead><tbody><tr><td><strong>Name : </strong></td><td><p>'.$name.'</p></td></tr><tr><td><strong>Email : </strong></td><td><p>'.$email.'</p></td></tr><tr><td><strong>Contact : </strong></td><td><p>'.$phone.'</p></td></tr><tr><td><strong>No of Guest : </strong></td><td><p>'.$noOfGuest.'</p></td></tr><tr><td><strong>Date : </strong></td><td><p>'.$date.'</p></td></tr><tr><td><strong>Note : </strong></td><td><p>'.$note.'</p></td></tr>
	<tr><td><strong>Newsletter : </strong></td><td><p>'.$newsletter.'</p></td></tr></tbody></table>');
    $mail->IsHTML(true);
   
    if (!$mail->send()) {
        $msg = 2;
        echo $msg;
    } else {
        $msg = 1;
        echo $msg;
    }
}
?>