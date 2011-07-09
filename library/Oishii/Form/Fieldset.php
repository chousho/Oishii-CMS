<?php
/**
 * Fieldset.php
 * 
 * @author Chousho
 * @version 
 * @package package_name
 * Created on Jun 16, 2011
 */

 class Form_Fieldset
 {
 	protected	$title;
 	
 	// Store Elements
 	protected	$elements;
 	
 	public function printForm($elementName){
 		if($elementName != "")
 			$this->elements[$elementName]->printForm();
 		else {
 			
 		}
 	}
 }