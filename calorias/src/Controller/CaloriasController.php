<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Calorias Controller
 *
 * @method \App\Model\Entity\Caloria[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CaloriasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $calorias = $this->paginate($this->Calorias);

        $this->set(compact('calorias'));
    }

    /**
     * View method
     *
     * @param string|null $id Caloria id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caloria = $this->Calorias->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('caloria'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caloria = $this->Calorias->newEmptyEntity();
        if ($this->request->is('post')) {
            $caloria = $this->Calorias->patchEntity($caloria, $this->request->getData());
            if ($this->Calorias->save($caloria)) {
                $this->Flash->success(__('The caloria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caloria could not be saved. Please, try again.'));
        }
        $this->set(compact('caloria'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Caloria id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caloria = $this->Calorias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caloria = $this->Calorias->patchEntity($caloria, $this->request->getData());
            if ($this->Calorias->save($caloria)) {
                $this->Flash->success(__('The caloria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caloria could not be saved. Please, try again.'));
        }
        $this->set(compact('caloria'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Caloria id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caloria = $this->Calorias->get($id);
        if ($this->Calorias->delete($caloria)) {
            $this->Flash->success(__('The caloria has been deleted.'));
        } else {
            $this->Flash->error(__('The caloria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
