<?php 
class api_publicationData extends \classes\Model\DataModel{
    public $dados  = array(
         'publisher' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
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
         'date' => array(
	    'name'     => 'Date',
	    'type'     => 'timestamp','private' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'content' => array(
	    'name'     => 'Content',
	    'type'     => 'text',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'readers' => array(
	    'name'     => 'Readers',
	    'type'     => 'varchar',
	    'size'     => '64',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Publication'),);
}