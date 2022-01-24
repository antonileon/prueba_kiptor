<?php
namespace App\Controller;

use App\Controller\AppController;
error_reporting(0);

/**
 * Personas Controller
 *
 * @property \App\Model\Table\PersonasTable $Personas
 *
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate;
        $personas = $this->paginate($this->Personas);

        $this->set(compact('personas'));
    }

    /**
     * View method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $persona = $this->Personas->get($id, [
            'contain' => [],
        ]);

        $this->set('persona', $persona);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persona = $this->Personas->newEntity();
        if ($this->request->is('post')) {
            $persona = $this->Personas->patchEntity($persona, $this->request->getData());
            if ($this->Personas->save($persona)) {
                $this->Flash->success(__('La persona ha sido guardada con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La persona no pudo ser modificada. Por favor, inténtalo de nuevo.'));
        }
        $this->set(compact('persona'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persona = $this->Personas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persona = $this->Personas->patchEntity($persona, $this->request->getData());
            if ($this->Personas->save($persona)) {
                $this->Flash->success(__('Persona modificada con éxito'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La persona no pudo ser modificada. Por favor, inténtalo de nuevo.'));
        }
        $this->set(compact('persona'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persona = $this->Personas->get($id);
        if ($this->Personas->delete($persona)) {
            $this->Flash->success(__('La persona ha sido eliminada con éxito.'));
        } else {
            $this->Flash->error(__('No se pudo eliminar la persona. Por favor, inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
