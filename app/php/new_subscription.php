<?php

include_once "include.php";

$email = $_REQUEST['email'];

$sql = "INSERT INTO  Subscribers (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    $number_of_days = 30;
    $date_of_expiry = time() + 60 * 60 * 24 * $number_of_days;
    setcookie("subscribed", "true", $date_of_expiry, "/");
    $subscribed = $_COOKIE['subscribed'];
    echo '<script>
                alert("Thanks for subscribing!");              
                </script>';
}

echo '<script>
window.location.href="../html/index.php";
                </script>';