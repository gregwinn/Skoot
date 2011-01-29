<?php
class User extends M {
	
	function getAllUsers(){
		$this->db->select('username')->from('wgb_users');
		//$this->db->from('wgb_users');
		return $this->db->getQuery();
	}
	
	function getUserByID($id){
		$this->db->select('username')->from('wgb_users')->where('id', $id);
		return $this->db->getQuery();
	}
	
	function TestUpdate($table,$data,$id){
	    $this->db->update($table, $data)->where('id', $id);
	    return $this->db->getQuery();
	}
	
	function loginUser($user){
	    $user['password'] = md5($user['password']);
	    // Validate that the user is real
	    $this->db->select('id,username,password')->from('wgb_users')->where('username', $user['username'])->where('password', $user['password']);
	    $query = $this->db->getQuery();
	    $this->db->reset();
	    $num = mysql_num_rows($query);
	    if($num == 1){
	        // User was found now set sessions and login
	        $doLogin = $this->dologin($user = mysql_fetch_array($query));
	        return $doLogin;
	    }else{
	        // User was not found in the database.
	        return FALSE;
	    }
	}
	
	private function dologin($user){
	    // Set the session ID in the database
	    $data = array('session_id' => session_id());
	    $this->db->update('wgb_users', $data)->where('id', $user['id']);
	    $query = $this->db->getQuery();
	    $this->db->reset();
	    if($query){
	        $user['session_id'] = $data['session_id'];
    	    $_SESSION['User'] = $user;
    	    return TRUE;
	    }
	    return FALSE;
	}
	
	
	// Check to see if the user is loggedin
	function isloggedin(){
		if(isset($_SESSION['User']) && session_id() == $_SESSION['User']['session_id']){
			// User is logged in
			return TRUE;
		}
		return false;
	}
	
}
?>