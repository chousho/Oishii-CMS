<?php
/**
 * Abstract.php
 *
 * @author Chousho
 * @version
 * @package package_name
 * Created on Jun 14, 2011
 */
abstract class FormAbstract
{
	// Global variables
	protected	$name;
	protected	$label;

	// CSS options
	protected	$id;
	protected	$class;

	// Javascript event options
	protected	$jsEvent;

	/**
	 * Getters
	 */
	public function getName(){
		return $this->name;
	}
	public function getLabel(){
		return $this->label;
	}
	public function getId(){
		return $this->id;
	}
	public function getClass(){
		return $this->class;
	}
	public function getJsEvent(){
		return $this->jsEvent;
	}
	// End Getters

	/**
	 * Setters
	 */
 	public function setName($name){
 	 	$this->name		= $name;
 	 }
 	public function setLabel($label){
 	 	$this->label		= $label;
 	 }

	public function setId($id){
		$id			= preg_replace('/[^a-z0-9_-]/', '', $id);
		$this->id	= $id;
	}
	public function setClass($classname){
		$this->class	= $classname;
	}

	public function setJsEvent($jsEvent){
		$this->jsEvent	= $jsEvent;
	}
	// End Setters

	/**
	 * Print the required output for the forms.
	 * Usually this will be HTML (whatever version is available)
	 * However this may also be used as a text form and be output
	 * as a PDF at some future time.
	 */
	 public function printForm(){
		throw new Exception("No output defined for this form element.");
	}
}