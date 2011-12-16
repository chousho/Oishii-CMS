<?php
/**
 * Textarea.php
 *
 * @author Chousho
 * @version
 * @package package_name
 * Created on Jun 14, 2011
 */
 class Form_Textarea extends FormAbstract
 {
/**
 * Variables passed through constructor
 */
 	protected	$content;

/**
 * Optional variables through __set()
 */
 	protected	$rows;
 	protected	$cols;

 	public function __construct($name, $content){
 		$this->name		= $name;
 		$this->content	= $content;
 	} // End Construct

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
    public function getCols(){
    	return $this->cols;
    }
    public function getRows(){
    	return $this->rows;
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
    public function setContent($value){
           $this->content	= $value;
    }
    public function setCols($value){
           $this->cols	= $value;
    }
    public function setRows($value){
           $this->rows	= $value;
    }
    // End Setters

    public function printForm(){
    	$html	= "";
		if($this->cssId != "")
			$html .= " id=\"" . $this->cssId . "\"";
		if($this->cssClass != "")
			$html .= " class=\"" . $this->cssClass . "\"";
		if($this->jsEvent != "")
			$html .= " " . $this->jsEvent;

    	if($this->rows)
    		$html	.= " rows=\"" . $this->rows . "\"";
    	if($this->cols)
    		$html	.= " cols=\"" . $this->cols . "\"";

		if($this->label != "")
			echo "<label id=\"" . $this->cssId . "_label\" for=\"" . $this->cssId . "\">" . $this->label . "</label>\n";

    	echo "<textarea " . $html . ">" . $this->content . "</textarea>";
    }
 } // End Class