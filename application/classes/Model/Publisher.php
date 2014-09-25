<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Default publisher
 *
 * @package    Rozwojowiec
 * @category   Model
 * @author     Dominik Baranowski
 */
class Model_Publisher extends ORM {
    /**
    * A publisher can have many books
    *
    * @var array Relationhips
    */
    protected $_has_many = array(
        'books'=>array()
    );
}
