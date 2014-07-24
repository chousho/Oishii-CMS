<?php
/**
 * Login.php
 *
 * @author Chousho
 * @version
 * @package package_name
 * Created on Jun 13, 2011
 */

 class Oishii_Authorization
 {
 	protected	$username;
 	protected	$db_password;
 	protected	$input_password;
 	protected	$salt;

	protected	$valid = null;

 	public function __construct($username, $password){
 		global $db;
 		$this->username			= $username;
 		$this->input_password	= $password;

 		$query	= "SELECT `username`, `password`, `salt` FROM `user` WHERE `username` = ?";

 		$login	= $db->prepare($query);

 		$login->bind_param("s", $username);
 		$login->execute();

 		$login->bind_result($this->username, $this->db_password, $this->salt);
 		$login->fetch();
 	} // end construct

 	public function compareHash(){
 		if($this->createHash($this->db_password) == createHash($this->input_password))
	 		return true;
 		else
 			return false;
 	}
 	public function createHash($password, $salt){
 		return sha1($salt . $password . $salt);
 	}

 	public function createSalt($length = 16){
 		$salt = '';
 		$max_length	= 64;
 		$min_length	= 5;

 		if(!is_int($length) || $length < $min_length || $length > $max_length)
 			$length = 16;

 		for($i = 1; $i <= $length; $i++){
 			$salt	.= chr(mt_rand(33, 126) );
 		}

 		if(strlen($salt) == $length){
 			return $salt;
 		} else {
 			/**
 			 * @TODO Create an Error Report for this
 			 */
 			echo "OH NO! Error";
 			echo "<p>" . strlen($salt). " and " . $length . " and " . $salt . "</p>";
 		}
 		return false;
 	} // end createSalt

 	public function isValid(){
 		if($this->valid)
 			return true;
		else
			return null;
 	}
 }
