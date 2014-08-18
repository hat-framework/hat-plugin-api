<?php 
class api_readerData extends \classes\Model\DataModel{
    public $dados  = array(
         'publication' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'api/publication',
	    'fkey' => array(
	        'model' => 'api/publication',
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
	    'button'     => array('button' => 'Gravar Reader'),);
}