<?php
/**
 * Select.php
 *
 * @author Chousho
 * @version
 * @package package_name
 * Created on Jun 14, 2011
 */
 class Form_Select extends FormAbstract
 {
/**
 * Variables passed through constructor
 */

/**
 * Optional variables through __set()
 */
 	protected	$menu	= array();

 	protected	$group 	= array();
	protected	$option	= array();

public function __construct($name){
	$this->name	= $name;
}

/**
 * Getters
 */
    // Global getter
    public function __get($name){
        return $this->$name;
    }
    // Attribute specific getters
    public function get(){
        return $this;
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
//    public function set($value){
//           $this = $value;
//    }
    // End Setters

	public function newGroup($groupName){
		$this->group[]	= $groupName;
	}

 	public function newOption($content, $selected = 0){
		/**
		 * Create new option object.
		 *
		 * If $group has a value, $menu will hold the latest key value
		 * for $option and $group.
		 */
		$option[]	= new Form_Select_Option($content, $selected);

 		if(count($this->group) < 1){
 			$this->menu[]	= array(
 				count($this->option)-1,
 				count($this->group)-1
 			);
 		} // End If

 	} // End newOption

 	public function printForm(){
 		$html = "";
 		if($this->menu[0] != ""){
 			for($i = 0; $i < count($this->menu); $i++){

 			}
 		} else {
 			for($i = 0; $i < count($this->option); $i++){
 				$html	.= "";
 			}
 		}
 	} // End printForm
 }