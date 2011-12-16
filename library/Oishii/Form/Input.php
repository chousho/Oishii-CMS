<?php
/**
 * Input.php
 *
 * @author Chousho
 * @version
 * @package package_name
 * Created on Jun 14, 2011
 */
 class Form_Input extends FormAbstract
 {
/**
 * Variables passed through constructor
 */
 	protected	$inputType; // Can be: button, checkbox, password, radio, submit, *text
 	protected	$value; // String containing previous value

/**
 * Optional variables through __set()
 */
 	protected	$size; // Int containing size of input box
 	protected	$src; // Source image that can be used in place of text

 	/**
 	 * Create Input field object
 	 */

 	 /**
 	  * Input constructor
 	  *
 	  * Instantiate an object that will hold values for an HTML 5
 	  * input box of any type.
 	  *
 	  * @var $name, $type, $value
 	  */
 	 public function __construct($name, $type, $value){
 	 	$type	= strtolower($type);
 	 	switch($type){
 	 		case "button":
 	 			$this->inputType	= $type;
 	 			break;
 	 		case "checkbox":
 	 			$this->inputType	= $type;
 	 			break;
 	 		case "password":
 	 			$this->inputType	= $type;
 	 			break;
 	 		case "radio":
 	 			$this->inputType	= $type;
 	 			break;
 	 		case "submit":
 	 			$this->inputType	= $type;
 		 		break;
 	 		case "text":
 	 			$this->inputType	= $type;
 	 			break;

 	 		default:
 	 			$this->inputType	= $type;
 	 	} // end Switch

		$this->name		= $name;
		$this->value	= $value;
 	 } // End Construct

	// Getters
	public function getInputType(){
		return $this->inputType;
	}
	public function getValue(){
		return $this->value;
	}
	public function getSize(){
		return $this->size;
	}
	public function getSrc(){
		return $this->src;
	}
	// Polymorphic value usable for any form obj.
	public function getContent(){
		return $this->value;
	}
	// End Getters

 	// Setters
 	public function setInputType($value){
 	 	$this->inputType		= $value;
 	 }
 	public function setValue($value){
 	 	$this->value	= $value;
 	 }
	public function setSize($value){
 	 	$this->size		= $value;
 	 }
	public function setSrc($value){
 	 	$this->src		= $value;
 	 }
	// Polymorphic value usable for any form obj.
	public function setContent($value){
		$this->value	= $value;
	}
	// End Setters

	public function printForm(){
		print new Render_Html5_Form_Input($this);
	}
} // End Class
