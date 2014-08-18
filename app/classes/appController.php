<?php 

class appController extends \classes\Controller\CController{
    protected $autor_camp = 'autor';
    public $model_name = 'api/app';
    public function __construct($vars) {
        $this->addToFreeCod("manage");
        parent::__construct($vars);
    }
    
    public function manage(){
        $this->display(LINK."/manage");
    }
}