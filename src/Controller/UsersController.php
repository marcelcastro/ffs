<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{
    
     public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add');
    }
   
     public function index()
     {
         $this->set('users', $this->Users->find('all'));
     }

    public function view($id = null)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O usuário foi salvo.'));
                return $this->redirect(['controller' => 'articles', 'action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o usuário.'));
        }
        $this->set('user', $user);
    }
    
    public function delete($id)
{
  //  $this->request->allowMethod(['post', 'delete']);

    $user = $this->Users->get($id);
    if ($this->Users->delete($user)) {
        $this->Flash->success(__('O usuário com id: {0} foi deletado.', h($id)));
        return $this->redirect(['action' => 'index']);
    }
}

public function edit($id = null)
{
    $user = $this->Users->get($id);
    if ($this->request->is(['post', 'put'])) {
        $this->Users->patchEntity($user, $this->request->data);
        if ($this->Users->save($user)) {
            $this->Flash->success(__('Seu usuário foi atualizado.'));
            return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('Seu usuário não pôde ser atualizado.'));
    }

    $this->set('user', $user);
}
   /** public function beforeFilter(Event $event)
{
    parent::beforeFilter($event);
    // Permitir aos usuários se registrarem e efetuar logout.
    // Você não deve adicionar a ação de "login" a lista de permissões.
    // Isto pode causar problemas com o funcionamento normal do AuthComponent.
    $this->Auth->allow(['add','logout']);
}
**/

public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            $this->Auth->setUser($user);
            return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error(__('Usuário ou senha ínvalido, tente novamente'));
    }
    $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            if ($this->Users->save($user)) {
                $this->Flash->success(__('O usuário foi salvo.'));
                return $this->redirect(['controller' => 'articles', 'action' => 'index']);
            }
            $this->Flash->error(__('Não é possível adicionar o usuário.'));
        }
        $this->set('user', $user);
}

public function logout()
{
    return $this->redirect($this->Auth->logout());

}
}