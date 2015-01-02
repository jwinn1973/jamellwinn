<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$company = $_POST['company'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//$information = [$firstname, $lastname, $company, $phonenumber, $email, $subject, $message];

$to = "skorpion2011@icloud.com";
$subject = $subject;
$txt = $message;
$headers = "From: webmaster@example.com";


mail($to,$subject,$txt,$headers);

//$admin_email = "skorpion2011@icloud.com";
//mail($admin_email, "$subject", $firstname ." ".$lastname. $subject . $message, "From:" . $email);

/*$xml = new DomDocument("1.0", "UTF-8");

$container = $xml->createElement('contactlist');
$container = $xml->appendChild($container);
   
        $contact = $xml->createElement('contact');
	    $contact = $container->appendChild($contact);
        
        $firstname = $xml->createElement('firstname', $firstname);
	    $firstname = $contact->appendChild($firstname);

        $lastname = $xml->createElement('lastname', $lastname);
	    $lastname = $contact->appendChild($lastname);

        $company = $xml->createElement('company', $company);
	    $company = $contact->appendChild($company);

        $phonenumber = $xml->createElement('phonenumber', $phonenumber);
	    $phonenumber = $contact->appendChild($phonenumber);

        $email = $xml->createElement('email', $email);
	    $email = $contact->appendChild($email);

        $subject = $xml->createElement('subject', $subject);
	    $subject = $contact->appendChild($subject);

        $message = $xml->createElement('message', $message);
	    $message = $contact->appendChild($message);
        
$xml->FormatOutput = true;
$string_value = $xml->saveXML();
$xml->save("../-data/example.xml");

$admin_email = "jwinn1973@fullsail.edu";
mail($admin_email, "$subject", $firstname ." ".$lastname. $subject . $message, "From:" . $email);*/

header('Location: ../pages/sent_mail.php');

exit;
