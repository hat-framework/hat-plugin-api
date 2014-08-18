<?php
class apiInstall extends classes\Classes\InstallPlugin{
    protected $dados = array(
        "pluglabel" => "Api",
        "isdefault" => "n",
        "system"    => "n",
        "detalhes"  => "",
    );
     public function install(){return true;}
     public function unstall(){return true;}
}
