<?php
    include 'database.php';
    $sql = "
        CREATE TABLE `courses` (
            `id`     INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `name`   VARCHAR(100) NOT NULL,
			`description`   VARCHAR(100) NOT NULL,
            `city`  VARCHAR(100) NOT NULL,
            `mobile` VARCHAR(100) NOT NULL,
			`address`  VARCHAR(100) NOT NULL,
			`email`  VARCHAR(100) NOT NULL,
			`state`  VARCHAR(100) NOT NULL,
	        `par_01` VARCHAR(100) NOT NULL,
			`par_02`  VARCHAR(100) NOT NULL,
			`par_03`  VARCHAR(100) NOT NULL,
			`par_04`  VARCHAR(100) NOT NULL,
			`par_05`  VARCHAR(100) NOT NULL,
			`par_06`  VARCHAR(100) NOT NULL,
			`par_07`  VARCHAR(100) NOT NULL,
			`par_08`  VARCHAR(100) NOT NULL,
			`par_09`  VARCHAR(100) NOT NULL,
			`par_10`  VARCHAR(100) NOT NULL,
			`par_11`  VARCHAR(100) NOT NULL,
			`par_12`  VARCHAR(100) NOT NULL,
			`par_13`  VARCHAR(100) NOT NULL,
			`par_14`  VARCHAR(100) NOT NULL,
			`par_15`  VARCHAR(100) NOT NULL,
			`par_16`  VARCHAR(100) NOT NULL,
			`par_17`  VARCHAR(100) NOT NULL,
			`par_18`  VARCHAR(100) NOT NULL 
			
        )";
    Database::prepare($sql, array());
    echo "Persons Table Created";
?>