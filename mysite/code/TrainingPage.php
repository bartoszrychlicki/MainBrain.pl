<?php
class TrainingPage extends Page {
	static $db = array(
		'Price' => 'Decimal'
		);
	static $has_one = array(
		'Photo'	=> 'Image',
		);
	
	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->renameField('Title', 'Nazwa szkolenia');
		$fields->renameField('Content', 'Opis szkolenia');
		$fields->addFieldToTab('Root.Content.Main', new NumericField('Price', 'Cena'));
		return $fields;	
	}
}
/**
* 
*/
class TrainingPage_Controller extends Page_Controller
{
	
}
