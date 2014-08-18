<?php

class myappsWidget extends \classes\Component\widget{
    protected $pgmethod  = "paginate";
    protected $method    = "listInTable";
    protected $modelname = "api/app";
    protected $arr       = array('appid', 'appname');
    protected $link      = "api/app/formulario";
    protected $where     = "";
    protected $qtd       = "10";
    protected $title     = "Meus apps";
    
    public function getItens() {
        $autor = usuario_loginModel::CodUsuario();
        $this->where = "autor='$autor'";
        return parent::getItens();
    }
}