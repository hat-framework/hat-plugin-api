<?php 
class api_subscriberModel extends \classes\Model\Model{
    public $tabela = "api_subscriber";
    public $pkey   = array('publisher','app');
}
