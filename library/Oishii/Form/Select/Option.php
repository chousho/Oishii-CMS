<?php
/**
 * Option.php
 * 
 * @author Chousho
 * @version 
 * @package package_name
 * Created on Jun 14, 2011
 */

class Form_Select_Option
{
	
	/**
 * Variables passed through constructor
 */
	protected	$content;
/**
 * Optional variables through __set()
 */
 	protected	$value;
	protected	$selected;
	
	public function __construct($content, $selected){
		$content		= strtolower($content);
		$content		= preg_replace('/[^a-z0-9_]/', '', $content);
		$this->content	= str_replace(" ", "_", $content);
		
		if($selected == 1 || $selected == "yes")
			$this->selected	= 1;
	} // End Constructor
/**
 * Getters
 */
    // Global getter
    public function __get($name){
        return $this->$name;
    }
    // Attribute specific getters
    public function getContent(){
        return $this->content;
    }
    public function getValue(){
        return $this->selected;
    }
    public function getSelected(){
        return $this->selected;
    }
    // End Getters
/**
 * Setters
 */
    // Global Setter
    public function set($name, $value){
        $this->$name    = $value;
    }
    // Attribute specific setters
    public function setContent($value){
           $this->content	= $value;
    }
    public function setValue($value){
           $this->value		= $value;
    }
    public function setSelected($value){
           $this->selected	= $value;
    }
    // End Setters
}
