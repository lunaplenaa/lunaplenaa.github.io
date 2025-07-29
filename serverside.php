<?php
    $receivedData = $_POST['data_to_send'];
    // Process data, then redirect to another page or render content
    header("Location: answers.html?data=" . urlencode($receivedData));
    exit();
    ?>
