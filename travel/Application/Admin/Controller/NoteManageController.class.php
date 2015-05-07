<?php
	namespace Admin\Controller;
	use Think\Controller;
	class NoteManageController extends Controller {
	    public function index(){

	    	$User = M('notes'); // 实例化User对象
	    	$count      = $User->count();// 查询满足要求的总记录数
	    	$Page       = new \Think\Page($count,20);// 实例化分页类 传入总记录数和每页显示的记录数(25)
	    	$show       = $Page->show();// 分页显示输出
	    	// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
	    	$list = $User->order('date DESC')->limit($Page->firstRow.','.$Page->listRows)->select();
	    	// var_dump($list);
	    	// die();
	    	$this->assign('list',$list);// 赋值数据集
	    	$this->assign('page',$show);// 赋值分页输出
	    	$this->display(); // 输出模板
	    	// $User = M("notes"); // 实例化User对象 
      //       $data = $User->where($condition)-> select();
      //       // var_dump($data[0]['id']);
      //       // die();
      //       $this->data = $data;
      //       $this->content = htmlspecialchars_decode($data[0]['content']);

      //       $User2 = M("comment"); // 实例化User对象 
      //       $condition2['nid'] = I('id');
      //       $comment = $User2->where($condition2)-> select();
      //       $this->comment = $comment;
      //       $this->count = $User2->where($condition2)->count();
	    }

	    public function edit(){
	    	$User = M("notes"); // 实例化User对象 
			$condition['id'] = I('id');
            $data = $User->where($condition)-> select();

            $this->data = $data;
            //             var_dump($data);
            // die();
            $this->content = htmlspecialchars_decode($data[0]['content']);
            $this -> display();
	    }

	   	public function delete(){
			$id = I('id','','intval');
			// M('wish')->where(array('id' => $id))->delete();
			// 或者
			if(M('notes')->delete($id)){
				$this->success('删除成功',U('Admin/NoteManage/index'));
			}else{
				$this->error('删除失败');
			}
	    }

	   	public function welcome(){
	   		$this->display();
	    }

	}
?>