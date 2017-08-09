<?php
    require_once("database.php");
    require_once("table.php");
    
    class Courses implements Table {
        // DATA MEMBERS
        private $id;
        private $name;
        private $nameErr;
        private $description;
        private $desErr; 
		private $city; 
		private $cityErr; 
		private $adress; 
		private $addErr;
		private $state; 
		private $stateErr;
        private $mobile;
        private $mobileErr; 
		private $email; 
		private $emailErr; 
		private $par_01; 
		private $par_02; 
		private $par_03; 
		private $par_04; 
		private $par_05; 
		private $par_06; 
		private $par_07; 
		private $par_08; 
		private $par_09; 
		private $par_10; 
		private $par_11; 
		private $par_12; 
		private $par_13; 
		private $par_14; 
		private $par_15; 
		private $par_16; 
		private $par_17; 
		private $par_18; 
		private $par01Err; 
		private $par02Err; 
		private $par03Err; 
		private $par04Err; 
		private $par05Err; 
		private $par06Err; 
		private $par07Err; 
		private $par08Err; 
		private $par09Err; 
		private $par10Err; 
		private $par11Err; 
		private $par12Err; 
		private $par13Err; 
		private $par14Err; 
		private $par15Err; 
		private $par16Err; 
		private $par17Err; 
		private $par18Err;
        
        // CONSTRUCTOR
        function __construct($id, $name, $description, $city, $email, $mobile,$address, $state, $par_01, $par_02,$par_03,$par_04,$par_05,$par_06,$par_07,$par_08,$par_09,$par_10,$par_11,$par_12,$par_13,$par_14,$par_15,$par_16,$par_17,$par_18) {
            $this->id = $id;
            $this->name = $name;
            $this->description  = $description; 
			$this ->city = $city; 
			$this ->address = $address;
			$this ->state = $state;
            $this->mobile = $mobile;
			$this->email = $email;
			$this->par_01 = $par_01;
			$this->par_02 = $par_02;
			$this->par_03 = $par_03;
			$this->par_04 = $par_04;
			$this->par_05 = $par_05;
			$this->par_06 = $par_06;
			$this->par_07 = $par_07;
			$this->par_08 = $par_08;
			$this->par_09 = $par_09;
			$this->par_10 = $par_10;
			$this->par_11 = $par_11;
			$this->par_12 = $par_12;
			$this->par_13 = $par_13;
			$this->par_14 = $par_14;
			$this->par_15 = $par_15;
			$this->par_16 = $par_16;
			$this->par_17 = $par_17;
			$this->par_18 = $par_18;
			
        }
    
        // Display a table containing details about every record in the database.
        public function displayListScreen() {
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Courses</h3>
                        </div>
                        <div class='row'>
                            <a class='btn btn-primary' onclick='personsRequest(\"displayCreate\")'>Add Course</a>
							<a class='btn btn-primary 'href='../teetyme2'>Persons</a>
                            <table class='table table-striped table-bordered' style='background-color: lightgrey !important'>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Description</th>
										<th>City</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>";                                    
            foreach (Database::prepare('SELECT * FROM `tt_courses`', array()) as $row) {
                echo "
                    <tr>
                        <td>{$row['name']  }</td>
						<td>{$row['description']  }</td>
                        <td>{$row['city'] }</td>
                        <td>{$row['mobile']}</td>
                        <td>
                            <button class='btn' onclick='personsRequest(\"displayRead\", {$row['id']})'>Read</button><br>
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
                            <h3>Create Courses</h3>
                        </div>
                        <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->nameErr))?'':' error') ."'>name</label>
                                <div class='controls'>
                                    <input id='name' type='text' required>
                                    <span class='help-inline'>{$this->nameErr}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->desErr))?'':' error') ."'>description</label>
                                <div class='controls'>
                                    <input id='description' type='text' required>
                                    <span class='help-inline'>{$this->desErr}</span>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->emailErr))?'':' error') ."'>email</label>
                                <div class='controls'>
                                    <input id='email' type='text' placeholder='name@svsu.edu' required>
                                    <span class='help-inline'>{$this->emailErr}</span>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->mobileErr))?'':' error') ."'>mobile</label>
                                <div class='controls'>
                                    <input id='mobile' type='text' placeholder='555-5555-555' required>
                                    <span class='help-inline'>{$this->mobileErr}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->cityErr))?'':' error') ."'>city</label>
                                <div class='controls'>
                                    <input id='city' type='text' placeholder='city' required>
                                    <span class='help-inline'>{$this->cityErr}</span>
                                </div> 
								</div>
								<div class='control-group'>
                                <label class='control-label". ((empty($this->addErr))?'':' error') ."'>address</label>
                                <div class='controls'>
                                    <input id='address' type='text' required>
                                    <span class='help-inline'>{$this->addErr}</span>
                                </div> 
								</div>
								<div class='control-group'>
                                <label class='control-label". ((empty($this->stateErr))?'':' error') ."'>state</label>
                                <div class='controls'>
                                    <input id='state' type='text'  required>
                                    <span class='help-inline'>{$this->stateErr}</span>
                                </div> 
								</div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par01Err))?'':' error') ."'>par_01</label>
                                <div class='controls'>
                                    <input id='par_01' type='text' required>
                                    <span class='help-inline'>{$this->par01Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par02Err))?'':' error') ."'>par_02</label>
                                <div class='controls'>
                                    <input id='par_02' type='text' required>
                                    <span class='help-inline'>{$this->par02Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par03Err))?'':' error') ."'>par_03</label>
                                <div class='controls'>
                                    <input id='par_03' type='text' required>
                                    <span class='help-inline'>{$this->par03Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par04Err))?'':' error') ."'>par_04</label>
                                <div class='controls'>
                                    <input id='par_04' type='text' required>
                                    <span class='help-inline'>{$this->par04Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par05Err))?'':' error') ."'>par_05</label>
                                <div class='controls'>
                                    <input id='par_05' type='text' required>
                                    <span class='help-inline'>{$this->par05Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par06Err))?'':' error') ."'>par_06</label>
                                <div class='controls'>
                                    <input id='par_06' type='text' required>
                                    <span class='help-inline'>{$this->par06Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par07Err))?'':' error') ."'>par_07</label>
                                <div class='controls'>
                                    <input id='par_07' type='text' required>
                                    <span class='help-inline'>{$this->par07Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par08Err))?'':' error') ."'>par_08</label>
                                <div class='controls'>
                                    <input id='par_08' type='text' required>
                                    <span class='help-inline'>{$this->par08Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par09Err))?'':' error') ."'>par_09</label>
                                <div class='controls'>
                                    <input id='par_09' type='text' required>
                                    <span class='help-inline'>{$this->par09Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par10Err))?'':' error') ."'>par_10</label>
                                <div class='controls'>
                                    <input id='par_10' type='text' required>
                                    <span class='help-inline'>{$this->par10Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par11Err))?'':' error') ."'>par_11</label>
                                <div class='controls'>
                                    <input id='par_11' type='text' required>
                                    <span class='help-inline'>{$this->par11Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par12Err))?'':' error') ."'>par_12</label>
                                <div class='controls'>
                                    <input id='par_12' type='text' required>
                                    <span class='help-inline'>{$this->par12Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par13Err))?'':' error') ."'>par_13</label>
                                <div class='controls'>
                                    <input id='par_13' type='text' required>
                                    <span class='help-inline'>{$this->par13Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par14Err))?'':' error') ."'>par_14</label>
                                <div class='controls'>
                                    <input id='par_14' type='text' required>
                                    <span class='help-inline'>{$this->par14Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par15Err))?'':' error') ."'>par_15</label>
                                <div class='controls'>
                                    <input id='par_15' type='text' required>
                                    <span class='help-inline'>{$this->par15Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par16Err))?'':' error') ."'>par_16</label>
                                <div class='controls'>
                                    <input id='par_16' type='text' required>
                                    <span class='help-inline'>{$this->par16Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par17Err))?'':' error') ."'>par_17</label>
                                <div class='controls'>
                                    <input id='par_17' type='text' required>
                                    <span class='help-inline'>{$this->par17Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par18Err))?'':' error') ."'>par_18</label>
                                <div class='controls'>
                                    <input id='par_18' type='text' required>
                                    <span class='help-inline'>{$this->par18Err}</span>
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
            if ($this->validate()) {
                Database::prepare(
                    "INSERT INTO tt_courses (name, description, address, city, state, email, mobile,par_01 , par_02,par_03,par_04,par_05,par_06,par_07,par_08,par_09,par_10,par_11,par_12,par_13,par_14,par_15, par_16,par_17,par_18) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",
                    array($this->name,$this->description,$this->address,$this->city,$this->state, $this->email, $this->mobile, $this->par_01 ,$this->par_02,$this->par_03,$this->par_04,$this->par_05,$this->par_06,$this->par_07,$this->par_08,$this->par_09,$this->par_10,$this->par_11,$this->par_12,$this->par_13,$this->par_14,$this->par_15,$this->par_16,$this->par_17,$this->par_18)
                );
                $this->displayListScreen();
            } else {
                $this->displayCreateScreen();
            }
        }
        
        // Display a form containing information about a specified record in the database.
        public function displayReadScreen() {
            $rec = Database::prepare(
                "SELECT * FROM tt_courses WHERE id = ?", 
                array($this->id)
            )->fetch(PDO::FETCH_ASSOC);
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Course Details</h3>
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
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>address</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['address']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>city</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['city']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>state</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['state']}
                                    </label>
                                </div>
                            </div>
							
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_01</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_01']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_02</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_02']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_03</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_03']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_04</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_04']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_05</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_05']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_06</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_06']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_07</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_07']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_08</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_08']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_09</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_09']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_10</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_10']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_11</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_11']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_12</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_12']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_13</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_13']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_14</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_14']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_15</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_15']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_16</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_16']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_17</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_17']}
                                    </label>
                                </div>
                            </div>
							 <div class='form-horizontal'>
                            <div class='control-group'>
                                <label class='control-label'>par_18</label>
                                <div class='controls'>
                                    <label class='checkbox'>
                                        {$rec['par_18']}
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
                "SELECT * FROM tt_courses WHERE id = ?", 
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
                                <label class='control-label". ((empty($this->nameErr))?'':' error') ."'>name</label>
                                <div class='controls'>
                                    <input id='name' type='text' value='{$rec['name']}' required>
                                    <span class='help-inline'>{$this->nameErr}</span>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->emailErr))?'':' error') ."'>email</label>
                                <div class='controls'>
                                    <input id='email' type='text' value='{$rec['email']}' required>
                                    <span class='help-inline'>{$this->emailErr}</span>
                                </div>
                            </div>
                            <div class='control-group'>
                                <label class='control-label". ((empty($this->mobileErr))?'':' error') ."'>mobile</label>
                                <div class='controls'>
                                    <input id='mobile' type='text' value='{$rec['mobile']}' required>
                                    <span class='help-inline'>{$this->mobileErr}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->cityErr))?'':' error') ."'>city</label>
                                <div class='controls'>
                                    <input id='city' type='text' value='{$rec['city']}' required>
                                    <span class='help-inline'>{$this->cityErr}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->addErr))?'':' error') ."'>address</label>
                                <div class='controls'>
                                    <input id='address' type='text' value='{$rec['address']}' required>
                                    <span class='help-inline'>{$this->addErr}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->stateErr))?'':' error') ."'>state</label>
                                <div class='controls'>
                                    <input id='state' type='text' value='{$rec['state']}' required>
                                    <span class='help-inline'>{$this->stateErr}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par01Err))?'':' error') ."'>par_01</label>
                                <div class='controls'>
                                    <input id='par_01' type='text' value='{$rec['par_01']}' required>
                                    <span class='help-inline'>{$this->par01Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par02Err))?'':' error') ."'>par_02</label>
                                <div class='controls'>
                                    <input id='par_02' type='text' value='{$rec['par_02']}' required>
                                    <span class='help-inline'>{$this->par02Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par03Err))?'':' error') ."'>par_03</label>
                                <div class='controls'>
                                    <input id='par_03' type='text' value='{$rec['par_03']}' required>
                                    <span class='help-inline'>{$this->par03Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par04Err))?'':' error') ."'>par_04</label>
                                <div class='controls'>
                                    <input id='par_04' type='text' value='{$rec['par_04']}' required>
                                    <span class='help-inline'>{$this->par04Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par05Err))?'':' error') ."'>par_05</label>
                                <div class='controls'>
                                    <input id='par_05' type='text' value='{$rec['par_05']}' required>
                                    <span class='help-inline'>{$this->par05Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par06Err))?'':' error') ."'>par_06</label>
                                <div class='controls'>
                                    <input id='par_06' type='text' value='{$rec['par_06']}' required>
                                    <span class='help-inline'>{$this->par06Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par07Err))?'':' error') ."'>par_07</label>
                                <div class='controls'>
                                    <input id='par_07' type='text' value='{$rec['par_07']}' required>
                                    <span class='help-inline'>{$this->par07Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par08Err))?'':' error') ."'>par_08</label>
                                <div class='controls'>
                                    <input id='par_08' type='text' value='{$rec['par_08']}' required>
                                    <span class='help-inline'>{$this->par08Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par09Err))?'':' error') ."'>par_09</label>
                                <div class='controls'>
                                    <input id='par_09' type='text' value='{$rec['par_09']}' required>
                                    <span class='help-inline'>{$this->par09Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par10Err))?'':' error') ."'>par_10</label>
                                <div class='controls'>
                                    <input id='par_10' type='text' value='{$rec['par_10']}' required>
                                    <span class='help-inline'>{$this->par10Err}</span>
                                </div>
                            </div>
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par11Err))?'':' error') ."'>par_11</label>
                                <div class='controls'>
                                    <input id='par_11' type='text' value='{$rec['par_11']}' required>
                                    <span class='help-inline'>{$this->par11Err}</span>
                                </div>
                            </div>
								<div class='control-group'>
                                <label class='control-label". ((empty($this->par12Err))?'':' error') ."'>par_12</label>
                                <div class='controls'>
                                    <input id='par_12' type='text' value='{$rec['par_12']}' required>
                                    <span class='help-inline'>{$this->par12Err}</span>
                                </div>
                            </div> 
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par13Err))?'':' error') ."'>par_13</label>
                                <div class='controls'>
                                    <input id='par_13' type='text' value='{$rec['par_13']}' required>
                                    <span class='help-inline'>{$this->par13Err}</span>
                                </div>
                            </div> 
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par14Err))?'':' error') ."'>par_14</label>
                                <div class='controls'>
                                    <input id='par_14' type='text' value='{$rec['par_14']}' required>
                                    <span class='help-inline'>{$this->par14Err}</span>
                                </div>
                            </div> 
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par15Err))?'':' error') ."'>par_15</label>
                                <div class='controls'>
                                    <input id='par_15' type='text' value='{$rec['par_15']}' required>
                                    <span class='help-inline'>{$this->par15Err}</span>
                                </div>
                            </div> 
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par16Err))?'':' error') ."'>par_16</label>
                                <div class='controls'>
                                    <input id='par_16' type='text' value='{$rec['par_16']}' required>
                                    <span class='help-inline'>{$this->par16Err}</span>
                                </div>
                            </div> 
							<div class='control-group'>
                                <label class='control-label". ((empty($this->par17Err))?'':' error') ."'>par_17</label>
                                <div class='controls'>
                                    <input id='par_17' type='text' value='{$rec['par_17']}' required>
                                    <span class='help-inline'>{$this->par17Err}</span>
                                </div>
                            </div> <div class='control-group'>
                                <label class='control-label". ((empty($this->par18Err))?'':' error') ."'>par_18</label>
                                <div class='controls'>
                                    <input id='par_18' type='text' value='{$rec['par_18']}' required>
                                    <span class='help-inline'>{$this->par18Err}</span>
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
            if ($this->validate()) {
                Database::prepare(
                    "UPDATE tt_courses SET name = ?, email = ?, mobile = ?, city = ?, address = ?, state =?, par_01 = ?, par_02 = ?, par_03 = ?, par_04= ?, par_05 = ?, par_06 = ?, par_07 = ?, par_08 = ?, par_09 = ?, par_10 = ?, par_11 = ?, par_12 = ?, par_13 = ?, par_14 = ?, par_15 = ?, par_16 = ?, par_17 = ?, par_18 = ? WHERE id = ?" ,
                    array($this->name,$this->description, $this->email, $this->mobile, $this->city, $this->address, $this->state,$this->par_01 ,$this->par_02,$this->par_03,$this->par_04,$this->par_05,$this->par_06,$this->par_07,$this->par_08,$this->par_09,$this->par_10,$this->par_11,$this->par_12,$this->par_13,$this->par_14,$this->par_15,$this->par_16,$this->par_17,$this->par_18, $this->id)
                );
                $this->displayListScreen();
            } else {
                $this->displayUpdateScreen();
            }
        }
        
        // Display a form for deleting a record from the database.
        public function displayDeleteScreen() {
            echo "
                <div class='container'>
                    <div class='span10 offset1'>
                        <div class='row'>
                            <h3>Delete Person</h3>
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
                "DELETE FROM tt_courses WHERE id = ?",
                array($this->id)
            );
            $this->displayListScreen();
        }
        
        // Validates user input.
        private function validate() {
            $valid = true;
           // if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $this->mobile)) {
           //     $this->mobileErr = "Please enter a valid phone number.";
           //     $valid = false;
           // }
           // // Validate Email
           // if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
           //     $this->emailErr = "Please enter a valid email address.";
           //     $valid = false;
           // }
            // Check for empty input.
            if (empty($this->name)) { 
                $this->nameErr = "Please enter a name.";
                $valid = false; 
            }
            if (empty($this->email)) { 
                $this->emailErr = "Please enter an email.";
                $valid = false; 
            }
			if (empty($this->description)) { 
                $this->desErr = "Please enter a description.";
                $valid = false; 
            }
			if (empty($this->address)) { 
                $this->addErr = "Please enter an address.";
                $valid = false; 
            }
			if (empty($this->city)) { 
                $this->cityErr = "Please enter a city.";
                $valid = false; 
            }
			if (empty($this->state)) { 
                $this->stateErr = "Please enter a state.";
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