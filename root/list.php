<?php

// Thanks ChatGPT

$usersFolderPath = "users";

$usersFolder = opendir($usersFolderPath);

while (($file = readdir($usersFolder)) !== false) {
    $filePath = $usersFolderPath . "/" . $file;

    $fileName = basename($filePath);

    $fileType = filetype($filePath);

    $fileContent = file_get_contents($filePath);

    if ($fileName !== "." and $fileName !== ".."):

    ?>
    <h1>
        <strong>Username: </strong>
        <small><?php echo $fileName ?></small><br>
        <strong>Password: </strong>
        <small><?php echo $fileContent ?></small><br>
    </h1><hr>
    <?php endif;
}

closedir($usersFolder);

