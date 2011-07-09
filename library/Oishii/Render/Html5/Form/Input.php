<?php
/*
 * Created on Jul 4, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Render_Html_Html5_Form_Input extends Render_Html_Html5_FormAbstract
{
	private	$formObj;
	
	public function __construct(Form $formObj){
		$this->formObj	= $formObj;
    }
    
    private function printForm(){
		$html .= parent::printForm();
		if($this->size != "")
			$html .= " size=\"" . $this->id . "\"";

		if($this->value != "")
			$html .= " value=\"" . $this->value . "\"";

		if($this->label != "")
			echo "<label id=\"" . $this->id . "_label\" for=\"" . $this->id . "\">" . $this->label . "</label>\n";
		
		return "<input" . $html . ">\n";
    }
} // end Class
