<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Main Template
 *
 * @package    Rozowojowiec
 * @category   Controller_Template
 * @author     Dominik Baranowski
 */
class Controller_MyTemplate extends Controller_Template {
    
    /**
    * @var  string  Name of a template view
    */
    public $template = 'template';

    public function before()
    {
        parent::before();
        if ($this->auto_render)
        {
            // Initialize empty values
            $this->template->content = '';
            
            $this->template->styles = array(
                'css/style.css' => 'screen',
                'js/jquery-ui-1.11.1/jquery-ui.min.css' => 'screen',
                'js/jquery-ui-1.11.1/jquery-ui.structure.min.css' => 'screen',
                'js/jquery-ui-1.11.1/jquery-ui.theme.min.css' => 'screen',
            );

            $this->template->scripts = array(
                'js/jquery-2.1.1.min.js',
                'js/jquery-ui-1.11.1/jquery-ui.min.js',
                'js/jquery-validation-1.13.0/dist/jquery.validate.min.js',
                'js/jquery-validation-1.13.0/dist/localization/messages_pl.min.js',
                'js/books.js',
            );
        }
    }

      /**
       * The after() method is called after your controller action.
       * In our template controller we override this method so that we can
       * make any last minute modifications to the template before anything
       * is rendered.
       */
        public function after()
        {
            if ($this->auto_render)
            {

            }
            parent::after();
        }
}
