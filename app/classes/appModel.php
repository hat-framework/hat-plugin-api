<?php 
class api_appModel extends \classes\Model\Model{
    public $tabela = "api_app";
    public $pkey   = 'appid';
    
    public function inserir($dados) {
        $dados['appsecret'] = classes\Classes\crypt::encrypt(genKey('32'));
        return parent::inserir($dados);
    }
}
