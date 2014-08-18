<?php
class appComponent extends classes\Component\Component{
    public function format_appid($value){
        $this->gui->infotitle("App Id");
        echo $value;
    }
    
    public function format_appsecret($value){
        return classes\Classes\crypt::decrypt($value);
    }
}