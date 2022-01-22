<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoMascota Controller
 *
 * @property \App\Model\Table\TipoMascotaTable $TipoMascota
 *
 * @method \App\Model\Entity\TipoMascotum[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoMascotaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tipoMascota = $this->paginate($this->TipoMascota);

        $this->set(compact('tipoMascota'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Mascotum id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoMascotum = $this->TipoMascota->get($id, [
            'contain' => [],
        ]);

        $this->set('tipoMascotum', $tipoMascotum);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoMascotum = $this->TipoMascota->newEntity();
        if ($this->request->is('post')) {
            $tipoMascotum = $this->TipoMascota->patchEntity($tipoMascotum, $this->request->getData());
            if ($this->TipoMascota->save($tipoMascotum)) {
                $this->Flash->success(__('The tipo mascotum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo mascotum could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoMascotum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Mascotum id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoMascotum = $this->TipoMascota->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoMascotum = $this->TipoMascota->patchEntity($tipoMascotum, $this->request->getData());
            if ($this->TipoMascota->save($tipoMascotum)) {
                $this->Flash->success(__('The tipo mascotum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo mascotum could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoMascotum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Mascotum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoMascotum = $this->TipoMascota->get($id);
        if ($this->TipoMascota->delete($tipoMascotum)) {
            $this->Flash->success(__('The tipo mascotum has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo mascotum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
