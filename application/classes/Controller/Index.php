<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Main Controller
 *
 * @package    Rozowojowiec
 * @category   Controllers
 * @author     Dominik Baranowski
 */
class Controller_Index extends Controller_MyTemplate {

	public function action_index()
	{
            $books=ORM::factory('Book')->with('Author')->with('Publisher')->find_all();
            
            $this->template->content = View::factory('index')->set('books', $books);
	}

} // End Index
