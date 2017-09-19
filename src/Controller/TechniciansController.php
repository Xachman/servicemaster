<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Technicians Controller
 *
 * @property \App\Model\Table\TechniciansTable $Technicians
 *
 * @method \App\Model\Entity\Technician[] paginate($object = null, array $settings = [])
 */
class TechniciansController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $technicians = $this->paginate($this->Technicians);

        $this->set(compact('technicians'));
        $this->set('_serialize', ['technicians']);
    }

    /**
     * View method
     *
     * @param string|null $id Technician id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $technician = $this->Technicians->get($id, [
            'contain' => []
        ]);

        $this->set('technician', $technician);
        $this->set('_serialize', ['technician']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $technician = $this->Technicians->newEntity();
        if ($this->request->is('post')) {
            $technician = $this->Technicians->patchEntity($technician, $this->request->getData());
            if ($this->Technicians->save($technician)) {
                $this->Flash->success(__('The technician has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The technician could not be saved. Please, try again.'));
        }
        $this->set(compact('technician'));
        $this->set('_serialize', ['technician']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Technician id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $technician = $this->Technicians->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $technician = $this->Technicians->patchEntity($technician, $this->request->getData());
            if ($this->Technicians->save($technician)) {
                $this->Flash->success(__('The technician has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The technician could not be saved. Please, try again.'));
        }
        $this->set(compact('technician'));
        $this->set('_serialize', ['technician']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Technician id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $technician = $this->Technicians->get($id);
        if ($this->Technicians->delete($technician)) {
            $this->Flash->success(__('The technician has been deleted.'));
        } else {
            $this->Flash->error(__('The technician could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
