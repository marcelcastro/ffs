<?php

namespace App\Controller;

class CategoriesController extends AppController
{
    
  
    public function index()
    {
        $category = $this->Categories->find('all');
        $this->set(compact('category'));
    }
    
     public function view($id = null)
    {
        $category = $this->Categories->get($id);
        $this->set(compact('category'));
    }
    
    public function add()
    {
        $category = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $category = $this->Categories->patchEntity($category, $this->request->data);
            if ($this->Categories->save($category)) {
                $this->Flash->success(__('Seu artigo foi salvo.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o seu artigo.'));
        }
        $this->set('category', $category);
    }
    
    public function delete($id)
{
    $this->request->allowMethod(['post', 'delete']);

    $category = $this->Categories->get($id);
    if ($this->Categories->delete($category)) {
        $this->Flash->success(__('O artigo com id: {0} foi deletado.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}

public function edit($id = null)
{
    $category = $this->Categories->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Categories->patchEntity($category, $this->request->data);
        if ($this->Categories->save($category)) {
            $this->Flash->success(__('Seu artigo foi atualizado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
    }

    $this->set('category', $category);
}
}