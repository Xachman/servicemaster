<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;


use App\Controller\AppController;
use App\Model\Settings;
/**
 * Description of Invoices
 *
 * @author dell precision
 */
class SettingsController extends AppController {
    //put your code here
    private $Settings;
    var $uses = false;
    
    
    public function initialize() {
        var_dump("init");
        $this->modelClass = false;
        $this->Settings = new Settings();
    }
    
    public function setSettingsModel($model) {
        $this->Settings = $model;
    }
    
    public function edit() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $this->Settings->save($this->request->data);
        }
    }
    

}
