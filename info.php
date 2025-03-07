<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"] ?? "";
    if ($username == "abc") {
        echo "Verify";
    } else {
        echo "Error";
    }
}
?>