<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-24 02:38:06 --- CRITICAL: Database_Exception [ 1146 ]: Table 'hotels.books' doesn't exist [ SHOW FULL COLUMNS FROM `books` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\MySQL.php:359
2014-09-24 02:38:06 --- DEBUG: #0 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('books')
#2 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\xampp\htdocs\tworczosc\rozwojowiec\application\classes\Controller\Index.php(7): Kohana_ORM::factory('Book')
#7 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#10 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\xampp\htdocs\tworczosc\rozwojowiec\index.php(118): Kohana_Request->execute()
#13 {main} in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\MySQL.php:359
2014-09-24 04:40:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: author ~ MODPATH\orm\classes\Kohana\ORM.php [ 1567 ] in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php:1567
2014-09-24 04:40:32 --- DEBUG: #0 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(1567): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\xampp\htdocs...', 1567, Array)
#1 D:\xampp\htdocs\tworczosc\rozwojowiec\application\classes\Controller\Ajax.php(12): Kohana_ORM->add('author', Object(Model_Author))
#2 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_addBook()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#5 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\xampp\htdocs\tworczosc\rozwojowiec\index.php(118): Kohana_Request->execute()
#8 {main} in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php:1567
2014-09-24 04:51:07 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, integer given, called in D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Validation.php on line 242 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Validation.php:211
2014-09-24 04:51:07 --- DEBUG: #0 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'D:\xampp\htdocs...', 211, Array)
#1 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Validation.php(242): Kohana_Validation->rule('publish_year', 'exact_length', 4)
#2 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(410): Kohana_Validation->rules('publish_year', Array)
#3 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(1269): Kohana_ORM->_validation()
#4 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#5 D:\xampp\htdocs\tworczosc\rozwojowiec\application\classes\Controller\Ajax.php(26): Kohana_ORM->create()
#6 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_addBook()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#9 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\xampp\htdocs\tworczosc\rozwojowiec\index.php(118): Kohana_Request->execute()
#12 {main} in D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Validation.php:211
2014-09-24 04:52:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH\classes\Controller\Ajax.php [ 28 ] in file:line
2014-09-24 04:52:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-24 08:40:53 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Burda Publishing Polska' for key 'name' [ INSERT INTO `publishers` (`name`) VALUES ('Burda Publishing Polska') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\Query.php:251
2014-09-24 08:40:53 --- DEBUG: #0 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pu...', false, Array)
#1 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\tworczosc\rozwojowiec\application\classes\Controller\Ajax.php(22): Kohana_ORM->create()
#3 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_addBook()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\tworczosc\rozwojowiec\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\Query.php:251
2014-09-24 08:41:06 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'Burda Publishing Polska' for key 'name' [ INSERT INTO `publishers` (`name`) VALUES ('Burda Publishing Polska') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\Query.php:251
2014-09-24 08:41:06 --- DEBUG: #0 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `pu...', false, Array)
#1 D:\xampp\htdocs\tworczosc\rozwojowiec\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 D:\xampp\htdocs\tworczosc\rozwojowiec\application\classes\Controller\Ajax.php(22): Kohana_ORM->create()
#3 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Controller.php(84): Controller_Ajax->action_addBook()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\xampp\htdocs\tworczosc\rozwojowiec\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\xampp\htdocs\tworczosc\rozwojowiec\index.php(118): Kohana_Request->execute()
#9 {main} in D:\xampp\htdocs\tworczosc\rozwojowiec\modules\database\classes\Kohana\Database\Query.php:251