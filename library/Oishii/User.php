<?php
/**
 * User.php
 * 
 * @author Chousho
 * @version 
 * @package package_name
 * Created on Jun 13, 2011
 */
 
 class Oishii_User
 {
 	const	CONTACT 	= 3;
 	const	GROUP		= 2;
 	const	LOGIN		= 1;
 	const	SETTINGS	= 4;
 	
 	/* User Information */
 	protected	$userId;
	protected	$username;

	/* Objects */
 	protected	$contact;
 	protected	$login; 	
	protected	$settings;
	
	/* User Priveleges and Permissions */
	/**
	 * User Accounts
	 * Site Content
	 * Site Settings
	 */
	protected	$group;
	protected	$priv;
	 
 	public function __construct($username){
 		$this->username	= $username; 		
 	}
 	
 	public function __get($variable){
 		return $this->$variable;
 	}

	public function loadObj($object){
		switch($object){
			case self::CONTACT:
				$this->contact	= new Oishii_User_Contact($this->userId);
				break;
			case self::GROUP:
				$this->group	= new Oishii_User_Group($this->userId);
				break;
			case self::SETTINGS:
				$this->settings	= new Oishii_User_Settings($this->userId);
				break;
			default:
			throw new Exception("No User sub-class with that name.");
		}
	}

 /**
  * Getters and Setters
  */

	// User.Info
	public function getUserId(){
	  return $this->userId;
	}

	public function getUsername(){
	  return $this->username;
	}

	// User.Objects
	public function getGroup($attribute){
		if($attribute){
			$attribute = ucfirst($attribute);
			return $this->group->get{$attribute}();
		}
		return $this->group;
	}
	public function getSettings($attribute){
		if($attribute){
			$attribute = ucfirst($attribute);
			return $this->settings->get{$attribute}();
		}
		return $this->settings;
	}
	public function getContact($attribute){
		if($attribute){
			$attribute = ucfirst($attribute);
			return $this->contact->get{$attribute}();
		}
		return $this->contact;
	}
	public function getLogin($password){
		return new Oishii_User_Login($password, $this->username);
	}
	//Setters
	public function setUserID($userId){
	  $this->userid = $userId;
	}

	public function setUsername($username){
	  $this->username = $username;
	}

	public function deleteUser(){
	}
 } // end Class
