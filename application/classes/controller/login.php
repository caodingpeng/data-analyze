<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller{
	public function action_login()
	{
		$post=$this->request->post();
		$auth=Auth::instance();
		$hashpsw=$auth->hash($post['password']);
		$success=Auth::instance()->login($post['username'],$post['password']);
		if($success){
			echo Request::factory("welcome/index")->execute();
		}else{
			$view=View::factory("pages/login");
			$view->loginError="用户名或密码错误";
			$this->response->body($view);
		}
	}
}
