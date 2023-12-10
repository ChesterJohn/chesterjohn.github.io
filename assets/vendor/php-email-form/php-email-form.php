<?php

if(isset($_POST)){
	$formok = true;

	//form data

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);

	//validation
	if(empty($name) || empty($email) || empty($message)){
		$formok = false;
	}

	if($formok){
		$headers = "From: chesterjohn.net@outlook.com" . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$emailbody = "<p>You have received a new message from the inquiries form on your website.</p>
                  <p><strong>Name: </strong> {$name} </p>
                  <p><strong>Email Address: </strong> {$email} </p>
                  <p><strong>Message: </strong> {$message} </p> ";

    mail("chesterjohn.net@outlook.com","New Inquiry",$emailbody,$headers);

	}

	echo 'success';
        //redirect back to form
        // header('location: ' . $_SERVER['HTTP_REFERER']);

} else {
    echo 'error';
}


 ?>
