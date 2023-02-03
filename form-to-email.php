<?php
if(isset($_POST['email'])) {
    $errors = '';
    $myemail = 'info@freekvandenbosch.nl'; // <----- Put your email address here
    $name = $_POST['name'];
    $email_address = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['number'];
    $subject = $_POST['subject'];
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)) {
        $errors .= "\n Error: Invalid email address";
    }
    if( empty($errors)) {
        $to = $myemail;
        $email_subject = "Contact form submission: $name";
        $email_body =   "You have received a new message. "." Here are the details:\n Name: $name \n 
                        "."Email: $email_address\n Message \n $message";
        $headers = "From: $myemail\n";
        $headers .= "Reply-To: $email_address";
        mail($to,$email_subject,$email_body,$headers);
        // redirect to the 'contact' page
        header('Location: contact.html');
    }
}
?>