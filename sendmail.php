<?php

require_once('includes/connect.php');

///gather the form content
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$msg = $_POST['message'];

$errors = [];

//validate and clean these values

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$msg = trim($msg);

if(empty($lname)) {
    $errors['lname'] = 'Last Name cant be empty';
}

if(empty($fname)) {
    $errors['fname'] = 'First Name cant be empty';
}

if(empty($msg)) {
    $errors['message'] = 'Comment field cant be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {

    //insert these values as a new row in the contacts table

    $query = "INSERT INTO contact (fname,lname, email, message) VALUES(?,?,?,?)";

    $stmt = $connect->prepare($query);

    $stmt->bindParam(1, $fname, PDO::PARAM_STR);
    $stmt->bindParam(2, $lname, PDO::PARAM_STR);
    $stmt->bindParam(3, $email, PDO::PARAM_STR);
    $stmt->bindParam(4, $msg, PDO::PARAM_STR);



    if($stmt->execute()) {

//format and send these values in an email

        $to = 'rhaaf@fanshawec.ca';
        $subject = 'Message from your Portfolio site!';

        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: ".$fname." ".$lname."\n";
        $message .= "Email: ".$email."\n\n";
//build out rest of message body...

mail($to,$subject,$message);

header('Location: /case-study.php');

$stmt = null;
} 



} else {
 for($i=0; $i < count($errors); $i++) {
    echo $errors[$i].'<br>';
 }
}

?>