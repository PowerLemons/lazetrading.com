<?php 
if(isset($_POST['submit'])){
    $to = "sales@lazetrading.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $company_name = $_POST['company_name'];
    $alibaba_url = $_POST['alibaba_url'];
    $product_line = $_POST['product_line'];
    $subject = $company_name . " - Quote Request";
    $subject2 = "We received your Amazon quote request, " . $first_name . "!";
    $message = "First Name: " . $first_name . "\n" . "Last Name: " . $last_name . "\n" . "Company Name: " . $company_name . "\n" . "Alibaba URL: " . $alibaba_url . "\n" . "Product Line: " . $product_line;
    $message2 = "Thanks for requesting a quote from us, " . $first_name . "! We'll get back to you with a quote within 24-48 hour." . "\n\n" . "Donald Kim" . "\n" . "Sales Director" . "\n" . "Laze Trading Co.";

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    }
?>