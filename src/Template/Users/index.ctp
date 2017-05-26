<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <div>
        <div>
        <?php Ações: ?>
       
            <h1><?= $this->request->session()->read('Auth.User.username')  ?></h1><br>
        <?= $this->Html->link('Adicionar usuário', ['controller' => 'users' ,'action' => 'add']) ?><br> 
        <?= $this->Html->link('Editar usuário', ['controller' => 'users' ,'action' => 'edit']) ?><br>
        <?= $this->Html->link('Deletar usuário', ['controller' => 'users' ,'action' => 'delete']) ?><br>
        </div>
    </div>
</nav>
<div class="user index large-9 medium-8 columns content">
    <h3><?=__('Usuários') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('sobrenome') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('telefone') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th class="actions"><?=__('Ações') ?></th>
            </tr>
        </thead>
    </table>
    <table>
        
        <?php foreach ($users as $user): ?>
        
    <tr>
        <td><?= $this->Number->format($user->id) ?></td>
        <td><?= $user->nome ?></td>
        <td><?= $user->sobrenome ?></td>     
        <td><?= $user->email ?></td>     
        <td><?= $user->telefone ?></td>     
        <td><?= $user->username ?></td> 
        <td class="actions">
            <?= $this->Html->link(__('Ver'), ['action' => 'view' , $user->id]) ?>
            <?= $this->Html->link(__('Editar'), ['action' => 'edit' , $user->id]) ?>
         
            <?= $this->Html->link(__('Deletar'), ['action' => 'delete' , $user->id]) ?>
    </tr>
        <?php endforeach; ?>
    
    </table>