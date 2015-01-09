<?php

$xml = new DomDocument("1.0", "UTF-8");

$container = $xml->createElement('contactlist');
$container = $xml->appendChild($container);
   
        $contact = $xml->createElement('contact');
	    $contact = $container->appendChild($contact);
        
        $firstname = $xml->createElement('firstname', $_POST['firstname']);
	    $firstname = $contact->appendChild($firstname);

        $lastname = $xml->createElement('lastname', $_POST['lastname']);
	    $lastname = $contact->appendChild($lastname);

        $company = $xml->createElement('company', $_POST['company']);
	    $company = $contact->appendChild($company);

        $phonenumber = $xml->createElement('phonenumber', $_POST['phonenumber']);
	    $phonenumber = $contact->appendChild($phonenumber);

        $email = $xml->createElement('email', $_POST['email']);
	    $email = $contact->appendChild($email);

        $subject = $xml->createElement('subject', $_POST['subject']);
	    $subject = $contact->appendChild($subject);

        $message = $xml->createElement('message', $_POST['message']);
	    $message = $contact->appendChild($message);
        
$xml->FormatOutput = true;
$string_value = $xml->saveXML();
$xml->save("../-data/contact_log.xml");

header('Location: ../pages/sent_mail.php');

