<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Templatecontrol extends Controller_Template {
	
	public function before()
	{
		$this->template="template";
		$page_title="test page";
		View::bind_global('page_title', $page_title);
		parent::before();
		
		
	}
	
	public function action_index()
	{
		$view = View::factory("pages/login");
		//$this->template->body=$view;
		$this->response->body($view);
	}
  
  public function action_login()
  {
  	$view = View::factory("pages/about");
	$view->output="echo";
	$view->platname="友人玩";
	$session=Session::instance("database");
	$type=$session->set("plattype",1);
	$this->template->body=$view;
  }
  public function action_about()
  {
  	$view = View::factory("pages/about");
	$config = Kohana::$config->load("products");
	//var_dump($config->get());
	
	$nameList="";
	foreach ($config as $key => $value) {
		echo $value['name'] . "<br />";
	}
	
	$view->output=$nameList;
	//$this->template->body=$view;
  }
  public function action_changeplat()
  {
  	$session=Session::instance("database");
	echo "session ".$session->get("plattype");
	//$session->set("plattype",1);
	$view = View::factory("pages/about");
	$view->output="echo";
	$view->platname="玩玩";
	$this->template->body=$view;
  }
}
