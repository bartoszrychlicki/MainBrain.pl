<?php
class Wydarzenie extends RegisterableEvent {
	public static $has_many = array(
		'Tickets'   => 'EventTicket',
		'DateTimes' => 'WydarzenieRegisterableDateTime'
	);
}
class Wydarzenie_Controller extends RegisterableEvent_Controller {
    
}