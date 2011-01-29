<?php
class Admin extends C {
	
	function Admin(){
		$this->UsersModel = new User();
		$this->ServicesModel = new Services();
		$this->User = $_SESSION['User'];
	}
	
	public function index(){ 
		if(!$this->UsersModel->isloggedin()){ // Validate the user
			$this->loginError('You are not logged in');
		}
		
		// Check for new posts
		$this->newposts = $this->ServicesModel->checkForNewPosts();
		
		$this->layout_tamplate = 'views/layouts/admin.php';
		echo $this->render('views/admin/index.php');
	}
	
	// Active Posts page
	function activeposts(){
		if(!$this->UsersModel->isloggedin()){ // Validate the user
			$this->loginError('You are not logged in');
		}
		
		// Query for active posts
		$this->activeposts = $this->ServicesModel->getActivePosts();
		
		$this->layout_tamplate = 'views/layouts/admin.php';
		echo $this->render('views/admin/active.php');
	}
	
	public function settings(){
		$this->layout_tamplate = 'views/layouts/admin.php';
		echo $this->render('views/admin/settings.php');
	}
	
	public function login(){
		echo $this->render('views/admin/login.php');
	}
	
	public function logout(){
		if($this->UsersModel->isloggedin()){
			// Log the user out
			session_destroy();
			return $this->loginError('Logged out');
		}else{
			session_destroy();
			return $this->loginError('You are not logged in');
		}
	}
	
	public function dologin(){
		if(isset($_POST)){
		    
		    // Validate
		    $error = TRUE;
		    if(empty($_POST['username']) || empty($_POST['password']) || $_POST['username'] == "Username" || $_POST['password'] == "Password"){
		        $error = FALSE;
		    }
		    
		    if($error){
		        $login = $this->UsersModel->loginUser($_POST);
		        return $login ? $this->loginFinish() : $this->loginError('Login failed, try again');
		    }else{
		        return $this->loginError('Username or Password can not be blank');
		    }
		    
		}
	}
	
	function loginError($e = 'Unknown'){
		$e = urlencode($e);
	    header("Location: guestbook.php?url=admin/login&error=" . $e);
	}
	function loginFinish(){
		// Redirect to the admin area
	    header("Location: guestbook.php?url=admin");
	}
}
?>