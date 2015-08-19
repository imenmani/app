<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Interets Controller
 *
 * @property \App\Model\Table\InteretsTable $Interets
 */
class InteretsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('interets', $this->paginate($this->Interets));
        $this->set('_serialize', ['interets']);
    }

    /**
     * View method
     *
     * @param string|null $id Interet id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $interet = $this->Interets->get($id, [
            'contain' => []
        ]);
        $this->set('interet', $interet);
        $this->set('_serialize', ['interet']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $interet = $this->Interets->newEntity();
        if ($this->request->is('post')) {
            $interet = $this->Interets->patchEntity($interet, $this->request->data);
            if ($this->Interets->save($interet)) {
                $this->Flash->success(__('The interet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The interet could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('interet'));
        $this->set('_serialize', ['interet']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Interet id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $interet = $this->Interets->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $interet = $this->Interets->patchEntity($interet, $this->request->data);
            if ($this->Interets->save($interet)) {
                $this->Flash->success(__('The interet has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The interet could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('interet'));
        $this->set('_serialize', ['interet']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Interet id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $interet = $this->Interets->get($id);
        if ($this->Interets->delete($interet)) {
            $this->Flash->success(__('The interet has been deleted.'));
        } else {
            $this->Flash->error(__('The interet could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
