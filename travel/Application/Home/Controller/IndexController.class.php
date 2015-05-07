<?php
	namespace Home\Controller;
	use Think\Controller;
	class IndexController extends Controller {
    	public function index(){
    		$this -> display();
    	}

    	public function regandlog(){
    		$this -> redirect('Home/Login/index');
    	}

        public function notes(){
            $this -> display();
        }
	}
?>