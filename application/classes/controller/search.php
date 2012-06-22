<?php defined('SYSPATH') or die('No direct script access.');

class Controller_search extends Controller{
	public function action_index(){
		$name=$this->request->post("combobox");
  		$fromDate=$this->request->post("dp1");
		$toDate=$this->request->post("dp2");
		$db=Database::instance();
		$query="select * from user";
		$result=$db->query(Database::SELECT,$query,FALSE);
		foreach ($result as $row) {
			echo $row["id"].$row["name"].$row["intime"];
		}
		$view=View::factory("pages/about");
		$view->content="this is content ";
	}
}
