<?php
    require_once("database.php");
    require_once("table.php");
    
    class Persons implements Table {
        // DATA MEMBERS
        private $strokes_01;
        private $strokes_02;
        private $strokes_03;
        private $strokes_04;
        private $strokes_05;
        private $strokes_06;
        private $strokes_07;
		private $strokes_08;
		private $strokes_09;
		private $strokes_10;
		private $strokes_11;
		private $strokes_12;
		private $strokes_13;
		private $strokes_14;
		private $strokes_15;
		private $strokes_16;
		private $strokes_17;
		private $strokes_18;
        
        // CONSTRUCTOR
        function __construct($id, $strokes_01,$strokes_02,$strokes_03,$strokes_04,$strokes_05,$strokes_06,$strokes_07,$strokes_08,$strokes_09,$strokes_10,$strokes_11,$strokes_12,$strokes_13,$strokes_14,$strokes_15,$strokes_16,$strokes_17,$strokes_18) {
            $this->id     = $id;
            $this->strokes_01 = $strokes_01;
			$this->strokes_02 = $strokes_02;
			$this->strokes_03 = $strokes_03;
			$this->strokes_04 = $strokes_04;
			$this->strokes_05 = $strokes_05;
			$this->strokes_06 = $strokes_06;
			$this->strokes_07 = $strokes_07;
			$this->strokes_08 = $strokes_08;
			$this->strokes_09 = $strokes_09;
			$this->strokes_10 = $strokes_10;
			$this->strokes_11 = $strokes_11;
			$this->strokes_12 = $strokes_12;
			$this->strokes_13 = $strokes_13;
			$this->strokes_14 = $strokes_14;
			$this->strokes_15 = $strokes_15;
			$this->strokes_16 = $strokes_16;
			$this->strokes_17 = $strokes_17;
			$this->strokes_18 = $strokes_18;
            
        }
    
        // Display a table containing details about every record in the database.
        public function displayListScreen() {
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Rounds</h3>
                        </div>
                        <div class='row'>
                            <a class='btn btn-primary' onclick='personsRequest(\"displayCreate\")'>Add Round</a>
							<a class='btn btn-primary 'href='../teetyme2'>Person</a>
							<a class='btn btn-primary 'href='../courses'>Courses</a>
                            <table class='table table-striped table-bordered' style='background-color: lightgrey !important'>
                                <thead>
                                    <tr>
                                        <th>Course Id</th>
                                        <th>Hole 1</th>
                                        <th>Hole 2</th>
										<th>Hole 3</th>
										<th>Hole 4</th>
										<th>Hole 5</th>
										<th>Hole 6</th>
										<th>Hole 7</th>
										<th>Hole 8</th>
										<th>Hole 9</th>
										<th>Hole 10</th>
										<th>Hole 11</th>
										<th>Hole 12</th>
										<th>Hole 13</th>
										<th>Hole 14</th>
										<th>Hole 15</th>
										<th>Hole 16</th>
										<th>Hole 17</th>
										<th>Hole 18</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";                                    
            foreach (Database::prepare('SELECT * FROM `tt_rounds`', array()) as $row) {
                echo "
                    <tr>
					    <td>{$row['course_id']  }</td>
                        <td>{$row['strokes_01']  }</td>
                        <td>{$row['strokes_02']  }</td>
						<td>{$row['strokes_03']  }</td>
						<td>{$row['strokes_04']  }</td>
						<td>{$row['strokes_05']  }</td>
						<td>{$row['strokes_06']  }</td>
						<td>{$row['strokes_07']  }</td>
						<td>{$row['strokes_08']  }</td>
						<td>{$row['strokes_09']  }</td>
						<td>{$row['strokes_10']  }</td>
						<td>{$row['strokes_11']  }</td>
						<td>{$row['strokes_12']  }</td>
						<td>{$row['strokes_13']  }</td>
						<td>{$row['strokes_14']  }</td>
						<td>{$row['strokes_15']  }</td>
						<td>{$row['strokes_16']  }</td>
						<td>{$row['strokes_17']  }</td>
						<td>{$row['strokes_18']  }</td>
                        <td>
                            
                            <button class='btn btn-success' onclick='personsRequest(\"displayUpdate\", {$row['id']})'>Update</button><br>
                            <button class='btn btn-danger' onclick='personsRequest(\"displayDelete\", {$row['id']})'>Delete</button>
                        </td>
                    </tr>";
            }
            echo "</tbody></table></div></div></div>";
        }
        
        // Display a form for adding a record to the database.
        public function displayCreateScreen() {
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Create Persons</h3>
                        </div>
                        <div class='form-vertical'>
                            <div class='control-group'>
                                <label class='control-label" ."'>Hole 1</label>
                                <div class='controls'>
                                    <input id='strokes_01' type='text' required>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label" ."'>Hole 2</label>
                                <div class='controls'>
                                    <input id='strokes_02' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 3</label>
                                <div class='controls'>
                                    <input id='strokes_03' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 4</label>
                                <div class='controls'>
                                    <input id='strokes_04' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 5</label>
                                <div class='controls'>
                                    <input id='strokes_05' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 6</label>
                                <div class='controls'>
                                    <input id='strokes_06' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 7</label>
                                <div class='controls'>
                                    <input id='strokes_07' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 8</label>
                                <div class='controls'>
                                    <input id='strokes_08' type='text' required>
                                </div>
                            </div>
							
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 9</label>
                                <div class='controls'>
                                    <input id='strokes_09' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 10</label>
                                <div class='controls'>
                                    <input id='strokes_10' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 11</label>
                                <div class='controls'>
                                    <input id='strokes_11' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 12</label>
                                <div class='controls'>
                                    <input id='strokes_12' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 13</label>
                                <div class='controls'>
                                    <input id='strokes_13' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 14</label>
                                <div class='controls'>
                                    <input id='strokes_14' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 15</label>
                                <div class='controls'>
                                    <input id='strokes_15' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 16</label>
                                <div class='controls'>
                                    <input id='strokes_16' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 17</label>
                                <div class='controls'>
                                    <input id='strokes_17' type='text' required>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label" ."'>Hole 18</label>
                                <div class='controls'>
                                    <input id='strokes_18' type='text' required>
                                </div>
                            </div>
                            <div class='form-actions'>
                                <button class='btn btn-success' onclick='personsRequest(\"createRecord\")'>Create</button>
                                <a class='btn' onclick='personsRequest(\"displayList\")'>Back</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        
        // Adds a record to the database.
        public function createRecord() {
            
                Database::prepare(
                    "INSERT INTO tt_rounds (strokes_01, strokes_02, strokes_03, strokes_04, strokes_05, strokes_06, strokes_07, strokes_08, strokes_09, strokes_10, strokes_11, strokes_12,strokes_13, strokes_14, strokes_15, strokes_16, strokes_17, strokes_18) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
                    array($this->strokes_01, $this->strokes_02, $this->strokes_03, $this->strokes_04, $this->strokes_05, $this->strokes_06, $this->strokes_07, $this->strokes_08, $this->strokes_09, $this->strokes_10, $this->strokes_11, $this->strokes_12, $this->strokes_13, $this->strokes_14, $this->strokes_15, $this->strokes_16, $this->strokes_17, $this->strokes_18 )
                );
                $this->displayListScreen();
            
        }
        
        // Display a form containing information about a specified record in the database.
        public function displayReadScreen() {
            $rec = Database::prepare(
                "SELECT * FROM persons WHERE id = ?", 
                array($this->id)
            )->fetch(PDO::FETCH_ASSOC);
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Person Details</h3>
                        </div>
                        <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>name</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['name']}
                                    </label>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label'>email</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['email']}
                                    </label>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label'>mobile</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['mobile']}
                                    </label>
                                </div>
                            </div>
                            <div class='form-actions'>
                                <a class='btn' onclick='personsRequest(\"displayList\")'>Back</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        
        // Display a form for updating a record within the database.
        public function displayUpdateScreen() {
            $rec = Database::prepare(
                "SELECT * FROM tt_rounds WHERE id = ?", 
                array($this->id)
            )->fetch(PDO::FETCH_ASSOC);
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Update Person</h3>
                        </div>
                        <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label" ."'>Hole 1</label>
                                <div class='controls'>
                                    <input id='strokes_01' type='text' value='{$rec['strokes_01']}' required>
                                    
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label" ."'>Hole 2</label>
                                <div class='controls'>
                                    <input id='strokes_02' type='text' value='{$rec['strokes_02']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 3</label>
                                <div class='controls'>
                                    <input id='strokes_03' type='text' value='{$rec['strokes_03']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 4</label>
                                <div class='controls'>
                                    <input id='strokes_04' type='text' value='{$rec['strokes_04']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 5</label>
                                <div class='controls'>
                                    <input id='strokes_05' type='text' value='{$rec['strokes_05']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 6</label>
                                <div class='controls'>
                                    <input id='strokes_06' type='text' value='{$rec['strokes_06']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 7</label>
                                <div class='controls'>
                                    <input id='strokes_07' type='text' value='{$rec['strokes_07']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 8</label>
                                <div class='controls'>
                                    <input id='strokes_08' type='text' value='{$rec['strokes_08']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 9</label>
                                <div class='controls'>
                                    <input id='strokes_09' type='text' value='{$rec['strokes_09']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 10</label>
                                <div class='controls'>
                                    <input id='strokes_10' type='text' value='{$rec['strokes_10']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 11</label>
                                <div class='controls'>
                                    <input id='strokes_11' type='text' value='{$rec['strokes_11']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 12</label>
                                <div class='controls'>
                                    <input id='strokes_12' type='text' value='{$rec['strokes_12']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 13</label>
                                <div class='controls'>
                                    <input id='strokes_14' type='text' value='{$rec['strokes_13']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 14</label>
                                <div class='controls'>
                                    <input id='strokes_14' type='text' value='{$rec['strokes_14']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 15</label>
                                <div class='controls'>
                                    <input id='strokes_15' type='text' value='{$rec['strokes_15']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 16</label>
                                <div class='controls'>
                                    <input id='strokes_16' type='text' value='{$rec['strokes_16']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 17</label>
                                <div class='controls'>
                                    <input id='strokes_17' type='text' value='{$rec['strokes_17']}' required>
                                    
                                </div>
                            </div>
							  <div class='control-group'>
                                <label class='control-label" ."'>Hole 18</label>
                                <div class='controls'>
                                    <input id='strokes_18' type='text' value='{$rec['strokes_18']}' required>
                                    
                                </div>
                            </div>
                            <div class='form-actions'>
                                <button class='btn btn-success' onclick='personsRequest(\"updateRecord\", {$this->id})'>Update</button>
                                <a class='btn' onclick='personsRequest(\"displayList\")'>Back</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        
        // Updates a record within the database.
        public function updateRecord() {
            
                Database::prepare(
                    "UPDATE tt_rounds SET strokes_01 = ?, strokes_02 = ?, strokes_03 = ?, strokes_04 = ?, strokes_05 = ?, strokes_06 = ?, strokes_07 = ?, strokes_08 = ?, strokes_09 = ?, strokes_10 = ?, strokes_11 = ?, strokes_12 = ?, strokes_13 = ?, strokes_14 = ?, strokes_15 = ?, strokes_16 = ?, strokes_17 = ?, strokes_18 = ?  WHERE id = ?",
                    array($this->strokes_01, $this->strokes_02, $this->strokes_03, $this->strokes_04, $this->strokes_05, $this->strokes_06, $this->strokes_07, $this->strokes_08, $this->strokes_09, $this->strokes_10, $this->strokes_11, $this->strokes_12, $this->strokes_13, $this->strokes_14, $this->strokes_15, $this->strokes_16, $this->strokes_17, $this->strokes_18, $this->id)
                );
                $this->displayListScreen();
            
                
            
        }
        
        // Display a form for deleting a record from the database.
        public function displayDeleteScreen() {
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Delete Round</h3>
                        </div>
                        <div class='form-horizontal'>
                            <p class='alert alert-error'>Are you sure you want to delete ?</p>
                            <div class='form-actions'>
                                <button id='submit' class='btn btn-danger' onClick='personsRequest(\"deleteRecord\", {$this->id});'>Yes</button>
                                <a class='btn' onclick='personsRequest(\"displayList\")'>Back</a>
                            </div>
                        </div>
                    </div>
                </div>";
        }
        
        // Removes a record from the database.
        public function deleteRecord() {
            Database::prepare(
                "DELETE FROM tt_rounds WHERE id = ?",
                array($this->id)
            );
            $this->displayListScreen();
        }
        
        // Validates user input.
        private function validate() {
            $valid = true;
            // Validate Mobile
            if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $this->mobile)) {
                $this->mobileErr = "Please enter a valid phone number.";
                $valid = false;
            }
            // Validate Email
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
                $this->emailErr = "Please enter a valid email address.";
                $valid = false;
            }
            // Check for empty input.
            if (empty($this->name)) { 
                $this->nameErr = "Please enter a name.";
                $valid = false; 
            }
            if (empty($this->email)) { 
                $this->emailErr = "Please enter an email.";
                $valid = false; 
            }
            if (empty($this->mobile)) { 
                $this->mobileErr = "Please enter a phone number.";
                $valid = false; 
            } print_r($valid);
            return $valid;
        }
    }
?>