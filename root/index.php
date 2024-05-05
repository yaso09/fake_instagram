<?php

$route = $_SERVER["REQUEST_URI"];

if ($route == "/")
$res = file_get_contents("index.html");
elseif ($route == "/theveledd")
$res =
"<script>
    window.location.href = './';
</script>";
else
$res = file_get_contents("https://instagram.com$res");


echo $res;

