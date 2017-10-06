<?php

namespace App\Model;

class Settings {
    private $filePath;
    
    
    public function __construct($filePath = false) {
        if(!$filePath) {
           $this->filePath = dirname(dirname(dirname(__FILE__)))."/config/settings.json";
        }else{
            $this->filePath = $filePath;    
        }
        
    }
    
    public function getFile() {
        //return dirname(dirname(dirname(__FILE__)))."/config/settings.json";
        return $this->filePath;
    }
    
    public function save($data) {
        var_dump("settings ", $this->getFile());
        file_put_contents($this->getFile(), json_encode($data));
    }
}

