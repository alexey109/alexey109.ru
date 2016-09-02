<?php

if(isset($_POST['message'])){

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
    
	
	$to      = 'alexey109@gmail.com';
	$subject = 'Форма на alexey109.ru';

	$headers = 'From: '. $email . "\r\n" .
    'Reply-To: '. $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

	$status = mail($to, $subject, $message, $headers);

	if($status == TRUE){	
		$res['sendstatus'] = 'done';
	
		//Edit your message here
		$res['message'] = 'Сообщение успешно отправлено.';
    }
	else{
		$res['message'] = 'К сожалению, сообщение не отправлено. Пожалуйста, напишите мне на alexey109@gmail.com';
	}
	
	
	echo json_encode($res);
}

?>
