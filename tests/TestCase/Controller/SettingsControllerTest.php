<?php

namespace App\Test\TestCase\Controller;

use App\Controller\SettingsController;
use Cake\TestSuite\IntegrationTestCase;
use App\Settings;

/**
 * App\Controller\CustomersController Test Case
 */
class SettingsControllerTest extends IntegrationTestCase
{
    private $filePath;
    
    
    public function setUp() {
        parent::setUp();
        $this->filePath = dirname(dirname(dirname(__FILE__))).'/tmp/settings.json';
    }
    
    public function controllerSpy($event, $controller = null) {
        parent::controllerSpy($event, $controller = null);
        
        if (isset($this->_controller)) {
            var_dump("controller spy");
            $this->_controller->setSettingsModel(new \App\Model\Settings($this->filePath));
            var_dump($this->_controller->Settings);
            
        }
    }
    public function testEdit() {
        $settingsData = [
            "business" => [
                "name" => "Pro Biz",
                "address" => "123 test street",
                "city" => "Sanjose",
                "state" => "CA"
            ]
        ];
        
        $this->post('/settings/edit', $settingsData);
        
        $this->assertResponseOk();
        $content = file_get_contents($this->filePath);
        $json = json_decode(file_get_contents($this->filePath), true);
        
        var_dump($content);
        $this->assertEquals($settingsData, $json);
        
        
    }
    
}