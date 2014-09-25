<?php defined('SYSPATH') or die('No direct script access.');
/**
 * This controller services all ajax requests
 *
 * @package    Rozowojowiec
 * @category   Controllers
 * @author     Dominik Baranowski
 */
class Controller_Ajax extends Controller {
    
    /**
    * Add book to a database and display inserted book.
    *
    * @return void
    * @throws  ORM_Validation_Exception 
    */
    function action_addBook(){
        $post=$this->request->post();

        try{
            $book=ORM::factory('Book');
            $book->values($post);
            
            $author=ORM::factory('Author',array('name'=>Arr::get($post, 'author')));
            if(!$author->loaded()){
                $author->name=Arr::get($post, 'author');
                $author->create();
            }
            $book->author_id=$author->id;
            
            $publisher=ORM::factory('Publisher',array('name'=>Arr::get($post, 'publisher')));
            if($publisher->loaded()===false){
                $publisher->name=Arr::get($post, 'publisher');
                $publisher->create();
            }
            $book->publisher_id=$publisher->id;

            $book->create();
            
            echo View::factory('book')->set('book', $book)->set('new', true)->render();
        } catch (ORM_Validation_Exception  $e) {
            $errors = $e->errors();
            echo 0;
        }
    }
    
    /**
    * Delete book from a database.
    *
    * @return void
    */
    function action_deleteBook(){
        $id=$this->request->query('id');
        if($id!==null){
            try{
                ORM::factory('Book',$id)->delete();
            } catch (Exception $e) {
                echo 0;
            }
        }
    }
    
    /**
    * Get a list of authors
    *
    * @return void
    */
    function action_getAuthors(){
        $this->_getAutocompleteData('Author');
    }
    
    /**
    * Get a list of publishers
    *
    * @return void
    */
    function action_getPublishers(){
        $this->_getAutocompleteData('Publisher');
    }
    
    /**
    * Display json list of items to autocomplete plugin.
    *
    * @param string $table name of table in a database
    * @return void
    */
    protected function _getAutocompleteData($table){
        $term=$this->request->query('term');
        
        if(strlen($term)>1){
            $items=array();
            foreach(ORM::factory($table)->where('name', 'like', $term.'%')->limit(10)->find_all()->as_array() as $item){
                $items[]=$item->name;
            }
            echo json_encode($items);
        }
    }
    
}
