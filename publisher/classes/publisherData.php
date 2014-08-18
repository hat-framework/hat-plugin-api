<?php 
class api_publisherData extends \classes\Model\DataModel{
    public $dados  = array(
         
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'ai'      => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
        'frequence' => array(
	    'name'     => 'Frequencia',
	    'type'     => 'int',
	    'size'     => '11',
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'api/frequence',
	    'fkey' => array(
	        'model' => 'api/frequence',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'price' => array(
	    'name'     => 'Price',
	    'type'     => 'decimal',
	    'especial' => 'monetary',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'title' => array(
             'title'  => true,
	    'name'     => 'Title',
	    'type'     => 'varchar',
	    'size'     => '64',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'documentation' => array(
	    'name'     => 'Documentation',
	    'type'     => 'text',
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Publisher'),);
}