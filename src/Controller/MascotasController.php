<?php
namespace App\Controller;

error_reporting(0);
use App\Controller\AppController;

/**
 * Mascotas Controller
 *
 * @property \App\Model\Table\MascotasTable $Mascotas
 *
 * @method \App\Model\Entity\Mascota[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MascotasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personas', 'TipoMascota'],
        ];
        $mascotas = $this->paginate($this->Mascotas);

        $this->set(compact('mascotas'));
    }

    /**
     * View method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mascota = $this->Mascotas->get($id, [
            'contain' => ['Personas', 'TipoMascota'],
        ]);

        $this->set('mascota', $mascota);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mascota = $this->Mascotas->newEntity();
        if ($this->request->is('post')) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('La mascota se ha guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La mascota no se pudo modificado. Por favor, inténtalo de nuevo.'));
        }
        $personas = $this->Mascotas->Personas;
        $personas = $personas->find();
        $personas->select(['id','nombres','apellidos']);
        $tipoMascota = $this->Mascotas->TipoMascota->find()->select(['id','tipo']);
        $this->set(compact('mascota', 'personas', 'tipoMascota'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mascota = $this->Mascotas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mascota = $this->Mascotas->patchEntity($mascota, $this->request->getData());
            if ($this->Mascotas->save($mascota)) {
                $this->Flash->success(__('La mascota se ha modificado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La mascota no se pudo modificar. Por favor, inténtalo de nuevo.'));
        }
        $personas = $this->Mascotas->Personas->find()->select(['id','nombres']);
        $tipoMascota = $this->Mascotas->TipoMascota->find()->select(['id','tipo']);
        $this->set(compact('mascota', 'personas', 'tipoMascota'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mascota id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mascota = $this->Mascotas->get($id);
        if ($this->Mascotas->delete($mascota)) {
            $this->Flash->success(__('La mascota ha sido eliminada con éxito.'));
        } else {
            $this->Flash->error(__('La mascota no se pudo eliminar. Por favor, inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
