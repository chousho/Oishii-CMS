<?php
/*
 * Created on Jul 7, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Oishii_User_Login
{
	private	$userId;
	private	$username;
	private	$password;
	
	/* Password related items */
	private	$hash;
	private	$salt;
	
	public function __construct($password, $username){
		
	}
	/**
	 * Getters only. No setters
	 */
	public function getSalt(){
		return $this->userId;
	}
	public function getHash(){
		
	}
	
	public function newSalt($length = 16){
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
	}
	public function createHash($salt, $key){
		/* In most cases, $key will be a password */
		return ( sha1( $salt . $key . sha1($salt) ) );
	}
	
}