<?php 
class api_subscriberData extends \classes\Model\DataModel{
    public $dados  = array(
         'publisher' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'api/publisher',
	    'fkey' => array(
	        'model' => 'api/publisher',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'app' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'api/app',
	    'fkey' => array(
	        'model' => 'api/app',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
	    'button'     => array('button' => 'Gravar Subscriber'),);
}