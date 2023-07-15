<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = $name . ' <' . $email . '>';
    $headers = "From: sender's name <yourmailid@gmail.com>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email." . error_get_last()['message'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMail</title>
    <style>
        @media screen and (max-width: 800px) and (orientation: landscape) {
            body {
                color: rgb(6, 6, 95);
            }
        }
    </style>
    <link rel="stylesheet" href="Easy_Mail.css" />
</head>

<body>


    <form action="Easy_Mail.php" method="post">
        <h1>iMail</h1>
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">EMAIL</label>
        <input type="email" name="email" id="email" required>
        <br>
        <label for="subject">SUBJECT</label>
        <input type="text" name="subject" id="subject" required>
        <br>
        <label for="message">MESSAGE</label>
        <textarea type="text" name="message" id="message" rows="4" cols="50" required></textarea>
        <br>
        <br>
        <br>
        <input type="submit" value="SEND EMAIL">
    </form>
</body>

</html>