<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
	// public $stdClass;
	function index(){
		$user=M('teen');
		$this->list=$user->select();
		$this->display();
	}

	function view(){
		if($_GET['id']){
			echo '快去修改消息';
			$o=D('teen');
			$this->a=$o->find($_GET['id']);
		}
		else{
			echo'新信息添加';
		}
		$this->display();
	}

	function save(){ 
		$user=D('teen');
		if(!$user->create()){
		exit($user->getError());
		}
		else{
		if($_POST['id']){
			$user->save();
		}
		else{
			$user->add();
		}
		
		echo 1;
		 /*$this->redirect('index');*/
		}
	}

	function del(){

		$user=M('teen');
		echo $user->where("id='{$_POST['id']}'")->delete();
		// $this->redirect('index');

			}
  
	
}