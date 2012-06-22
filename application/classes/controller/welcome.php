<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template {
	
	public function before()
	{
		$session=Session::instance();
		echo $session->get("is_login");
		if($session->get("is_login")==FALSE&&$this->request->action()!="index"&&$this->request->action()!="login"){
			$this->request->redirect("/welcome/index");
		}
		$this->template="template";
		$page_title="test page";
		View::bind_global('page_title', $page_title);
		parent::before();
		
		
	}
	
	public function action_index()
	{
		$user=array(
			'username'=>'liyan',
			'password'=>'312312312',
			'email'=>'abtttt@abc.com',
			'password_confirm'=>'312312312'
		);
		
		/*ORM::factory('user')->create_user($user, array(
		'username',
		'password',
		'email',)
		);*/
		$view = View::factory("pages/login");
		$view->loginError="";
		$this->template->body=$view;
	}
  	
	public function action_login()
	{
		$session=Session::instance();
		echo Debug::vars( $session->get("test")); 
		$session->set('test','123');
		
		$post=$this->request->post();
		$auth=Auth::instance();
		$hashpsw=$auth->hash($post['password']);
		$success=Auth::instance()->login($post['username'],$post['password']);
		if($success){
			$view = View::factory("pages/about");
			$view->content="";
			$this->template->body=$view;
		}else{
			$view=View::factory("pages/login");
			$view->loginError="用户名或密码错误";
			$this->template->body=$view;
			//$this->response->body($view);
		}
	}
  public function action_echo()
  {
  		
  }
  public function action_search()
  {
  	$name=$this->request->post("combobox");
	$fromDate=$this->request->post("dp1");
	$toDate=$this->request->post("dp2");
	$db=Database::instance();
	//$insert="insert into user(uid,name,intime)values(444,'wang','2012-2-10')";
	//$result=$db->query(Database::INSERT,$insert,false);
	//echo "insert ".$result[0];
	$query="select * from user";
	$result=$db->query(Database::SELECT,$query,false);
	$view = View::factory("pages/about");
	$recharge=View::factory("pages/recharge");
	$recharge->result=$result;
	$view->content=$recharge;
	$this->template->body=$view;
		
  }
  public function action_about()
  {
  	$view = View::factory("pages/about");
	$view->content="";
	$this->template->body=$view;
  }
}
