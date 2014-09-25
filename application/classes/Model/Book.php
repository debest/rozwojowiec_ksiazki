<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Default book
 *
 * @package    Rozwojowiec
 * @category   Model
 * @author     Dominik Baranowski
 */
class Model_Book extends ORM {
    /**
    * Every book have an author and a publisher.
    *
    * @var array Relationhips
    */
    protected $_belongs_to = array('author'=>array(),'publisher'=>array());
    
    /**
    * Rules for the book model. All fields are required.
    *
    * @return array Rules
    */
    public function rules() {
        return array(
            'title' => array(array('not_empty')),
            'publisher_id' => array(array('not_empty'),array('digit')),
            'author_id' => array(array('not_empty'),array('digit')),
            'publish_year' => array(array('not_empty'),array('digit'),array('exact_length',array(':value', 4))),
            'comment' => array(array('not_empty')),
        );
    }
}
