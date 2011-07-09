<?php
/*
 * Created on Jul 7, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Oishii_User_Contact
{
	const	PERSONAL	= 1;
	const	SOCIAL		= 3;
	const	MESSENGER	= 2;
	
	/**
	 * Contact.Personal
	 */
	private	$address;
	private	$email;
	private	$phone;
	/**
	 * Contact.Social
	 */
	private	$facebook;
	private	$twitter;
	 
	/**
	 * Contact.Messenger
	 */
	private	$aim;
	private	$gtalk; // Yes, it's jabber, oh well.
	private	$icq;
	private	$msn;
	private	$skype;
	private	$xmpp; // aka - Jabber
	private	$yahoo;
	
	/**
	 * Eventually call all of this from the DB, and setup variables
	 * from fields in the table.
	 */
	public function __construct(){
		
	}
	/**
	 * Getters and Setters
	 */
	// Contact.Personal
	public function getAddress(){
		return $this->address;
	}
	public function getEmail(){
		return $this->email;
	}
	public function getPhone(){
		return $this->phone;
	}

	// Contact.Social
	public function getFacebook(){
		return $this->facebook;
	}
	public function getTwitter(){
		return $this->twitter;
	}
	// Contact.Messenger
	public function getAim(){
		return $this->aim;
	}
	public function getGtalk(){
		return $this->gtalk;
	}
	public function getIcq(){
		return $this->icq;
	}
	public function getMsn(){
		return $this->msn;
	}
	public function getSkype(){
		return $this->skype;
	}
	public function getXmpp(){
		return $this->xmpp;
	}
	public function getYahoo(){
		return $this->yahoo;
	}
	
	/**
	 * Setters
	 */
	// Contact.Personal
	public function setAddress($address, $value){
		$this->address	= $value;
	}
	public function setEmail($email, $value){
	 	$this->email	= $value;
	 }
	public function setPhone($phone, $value){
	 	$this->phone	= $value;
	 }
	// Contact.Social
	public function setFacebook($facebook, $value){
	 	$this->facebook	= $value;
	}
	public function setTwitter($twitter, $value){
	 	$this->twitter	= $value;
	}
	// Contact.Messenger
	public function setAim($aim, $value){
	 	$this->aim	= $value;
	}
	public function setMsn($msn, $value){
	 	$this->msn	= $value;
	}
	public function setYahoo($yahoo, $value){
	 	$this->yahoo	= $value;
	}
	public function setIcq($icq, $value){
	 	$this->icq	= $value;
	}
	public function setGtalk($gtalk, $value){
	 	$this->gtalk	= $value;
	}
	public function setXmpp($xmpp, $value){
	 	$this->xmpp	= $value;
	}
}