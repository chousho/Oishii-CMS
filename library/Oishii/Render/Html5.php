<?php

class Render_HTML_HTML5
{
	private	$language;
	private	$charset;

	private	$content;


	public function __construct(){

		;
	}

	public function includeCSS($cssFile){
		if(!isarray($cssFile) )
		echo "<link href=\"$cssFile\" rel=\"stylesheet\" type=\"text/css\">";
		else {
			foreach($cssFile as $css){
					echo "<link href=\"$css\" rel=\"stylesheet\" type=\"text/css\">";
			}
		}
	} // end includeCSS

	public function includeJavascript($jsFile){
		if(!isarray($jsFile))
			echo "<script type=\"text/javascript\" src=\"{$jsFile}\"></script>";

		else{
			foreach($jsFile as $js){
				echo "<script type=\"text/javascript\" src=\"{$js}\"></script>";
			}
		}
	} // end includeJavascript


} // End Class HTML5
