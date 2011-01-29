<?php
class Welcome extends C {
	
	public function index(){ 
		$this->layout_tamplate = 'views/layouts/welcome.php';
		echo $this->render('views/welcome/index.php');
	}
	
}
?>