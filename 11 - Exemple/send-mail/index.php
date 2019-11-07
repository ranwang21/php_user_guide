<?php
require_once './sendmail.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // get all the post field value
    $sender = trim(filter_input(INPUT_POST, 'sender', FILTER_SANITIZE_STRING));
    $receiver = trim(filter_input(INPUT_POST, 'receiver', FILTER_SANITIZE_STRING));
    $subject = trim(filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING));
    $content = trim(filter_input(INPUT_POST, 'content', FILTER_SANITIZE_STRING));

    // validate input
    if (empty($sender) || empty($receiver) || empty($subject) || empty($content)) {
        $message = 'Please fill in the required fields: Sender, Receiver, and Content';
    } elseif (!filter_var($sender, FILTER_VALIDATE_EMAIL)) {
        $message = 'Invalid email format on sender email address';
    } elseif (!filter_var($receiver, FILTER_VALIDATE_EMAIL)) {
        $message = 'Invalid email format on receiver email address';
    } else {
        // semd mail
        $message = sendMail($sender, $receiver, $subject, $content);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Send Mail</title>
</head>

<body class='container'>
    <div class="alert alert-primary" role="alert">
        Send - Email
    </div>


    <?php
            if (isset($message)) {
                echo "<div class='alert";
                if ($message === 'Success') {
                    echo '-success';
                } else {
                    echo '-danger';
                }
                echo "' role='alert'>";
                echo $message;
                echo '</div>';
            }
        ?>

    <form action="index.php" method="post">
        <div class="form-group">
            <label for="email">From: </label>
            <input type="email" class="form-control" id="email" name="sender" aria-describedby="emailHelp"
                placeholder="sender's email">
        </div>
        <div class="form-group">
            <label for="to">To: </label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="receiver"
                placeholder="who's going to receive the email">
        </div>
        <div class="form-group">
            <label for="subject">Subject: </label>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="subject">
        </div>
        <div class="form-group">
            <label for="content">Content: </label>
            <textarea class="form-control" id="content" rows="3" name="content"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>