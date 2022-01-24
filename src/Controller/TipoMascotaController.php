<?php
namespace App\Controller;

use App\Controller\AppController;
error_reporting(0);

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
                $this->Flash->success(__('El tipo mascota se ha guardado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El tipo de mascota no se pudo guardar. Por favor, inténtalo de nuevo.'));
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
                $this->Flash->success(__('El tipo mascota se ha modificado con éxito.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El tipo de mascota no se pudo modificar. Por favor, inténtalo de nuevo.'));
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
            $this->Flash->success(__('El tipo mascota se ha eliminado con éxito.'));
        } else {
            $this->Flash->error(__('El tipo de mascota no se pudo eliminado. Por favor, inténtalo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function add_tipo_mascota()
    {
        $bodega = new Bodegas();
        $bodega->nombre=$request->nombre;
        $bodega->status=$request->status;
        $bodega->id_user=\Auth::User()->id;
        $bodega->save();
        
        return response()->json(['message'=>"Bodega registrada con éxito.",'icono'=>'success','titulo'=>'Éxito']);
    }
}
