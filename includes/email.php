<?php
function mail($email){
	$emailcheck = spamcheck($email);
	if($emailcheck == FALSE){
		echo "Email is either invalid, or there is already a account for that email";
	} else{
		$from = 'ChatBoxerOfficial@gmail.com';
		$subject = 'Thanks For Signing up!';
		$message = 'thank you very much for signing up, '. $email . ' we will be sure to add you in!';
		mail($email, $subject, $message, "From: $from\n");
	}
}

?>