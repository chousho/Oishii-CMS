<?php
/*
 * Created on Jul 4, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Render_Html_Html5_Form_Select extends Render_Html_Html5_FormAbstract
{
	private	$formObj;
	
	public function __construct(Form $formObj){
		$this->formObj	= $formObj;
    }
    
    public function printForm(){
    	$html	= "<select></select>";
    }
} // end Class
