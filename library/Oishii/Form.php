<?php 

class Form
{
	/**
	 * Constructor constants.
	 * 
	 * Defines the type of output we're working with here.
	 * Can be updated for future markup langauges.
	 */
	protected	$markup;
	const		HTML	= "Html";
	const		HTML5	= "Html5";
	const		XML		= "Xml";
	
	// Only attributes available to form method
	const		GET		= "get";
	const		POST	= "post";
	
	/**
	 * Contains child elemnts of form (input, button, etc.)
	 * Elements will be in a named the same in the array as 
	 * what they are instantiated with.
	 * 
	 * @todo Set printForm() to save submit buttons for end
	 * @todo Create fieldset array that holds certain elements
	 */
	protected	$elements = array();
	protected	$fieldset = array();
/**
 * Variables passed through constructor
 */
	protected	$action; // Url that will process the form
	protected	$method; // Either "get" or "post". Defaults to "post".

/**
 * Optional variables through __set()
 */
	protected	$charset;
	protected	$mimetype;
	protected	$enctype;
	
	// CSS options
	protected	$cssId;
	protected	$cssClass;

	// Javascript event options
	protected	$jsEvent;
	

	/**
	 * Creates a form, allowing easy access for editing
	 * 
	 * Instantiates a "form" object that will contain child objects of 
	 * different types, ranging from objects for textareas to submit buttons.
	 * 
	 * @TODO In the future, organize this so that it is not tightly coupled.
	 */	
	public function __construct($markup, $action, $method){
		$this->setAction($action);
		$this->setMethod($method);

	}



/**
 * Getters
 */
	// Global getter
 	public function __get($name){
 		return $this->$name;
 	}
 	// Attribute specific getters
	public function getAction(){
		return $this->action;
	}
	public function getMethod(){
		return $this->method;
	}
	public function getCharset(){
		return $this->charset;
	}
	public function getMimeType(){
		return $this->mimetype;
	}
	public function getEncType(){
		return $this->enctype;
	}
	
	public function getCssId(){
		return $this->cssId;
	}
	public function getCssClass(){
		return $this->cssClass;
	}
	public function getJsEvent(){
		return $this->jsEvent;
	}
	// End Getters
/**
 * Setters
 */
	// Global Setter
 	public function __set($name, $value){
 		$this->$name	= $value;
 	}
	// Attribute specific setters
	public function setAction($value){
		$this->action	= $value;
	}

	public function setMethod($method){
		/**
		 * Default to Form::POST if doesn't match
		 */
		switch($method){			
			case self::GET:
				$this->method	= self::GET;
				break;
			case self::POST:
				$this->method	= self::POST;
				break;
			default:
				$this->method	= self::POST;
			}
	}

	public function setCharset($value){
		$this->charset	= $value;
	}

	public function setMimeType($value){
		$this->mimetype	= $value;
	}

	public function setEncType($value){
		$this->enctype	= $value;
	}
	
	public function setId($value){
		$value			= preg_replace('/[^a-z0-9_-]/', '', $value);
		$this->id	= $value;
	}
	public function setClass($value){
		$this->class	= $value;
	}

	public function setJsEvent($value){
		$this->jsEvent	= $value;
	}
	// End Setters
	
	// Create new form elements
	public function newInput($name, $type, $value){
		$this->registerElement($name, new Form_Input($name, $type, $value));
		$this->selectElement($name)->setCssId($this->cssId . "_" . $name);
	}
	
	public function newTextarea($name, $content){
		$this->registerElement($name, new Form_Textarea($name, $content));
		$this->selectElement($name)->setCssId($this->cssId . "_" . $name);
	}
	
	public function newSelect($name){
		$this->registerElement($name, new Form_Select($name, ""));
		$this->selectElement($name)->setCssId($this->cssId . "_" . $name);
	}
	// Just in case...
	public function newDropdown($name){
		$this->registerElement($name, new Form_Select($name, ""));
		$this->selectElement($name)->setCssId($this->cssId . "_" . $name);
	}
	
	public function newButton($name, $type, $content){
		$this->registerElement($name, new Form_Button($name, $type, $content));
		$this->selectElement($name)->setCssId($this->cssId . "_" . $name);
	}
	
	// Edit form elements by name
	public function selectElement($elementName){
		return $this->elements[$elementName];
	}

	/**
	 * Print out the complete form, including child elements
	 */
	public function printForm($element = ""){
		/**
		 * Create a factory where either $element is printed out, or 
		 * the whole form is printed out.
		 */
		if($element != "")
			$this->printFormElement($element);
		else
			$this->printFormAll();		
	}
	protected function printFormElement($element){
		echo $this->elements[$element]->printForm();
	}
	protected function printFormAll(){ // action, method, charset, mimetype, enctype, cssId, cssClass, jsEvent
		$html = "";
		
		$html	.= " action=\"" . $this->action . "\"";
		$html	.= " method=\"" . $this->method . "\"";
		
		if($this->cssId)
			$html	.= " id=\"" . $this->cssId . "\"";
		if($this->cssClass)
			$html	.= " class=\"". $this->cssClass ."\"";
		if($this->jsEvent)
			$html	.= " " . $this->jsEvent;
		if($this->charset)
			$html	.= " accept-charset=\"". $this->charset ."\"";
		if($this->mimetype)
			$html	.= " accept=\"". $this->mimetype ."\"";
		if($this->enctype)
			$html	.= " enctype=\"". $this->enctype ."\"";

		echo "<form" . $html . ">\n";
		foreach($this->elements as $element){
			$element->printForm() . "\n";
		} // end foreach
		echo "</form>\n";
	}
	// Register each new element
	protected function registerElement($elementName, $elementObject){
		$this->elements[$elementName]	= $elementObject;
	}
} // end Class