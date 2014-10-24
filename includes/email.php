<?php

function sendemail($email){
		$from = 'ChatBoxerOfficial@gmail.com';
		$subject = 'Thanks For Signing up!';
		$message = 'thank you very much for signing up, '. $email . ' we will be sure to add you in!';
		mail($email, $subject, $message, $from);
}

?>