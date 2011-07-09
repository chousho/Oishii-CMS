<?php
/*
 * Created on Jul 4, 2011
 *
 * To change the template for this generated file go to
 * Window - Preferences - PHPeclipse - PHP - Code Templates
 */
abstract class Render_Html_Html5_FormAbstract
{
	private	$formObj;
	
	public function __construct($formObj){
		$this->formObj	= $formObj;
	}
	public function printForm(){
		$html = "";
		/**
		 * Inherited variables
		 */
 		if($this->name != "")
 			$html	.= "  name=\"" . $this->name . "\"";
		if($this->cssId != "")
			$html .= " id=\"" . $this->cssId . "\"";
		if($this->cssClass != "")
			$html .= " class=\"" . $this->cssClass . "\"";
		if($this->jsEvent != "")
			$html .= " " . $this->jsEvent;
		return $html;
	}
}