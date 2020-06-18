<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $message = $_POST['message'];

    $email_form="madhurmhatrejm@gmail.com";
    $email_subject="new form submission";
    $email_body="You have recieved a mail from:$name.\n".$message;
    $to="madhuramhatrejm@mgail.com";
    $headers = "From: $email_from \r \n";
    $headers ="Reply-to: $visitor_email \r \n";
    mail($to, $email_subject,$email_body,$headers);
    header("location :index.html");



}