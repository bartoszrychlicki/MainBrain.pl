<?php
/**
* 
*/
class SzkoleniaHolder extends Page
{
	static $db = array();
	static $has_one = array();
	static $allowed_children = array ('SzkoleniePage');
}
/**
* 
*/
class SzkoleniaHolder_Controller extends Page_Controller
{

}
