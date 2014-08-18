<?php 
class api_appData extends \classes\Model\DataModel{
    public $dados  = array(
         'appid' => array(
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
         'appname' => array(
	    'name'     => 'Appname',
	    'type'     => 'varchar',
	    'size'     => '64',
            'title'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'return_url' => array(
	    'name'     => 'Url',
	    'type'     => 'varchar',
	    'size'     => '128',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'appsecret' => array(
	    'name'     => 'Appsecret',
	    'type'     => 'varchar',
            'especial' => 'hide',
	    'size'     => '256',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
//        'publishers' => array(
//            'name'      => 'Publishers',
//            'type' 	=> 'int',
//            'fkey'      => array(                
//                'cardinalidade' => 'nn',//nn 1n 11
//                'model' 	=> 'api/subscriber', 
//                'keys'          => array('cod', 'title'),
//                'formmodel'     => 'api/publisher',
//            )
//         ),
        'autor' => array(
	    'name'      => 'Autor',
	    'type'      => 'int',
	    'size'      => '11',
	    'grid'      => true,
	    'display'   => true,
            'especial'  => 'autentication',
            'autentication' => array(
                'needlogin' => true
            ),
	    'fkey' => array(
	        'model' => 'usuario/login',
	        'cardinalidade' => '1n',
	        'keys' => array('cod_usuario', 'user_name'),
	    ),
        ),
        'descricao' => array(
	    'name'     => 'Descrição',
	    'type'     => 'text',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar App'),);
}