<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = htmlspecialchars($_POST['message']);
    $file = 'messages.txt';
    $current_messages = file_get_contents($file);
    $current_messages .= "<div class='message'><p><strong>Anonymous:</strong> $message</p></div>\n";
    file_put_contents($file, $current_messages);

    header("Location: index.html");
    exit();
}
?>
