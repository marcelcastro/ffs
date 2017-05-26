<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Filesystem\Folder;
/**
 * Galerias Controller
 *
 * @property \App\Model\Table\GaleriasTable $Galerias
 */
class GaleriasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $galerias = $this->paginate($this->Galerias);

        $this->set(compact('galerias'));
        $this->set('_serialize', ['galerias']);
    }

    /**
     * View method
     *
     * @param string|null $id Galeria id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $galeria = $this->Galerias->get($id, [
            'contain' => ['Images']
        ]);

        $this->set('galeria', $galeria);
        $this->set('_serialize', ['galeria']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $galeria = $this->Galerias->newEntity();
        if ($this->request->is('post')) {
            $galeria = $this->Galerias->patchEntity($galeria, $this->request->data);
            if ($this->Galerias->save($galeria)) {
                $this->Flash->success(__('The galeria has been saved.'));
                
                //Criar pasta
                $reg = $this->Galerias->findByTitle($galeria->title)->toArray();
                debug($reg);
                $caminho = WWW_ROOT.DS.'img'.DS.'galerias'.DS.$reg[0]['title'];
                $dir= new Folder();
                if ($dir->create($caminho,true,0755)){
                    $this->Flash->success('A pasta foi criada com sucesso!');
                }

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The galeria could not be saved. Please, try again.'));
        }
        $this->set(compact('galeria'));
        $this->set('_serialize', ['galeria']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Galeria id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $galeria = $this->Galerias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $galeria = $this->Galerias->patchEntity($galeria, $this->request->data);
            if ($this->Galerias->save($galeria)) {
                $this->Flash->success(__('The galeria has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The galeria could not be saved. Please, try again.'));
        }
        $this->set(compact('galeria'));
        $this->set('_serialize', ['galeria']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Galeria id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $galeria = $this->Galerias->get($id);
        
        $caminho = WWW_ROOT.DS.'img'.DS.'galerias'.DS.$galeria->id;
        
        if ($this->Galerias->delete($galeria)) {
            $this->Flash->success(__('The galeria has been deleted.'));
        
            if(is_dir($caminho)){
                $dir = new Folder($caminho);
                if($dir->delete()){
                    $this->Flash->sucess('Pasta '.$galeria->title.'excluída com sucesso!');
                }else{
                    $this->Flash->error('Não foi possível excluir a pasta '.$galeria->title);
            }
            
            }else {
            $this->Flash->error(__('The galeria could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
}