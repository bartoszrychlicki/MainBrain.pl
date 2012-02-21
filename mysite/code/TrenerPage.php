<?php
class TrenerPage extends Page {
	static $db = array(
		);
	static $has_one = array(
		'Photo'			=> 'Image'
		);

	public function getCMSFields()
	{
		$fields = parent::getCMSFields();
		$fields->renameField('Title', 'Imię i nazwisko');
		$fields->renameField('Content', 'Opis trenera');
		
		$fields->addFieldToTab('Root.Content.Images', new ImageField('Photo', 'Zdjęcie paszportowe'));
		
		return $fields;
		
	}
}
/**
* 
*/
class TrenerPage_Controller extends Page_Controller
{
	
}
