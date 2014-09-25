<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Default author
 *
 * @package    Rozwojowiec
 * @category   Model
 * @author     Dominik Baranowski
 */
class Model_Author extends ORM {
    /**
    * An author can have many books
    *
    * @var array Relationhips
    */
    protected $_has_many = array(
        'books'=>array()
    );
}
