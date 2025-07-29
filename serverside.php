<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted message from the form
    $message = htmlspecialchars($_POST['message']);

    // Here, you could save the message to a database, a file, etc.
    // For simplicity, we'll save it to a file

    $file = 'messages.txt';
    $current_messages = file_get_contents($file);
    $current_messages .= "<div class='message'><p><strong>Anonymous:</strong> $message</p></div>\n";
    file_put_contents($file, $current_messages);

    // Redirect to the original page to show the new message
    header("Location: index.html");
    exit();
}
?>
