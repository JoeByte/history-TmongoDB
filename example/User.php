<?php
include './Db_User.php';

class User 
{
	public function index() {
		$argv = array (
				'uid' => 123456 
		);
		$ret = Db_User::find($argv);
		print_r($ret);
	}
}