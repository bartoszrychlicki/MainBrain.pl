<?php
class SzkoleniePage extends Page {
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
                $fields->addFieldToTab('Root.Content.Image', new ImageField('Photo'));
		return $fields;	
	}
}
/**
* 
*/
class SzkoleniePage_Controller extends Page_Controller
{
	
}
