<?php
class TrainingPage extends Page {
	static $db = array(
		
		);
	static $has_one = array(
		'Photo'			=> 'Image',
		);
	
	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->renameField('Title', 'Nazwa szkolenia');
		$fields->renameField('Content', 'Opis szkolenia');
		
		
		return $fields;
		
	}
}
/**
* 
*/
class TrainingPage_Controller extends Page_Controller
{
	
}
