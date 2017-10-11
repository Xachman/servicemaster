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

    public function get() {
        $settings = new \App\Settings(file_get_contents($this->getFile()));
        
        $settingsArray = [
            ["business" =>
                ["title" => "Bisiness Name", "name" => "name", "value" => $settings->businessName()],
                ["title" => "Business Address","name" => "address", "value" => $settings->businessAddress()],
                ["title" => "Business City","name" => "city", "value" => $settings->businessCity()],
                ["title" => "Business State","name" => "state", "value" => $settings->businessState()]
            ]
        ];

        return $settingsArray;
    }
}

