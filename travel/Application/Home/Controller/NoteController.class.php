<?php
	namespace Home\Controller;
	use Think\Controller;
	class NoteController extends Controller {

        public function index(){
        	$User = M("notes"); // 实例化User对象 
            $data = $User->order('date DESC')-> limit(10)-> select();
            $this->data = $data;
            $hot = $User->order('voteup DESC')-> limit(10)-> select();
            $this->hot = $hot;
            $this -> display();
        }

        public function index2(){
            $this -> display();
        }

        public function read(){

            $User = M("notes"); // 实例化User对象 
            $condition['id'] = I('id');
            $data = $User->where($condition)-> select();
            // var_dump($data[0]['id']);
            // die();
            $this->data = $data;
            $this->content = htmlspecialchars_decode($data[0]['content']);

            $hot = $User->order('voteup DESC')-> limit(10)-> select();
            $this->hot = $hot;

            $User2 = M("comment"); // 实例化User对象 
            $condition2['nid'] = I('id');
            $comment = $User2->where($condition2)-> select();
            $this->comment = $comment;
            $this->count = $User2->where($condition2)->count();

            $this -> display();
        }

        public function write(){
            $User = M("notes"); // 实例化User对象 
            $hot = $User->order('voteup DESC')-> limit(10)-> select();
            $this->hot = $hot;

            $this -> display();
        }

        public function vote(){
            // echo 111;
            $User = M("notes"); // 实例化User对象 
            $condition['id'] = I('id');
            $data = $User->where($condition)-> select();
            $voteup = $data[0]['voteup'];
            $voteup++;
            echo "$voteup";
            $update = array(
                // 如果id是数据表的主键的话，系统自动会把主键的值作为更新条件来更新其他字段的值。
                'id' => I('id'),
                'voteup' => $voteup,
            );
            M('notes')->save($update);

            // var_dump($data[0]['id']);
            // die();
        }

        public function manage(){
        	if (!session('?username')) {
    			$this->error("请先登录",U('Home/Login/index'),1);
    		}
            $User = M("notes"); // 实例化User对象 
            $data = $User->order('date DESC')-> limit(3)-> select();
            $this->data = $data;

            $all = $User->order('date DESC')-> select();
            $this->all = $all;

            $this -> display();
            // dump($data[0]['id']);

        }

        public function manage2(){
            if (!session('?username')) {
                $this->error("请先登录",U('Home/Login/index'),1);
            }
            $User = M("notes"); // 实例化User对象 
            $data = $User->order('date DESC')-> limit(3)-> select();
            $this->data = $data;

            $all = $User->order('date DESC')-> select();
            $this->all = $all;

            $this -> display();
            // dump($data[0]['id']);

        }

        public function onenote(){

			$User = M("notes"); // 实例化User对象 
			$condition['id'] = I('id');
            $data = $User->where($condition)-> select();
            // var_dump($data[0]['id']);
            // die();
            $this->data = $data;
            $this->content = htmlspecialchars_decode($data[0]['content']);

            $hot = $User->order('voteup DESC')-> limit(10)-> select();
            $this->hot = $hot;

            $this -> display();
            // dump($data[0]['id']);

        }

        public function onenote2(){

            $User = M("notes"); // 实例化User对象 
            $condition['id'] = I('id');
            $data = $User->where($condition)-> select();
            // var_dump($data[0]['id']);
            // die();
            $this->data = $data;
            $this->content = htmlspecialchars_decode($data[0]['content']);

            $hot = $User->order('voteup DESC')-> limit(10)-> select();
            $this->hot = $hot;

            $this -> display();
            // dump($data[0]['id']);

        }

        public function submit(){

        	if (!session('?username')) {
    			$this->error("请先登录",U('Home/Login/index'),1);
    		}

        	if (!IS_POST) {
				E('页面不存在');
			}

			$newdata = array(
				'title' => I('titlename'),
				'author' => I('author'),
				'head' => I('contenthead'),
				'preview' => I('preview'),
				'content' => I('content'),
				'category' => I('category'),
				'date' => date("Y-m-d H:i:s"),
			);

			// var_dump($newdata);
			// die();
			if(M('notes') -> create()){
				if (M('notes')->add($newdata)) {
					$this->success('添加成功',U('Home/Note/index'));
				}else{
					E('添加失败');
				}				
			} 
			// $this->redirect('Home/Index/index');
        }

        public function commentsubmit(){

            if (!session('?username')) {
                $this->error("请先登录",U('Home/Login/index'),1);
            }

            if (!IS_POST) {
                E('页面不存在');
            }

            $newdata = array(
                'uid' => I('uid'),
                'nid' => I('nid'),
                'uname' => I('uname'),
                'content' => I('content'),
                'date' => date("Y-m-d H:i:s"),
            );

            // var_dump($newdata);
            // die();
            if(M('comment') -> create()){
                if (M('comment')->add($newdata)) {
                    $this->success('评论成功',U('Home/Note/index'));
                }else{
                    E('评论失败');
                }               
            } 
        }

        public function update(){

        	if (!session('?username')) {
    			$this->error("请先登录",U('Home/Login/index'),1);
    		}
    		
        	if (!IS_POST) {
				E('页面不存在');
			}

			$update = array(
				// 如果id是数据表的主键的话，系统自动会把主键的值作为更新条件来更新其他字段的值。
				'id' => I('contentid'),
				'title' => I('titlename'),
				'head' => I('contenthead'),
				'content' => I('content'),
				'date' => date("Y-m-d H:i:s"),
			);

			// var_dump($update);
			// die();
            if ($_SESSION['role']==1) {
                if (M('notes')->save($update)) {
                    $this->success('修改成功',U('Admin/NoteManage/index'));
                }else{
                    E('修改失败');
                }   
            }
            else{
                if (M('notes')->save($update)) {
                    $this->success('修改成功',U('Home/Note/manage'));
                }else{
                    E('修改失败');
                }   	
		    } 
			
        }
    }
?>