<?php
class Harmonogram extends Calendar
{
    static $has_many = array (
        'Wydarzenia' => 'Wydarzenie'
    );

    static $allowed_children = array (
        'Wydarzenie'
    );
 
}
class Harmonogram_Controller extends Calendar_Controller
{
}