<?php
class Gbook extends C {
	
	var $posterrors = array();
	var $userpostdata = array();
	
	function Gbook(){
		$this->ServicesModel = new Services();
		$this->UsersModel = new User();
	}
	
	// Resets
	private function resetuserpostdata(){
		$this->userpostdata = array();
	}
	
	// POST only
	// NEW POST
	function newpost(){
		$postdata = $_POST;
		foreach($postdata as $key => $value){
			if(empty($value)){
				$this->posterrors[$key] = "Empty";
			}
			
			// Validate the email address
			if($key == "email"){
				$emailcheck = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
				if(!$emailcheck){
					$this->posterrors[$key] = "Email address is invalid";
				}else{
					$_POST['email'] = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
				}
			}
		}
		
		$this->userdata($_POST);
		//var_dump($this->userpostdata);
		
		if(count($this->posterrors) != 0){
			$this->showerror($this->posterrors);
			return false;
		}else{
			// The post has no error so we can now send to the database.
			$InsertArray = $_POST;
			$InsertArray['created_at'] = date("Y-m-d H:i:s"); 
			$InsertArray['userdata'] = '';
			foreach($this->userpostdata as $key => $val){
				$InsertArray['userdata'] .= $key . "=>" . $val . ",";
			}
			$this->ServicesModel->insertPost($InsertArray);
		}
		//var_dump($postdata);
	}
	
	// Build userdata array to place in the db.
	function userdata($data){
		foreach($data as $key => $value){
			$ud = explode("userdata_", $key);
			if(!empty($ud[1])){
				$this->userpostdata[$ud[1]] = $value;
				unset($_POST['userdata_' . $ud[1]]);
			}
		}
		return $this->userpostdata;
	}
	
	
	// Error Report
	function showerror($e){
		$qstring = '?';
		foreach($e as $key => $value){
			$qstring .= $key . '=' . $value . '&';
		}
		header("Location: index.php" . $qstring);
	}
	
	// Approve Post
	function approvepost(){
		$id = $_POST['postid'];
		if(!$this->UsersModel->isloggedin()){
			header("Location: guestbook.php?url=admin/login");
		}
		$this->ServicesModel->approvePost($id);
		echo "TRUE";
	}
	
	// POST ONLY
	function deletepost(){
		$id = $_POST['id'];
		if(!$this->UsersModel->isloggedin()){
			header("Location: guestbook.php?url=admin/login");
		}
		$this->ServicesModel->deletePost($id);
		echo "TRUE";
	}
	
}
?>