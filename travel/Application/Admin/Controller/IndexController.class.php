<?php
	namespace Admin\Controller;
	use Think\Controller;
	class IndexController extends Controller {
	    public function index(){
	    	if (!isset($_SESSION['uid']) || $_SESSION['role']!=1 || !isset($_SESSION['username'])) {
				$this -> redirect('Admin/Login/index');
			}
	        $this->display();
	    }

	    public function logout(){
			session_unset();
			session_destroy();
			$this -> redirect('Admin/Login/index');
		}
	}
?>