<?php
	namespace Admin\Controller;
	use Think\Controller;
	class UserController extends Controller {
	    public function index(){
	    	if (!isset($_SESSION['uid']) || !isset($_SESSION['username'])) {
				$this -> redirect('Admin/Login/index');
			}
			$User = M('user'); // 实例化User对象
	    	$count      = $User->count();// 查询满足要求的总记录数
	    	$Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	    	$show       = $Page->show();// 分页显示输出
	    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	    	$list = $User->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
	    	// var_dump($list);
	    	// die();
	    	$this->assign('list',$list);// 赋值数据集
	    	$this->assign('page',$show);// 赋值分页输出
	    	$this->display(); // 输出模板
	    }

	    public function edit(){
	    	$User = M("user"); // 实例化User对象 
			$condition['id'] = I('id');
            $data = $User->where($condition)-> select();

            $this->v = $data;
            //             var_dump($data);
            // die();
            $this -> display();
	    }

	     public function update(){

			$update = array(
				// 如果id是数据表的主键的话，系统自动会把主键的值作为更新条件来更新其他字段的值。
				'id' => I('id'),
				'username' => I('username'),
				'password' => I('password'),
				'email' => I('email'),
				'islock' => I('islock'),
			);

			// var_dump($update);
			// die();
			if (M('user')->save($update)) {
				$this->success('修改成功',U('Admin/User/index'));
			}else{
				E('修改失败');
			}	

	    }

	    public function delete(){
	    	// echo "111";
	    	// die();
			$id = I('id','','intval');
			// M('wish')->where(array('id' => $id))->delete();
			// 或者
			if(M('user')->delete($id)){
				$this->success('删除成功',U('Admin/User/index'));
			}else{
				$this->error('删除失败');
			}
	    }
	}
?>