<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Experienceprof Controller
 *
 * @property \App\Model\Table\ExperienceprofTable $Experienceprof
 */
class ExperienceprofController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('experienceprof', $this->paginate($this->Experienceprof));
        $this->set('_serialize', ['experienceprof']);
    }

    /**
     * View method
     *
     * @param string|null $id Experienceprof id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $experienceprof = $this->Experienceprof->get($id, [
            'contain' => []
        ]);
        $this->set('experienceprof', $experienceprof);
        $this->set('_serialize', ['experienceprof']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $experienceprof = $this->Experienceprof->newEntity();
        if ($this->request->is('post')) {
            $experienceprof = $this->Experienceprof->patchEntity($experienceprof, $this->request->data);
            if ($this->Experienceprof->save($experienceprof)) {
                $this->Flash->success(__('The experienceprof has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The experienceprof could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('experienceprof'));
        $this->set('_serialize', ['experienceprof']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Experienceprof id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $experienceprof = $this->Experienceprof->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $experienceprof = $this->Experienceprof->patchEntity($experienceprof, $this->request->data);
            if ($this->Experienceprof->save($experienceprof)) {
                $this->Flash->success(__('The experienceprof has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The experienceprof could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('experienceprof'));
        $this->set('_serialize', ['experienceprof']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Experienceprof id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $experienceprof = $this->Experienceprof->get($id);
        if ($this->Experienceprof->delete($experienceprof)) {
            $this->Flash->success(__('The experienceprof has been deleted.'));
        } else {
            $this->Flash->error(__('The experienceprof could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
