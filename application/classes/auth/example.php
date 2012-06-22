<?php
class Auth_Example extends Auth
{
	protected function _login($username,$password,$remember)
	{
		 // Do username/password check here
		// $db=Database::instance();
		 if($password==$this->password($username)){
		 	return true;
		 }
		 return FALSE;		
	}
	public function password($username)
	{
		//return the password for the username
		$query=DB::query(Database::SELECT, 'select * from user where name like ":name%"' );
		$query->param(':name',$username);
		$result=$query->execute();
		
		return $result->get('password');
	}
	public function check_password($password)
	{
		// Check to see if the logged in user has the given password
		if($this->hash($password)==$result->get("password")){
			return true;
		}
		return false;
	}
	 public function logged_in($role = NULL)
    {
        // Check to see if the user is logged in, and if $role is set, has all roles
        return FALSE;
    }
 
    public function get_user($default = NULL)
    {
        // Get the logged in user, or return the $default if a user is not found
        
        return "";
    }
}
?>