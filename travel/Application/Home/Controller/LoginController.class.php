<?php
	namespace Home\Controller;
	use Think\Controller;
	class LoginController extends Controller {
    	public function index(){
    		if (session('?username')) {
    			$this->redirect('Home/Index/myspace');
    		}
    		$this -> display();
    	}

		public function myspace(){
			$this -> display();
    	}

    	public function blank(){
    		$this->display();
    	}

    	public function userinf(){
    		$this->display();
    	}

    	public function userinfupdate(){
    // 		$oldpass=I('oldpass','','md5');
    // 		$newpass=I('newpass','','md5');
    // 		$newpass2=I('newpass2','','md5');
    // 		$user = M('user') -> where(array('id'=>session('id'))) -> find();
    // 		$oldpassinsql=$user[0]['password'];
    // 		if($newpass==$newpass2 && $oldpass==$oldpassinsql){
    // 			$update = array(
				// 	//若id存在，自动查找该id
				// 	'id' => session('id'),
				// 	'password' => $newpass ,
				// 	);
				// M('user') -> save($update); 
				// $this->success('修改成功',U('Home/Login/myspace'));
    // 		}
    // 		else{
    // 			E('修改失败',U('Home/Login/myspace'));
    // 		}
    	}

    	public function register(){
			if (!IS_POST) {
				E('页面不存在');
			}

			$username = I('username');
			$user = M('user') -> where(array('username'=>$username)) -> find();

			if($user){
				$this -> error('该用户名已存在！');
			}

			$newdata = array(
				'username' => I('username'),
				'password' => I('password','','md5'),
				'email' => I('email'),
				'logintime' => time(),
				'loginip' => get_client_ip(),
			);

			if(M('user') -> create()){
				M('user') -> add($newdata);
			} 

			$this->redirect('Home/Index/index');
		}

		public function login(){
			if (!IS_POST) {
				E('页面不存在');
			}

			// if (I('code','','md5')!=session('verify')) {
			// 	$this->error('验证码错误');
			// }

			$pwd = I('password','','md5');
			$username = I('username');
			$user = M('user') -> where(array('username'=>$username)) -> find();	

			if(!$user || $user['password']!=$pwd){
				$this -> error('账号或密码错误');
			}

			if ($user['islock']) {
				$this -> error('用户被锁定');
			}

			$update = array(
				//若id存在，自动查找该id
				'id' => $user['id'],
				'logintime' => date("Y-m-d H:i:s") ,
				'loginip' => get_client_ip(),
				);

			M('user') -> save($update); 
			
			session('uid', $user['id']);
			session('role', $user['role']);
			session('username', $user['username']);
			session('logintime', $user['logintime']);
			session('loginip', $user['loginip']);

			//跳转到index
			$this->success('登陆成功',U('Home/Index/index'));
		}
		public function logout(){
			session_unset();
			session_destroy();
			$this -> redirect('Home/Index/index');
    	}
	}
?>