<?php
/*
 * Created on Jul 4, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Render_Html_Html5_Form_Select
{
	private	$formObj;
	
	public function __construct(Form $formObj){
		$this->formObj	= $formObj;
		return $this->printForm();
	}
    public function printForm(){
    	$html = "";
    	if($this->selected){
    		$html	= "<option value=\"" . $this->formObj->value. "\" selected=\"selected\">" . $this->formObj->content . "</option>";
        } else {
    		$html	= "<option value=\"" . $this->formObj->value. "\">" . $this->formObj->content . "</option>";
        }
        return $html;
    }
}