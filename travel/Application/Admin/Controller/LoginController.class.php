<?php
	namespace Admin\Controller;
	use Think\Controller;
	class LoginController extends Controller {

	    public function index(){
	        $this->display();
	    }

	    public function login(){
			if (!IS_POST) {
				halt('页面不存在');
			}

			 $code = I('code');
			 $id='';
			 $verify = new \Think\Verify();
			 if(! $verify->check($code, '')){
			   $this->error('验证码错误');
			  }

			$pwd = I('password','','md5');
			$username = I('username');
			$user = M('user') -> where(array('username'=>$username)) -> find();	

			if(!$user || $user['password']!=$pwd){
				$this -> error('账号或密码错误');
			}

			if ($user['islock']) {
				$this -> error('用户被锁定');
			}
			if ($user['role']!=1) {
				$this -> error('账号没权限');
			}
			$update = array(
				//若id存在，自动查找该id
				'id' => $user['id'],
				'logintime' => date("Y-m-d H:i:s" ,time()) ,
				'loginip' => get_client_ip(),

				);

			M('user') -> save($update); 
			
			session('uid', $user['id']);
			session('role', $user['role']);
			session('username', $user['username']);
			session('logintime', $user['logintime']);
			session('loginip', $user['loginip']);

			//跳转到index
			$this->redirect('Admin/Index/index');
		}
		public function verify(){
			$config = array(    
				'fontSize' => 15,    // 验证码字体大小    
				'length' => 3,     // 验证码位数    
				'useNoise' => false, // 关闭验证码杂点
				);
			$Verify = new \Think\Verify($config);
			$Verify->entry();
		}
	}
?>