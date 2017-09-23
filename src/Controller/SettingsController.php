<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;


use App\Controller\AppController;
/**
 * Description of Invoices
 *
 * @author dell precision
 */
class InvoicesController extends AppController {
    //put your code here
    
    public function view($serviceId) {
        $this->loadModel('Services');
        $this->loadModel('Jobs');
        $this->loadModel('Customers');
        
        
        $service = $this->Services->get($serviceId);
        $job = $this->Jobs->get($service->job_id);
        $customer = $this->Customers->get($job->customer_id);
        
        $this->set(compact('service', 'job', 'customer'));
    }
}
