<?php
try {
    // Host
    define("DB_HOST", "localhost");
    // Database Name
    define("DB_NAME", "SSA Academy");
    // User
    define("DB_USER", "root");
    // Password
    define("DB_PASS", "");

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        echo "Connection is fine";
    }
} catch (mysqli_sql_exception $e) {
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'inf@yourwebsite.com';
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n" .
        "User Email: $visitor_email.\n" .
        "Subject: $subject.\n" .
        "User Message: $message .\n";

    $to = '>ssaaceadmy@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
}
?>;