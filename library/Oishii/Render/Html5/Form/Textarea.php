<?php
/*
 * Created on Jul 4, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
class Render_Html_Html5_Form_Textarea extends Render_Html_Html5_FormAbstract
{
	public function __construct($formObj){
		parent::__construct($formObj);
	}
    private function printForm(){
		$html .= parent::printForm();
				
    	if($this->formObj->rows)
    		$html .= " rows=\"" . $this->formObj->rows . "\"";
    	// end rows
		if($this->formObj->cols)
			$html .= " cols=\"" . $this->formObj->cols . "\"";
		// end cols	
    	return "<textarea" . $html . ">" . $this->formObj->content . "</textarea>";
    }
} // end Class
