<?php
/*
The MIT License

Copyright (c) 2010 Greg Winn (Winn.ws)

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
class db {
	
	var $where = array();
	var $insert = array();
	var $update = array();
	var $delete = array();
	var $order = '';
	
	function db(){
		if ($dbc = @mysql_connect (DBHOST, DBUSER, DBPASS) ) {
			//select db
			if( !@mysql_select_db(DB) ) {
		    	die ('MySQL ERROR: ' . mysql_error() . '');
		    }

		}else{
			//this will display a readable error
			die ('We can not connect to your database - MySQL ERROR: ' . mysql_error() . '');
		}
	}
	
	function reset(){
	    $this->where = array();
    	$this->insert = array();
    	$this->update = array();
		$this->delete = array();
		$this->order = '';
    	$this->select = '';
		$this->delete = '';
    	$this->from = '';
    	$this->insertTable = '';
		$this->deleteTable = '';
    	$this->updateTable = '';
    	return $this;
	}
	
	/*function __unset($var){
	    unset($this->$var);
	}*/
	
	function sanisql($value) {
	        //----- Stripslashes form magic quotes
	        if (get_magic_quotes_gpc()) {
	                $value = stripslashes($value);
	        }
	        //----- Apply proper quotes if not an interger
	        if (!is_numeric($value)) {
	                $value = "'" . mysql_real_escape_string($value) . "'";
	        }
	        return $value;
	}
	
	function insert($table,$data){
	    $insertArray = $this->insert;
	    foreach($data as $key => $val){
	        $insertArray[$key] = $val;
	    }
	    $this->insert = $insertArray;
	    $this->insertTable = $table;
	    return $this;
	}
	
	function update($table,$data){
	    $updateArray = $this->update;
	    foreach($data as $key => $val){
	        $updateArray[$key] = $val;
	    }
	    $this->update = $updateArray;
	    $this->updateTable = $table;
	    return $this;
	}
	
	function delete($table){
	    $this->deleteTable = $table;
	    return $this;
	}
	
	function order($val){
		$this->order = " ORDER BY " . $val;
		return $this;
	}
	
	function select($val){
		$this->select = $val;
		return $this;
	}
	function from($val){
		$this->from = $val;
		return $this;
	}
	
	function where($key, $val){
		$whereArray = $this->where;
		$whereArray[$key] = $val;
		$this->where = $whereArray;
		return $this;
	}
	
	function getQuery(){
		if(!empty($this->select)){
		    return $this->getSelect();
		}elseif(!empty($this->deleteTable)){
			return $this->getDelete();
		}elseif(!empty($this->insertTable)){
		    return $this->getInsert();
		}elseif(!empty($this->updateTable)){
		    return $this->getUpdate();
		}else{
		    return FALSE;
		}
	}
	
	// For Updates only do not call this direct always use getQuery()
	private function getUpdate(){
	    $updateQ = '';
	    $uc = 0;
	    $updateCount = count($this->update);
	    foreach($this->update as $key => $val){
	        $uc++;
	        if($updateCount == $uc){
	            $updateQ .= " " . $key . " = " . $this->sanisql($val);
	        }else{
	            $updateQ .= " " . $key . " = " . $this->sanisql($val) . ",";
	        }
	    }
	    
	    $whereQ = $this->whereForm();
	    
	    $q = mysql_query("UPDATE " . $this->updateTable . " SET" . $updateQ . " " . $whereQ . ";");
	    return $q;
	    // for debug
	    //return "UPDATE " . $this->updateTable . " SET" . $updateQ . " " . $whereQ . ";";
	}
	
	private function getDelete(){
		$whereQ = $this->whereForm();
		return mysql_query("DELETE FROM " . $this->deleteTable . " " . $whereQ . ";");
	}
	
	// For Inserts only do not call this direct always use getQuery()
	private function getInsert(){
	    $insertQ = '';
	    $ic = 0;
	    $insertCount = count($this->insert);
	    foreach($this->insert as $key => $val){
	        $ic++;
	        if($insertCount == $ic){
	            $insertQ .= " " . $key . " = " . $this->sanisql($val);
	        }else{
	            $insertQ .= " " . $key . " = " . $this->sanisql($val) . ",";
	        }
	    }
	   	return mysql_query("INSERT INTO " . $this->insertTable . " SET" . $insertQ . ";"); 
	    // for debug
	    //return "INSERT INTO " . $this->insertTable . " SET" . $insertQ . ";";
	}
	
	// For Select only do not call this direct always use getQuery()
	private function getSelect(){
	    if(count($this->where) == 0){
			return mysql_query("SELECT " . $this->select . " FROM " . $this->from . $this->order . ";");
			// for debug
			//return "SELECT " . $this->select . " FROM " . $this->from . ";";
		}else{
			$whereQ = $this->whereForm();
			$q = mysql_query("SELECT " . $this->select . " FROM " . $this->from . " " . $whereQ . $this->order . ";");
			return $q;
			// for debug
			//return "SELECT " . $this->select . " FROM " . $this->from . " " . $whereQ . ";";
		}
	}
	
	private function whereForm(){
	    $cw = 0;
		$whereQ = '';
		foreach($this->where as $key => $val){
			if($cw == 0){
				$whereQ = $whereQ . "WHERE " . $key . "=" . $this->sanisql($val);
			}else{
				$whereQ = $whereQ . " AND " . $key . "=" . $this->sanisql($val);
			}
			$cw++;
		}
		return $whereQ;
	}
	
	private function checkforerror($q){
	    if(!mysql_error($q)){
	        return $q;
	    }else{
	        return "ERROR";
	    }
	}
}
?>