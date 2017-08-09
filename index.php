<?php
    if(isset($_POST['table'])) {
        // Set Table
        if ($_POST['table'] == "courses") {
            require("courses.php");
            $table = new Courses(
                $_POST['id'],
                $_POST['name'],
				$_POST['description'],
                $_POST['city'],
                $_POST['mobile'],
				$_POST['address'],
				$_POST['email'],
				$_POST['state'],
                $_POST['par_01'],
                $_POST['par_02'],
				$_POST['par_03'],
				$_POST['par_04'],
				$_POST['par_05'],
				$_POST['par_06'],
				$_POST['par_07'],
				$_POST['par_08'],
				$_POST['par_09'],
				$_POST['par_10'],
				$_POST['par_11'],
				$_POST['par_12'],
				$_POST['par_13'],
				$_POST['par_14'],
				$_POST['par_15'],
				$_POST['par_16'],
				$_POST['par_17'],
				$_POST['par_18']
							
				
				
				
            );
        }

        // Select Action
            if($_POST['action'] == "displayList"  ) $table->displayListScreen();
        elseif($_POST['action'] == "displayCreate") $table->displayCreateScreen();
        elseif($_POST['action'] == "createRecord" ) $table->createRecord();
        elseif($_POST['action'] == "displayRead"  ) $table->displayReadScreen();
        elseif($_POST['action'] == "displayUpdate") $table->displayUpdateScreen();
        elseif($_POST['action'] == "updateRecord" ) $table->updateRecord();
        elseif($_POST['action'] == "displayDelete") $table->displayDeleteScreen();
        elseif($_POST['action'] == "deleteRecord" ) $table->deleteRecord();
    }
?>