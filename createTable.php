<?php
    include 'database.php';
    $sql = "
        CREATE TABLE `persons` (
            `id`     INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `fname`   VARCHAR(100) NOT NULL,
			`lname`   VARCHAR(100) NOT NULL,
            `email`  VARCHAR(100) NOT NULL,
            `mobile` VARCHAR(100) NOT NULL
        )";
    Database::prepare($sql, array());
    echo "Persons Table Created";
?>