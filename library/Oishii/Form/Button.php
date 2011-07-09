<?php
/**
 * Button.php
 * 
 * @author Chousho
 * @version 
 * @package package_name
 * Created on Jun 14, 2011
 */
 class Form_Button extends FormAbstract
 {
/**
 * Variables passed through constructor
 */
	protected	$type; // Can be: Button, Reset, Submit
	protected	$content;
/**
 * Optional variables through __set()
 */

	public function __construct($name, $type, $content){
		switch (strtolower($type)) {
			case "button":
				$this->type	= strtolower($type);
				break;
			case "reset":
				$this->type	= strtolower($type);
				break;
			case "submit":
				$this->type	= strtolower($type);
				break;
			default:
				$this->type	= "submit";
		} // End Switch
		
		$this->name		= $name;
		$this->content	= $content;
	} // End Construct
/**
 * Getters
 */
    // Global getter
    public function __get($name){
        return $this->$name;
    }
    // Attribute specific getters
    public function __getType(){
        return $this->type;
    }
    public function __getContent(){
        return $this->content;
    }
    
    // End Getters
/**
 * Setters
 */
    // Global Setter
    public function __set($name, $value){
        $this->$name    = $value;
    }
    // Attribute specific setters
    public function __setType($value){
           $this->type		= $value;
    }
    public function __setContent($value){
           $this->content	= $value;
    }
    // End Setters	
 	
 }