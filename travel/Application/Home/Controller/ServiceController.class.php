<?php
	namespace Home\Controller;
	use Think\Controller;
	class ServiceController extends Controller {
    	public function index(){
    		$this -> display();
    	}

    	public function map(){
    		$this -> display();
    	}

    	public function flight(){
    		$this -> display();
    	}

        public function raider(){
            $this -> display();
        }
	}
?>