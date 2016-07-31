<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// public $stdClass;
	function index(){

		$user = M('teen');
		$this->list = $user->select();
		/*dump($list);*/
		// dump($this->list);


		$this->display();
	}


	function view(){

		if($_GET['id']){

			echo '编辑';
			$o = M('teen');
			$this->a = $o->find($_GET['id']);
		}else{
			echo '添加';
		}

		$this->display();
	}


	function save(){ //保存从view传来的数据
		//检查数据
		//写入数据
		$user = M('teen');
		$user->create();
		if($_POST['id']){ //判断修改还是添加

			echo '编辑';
			
			$user->save();
		}else{
			// echo '添加';
			$user->add();
		}
		

		$this->redirect('index');
	}
	function del(){
		$user=M('teen');
		$user->where("id='{$_GET[id]}'")->delete();
		$this->redirect('index');
	}
   /* public function test(){
		
		$data = new stdClass();
		$data->job='cook';
		$data->age='33';

		$user=M('teen');
		$user->create($data);
		

		dump($user->select());
	}*/
	
}