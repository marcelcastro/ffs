<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    
  
    
    public function validationDefault(Validator $validator)
    {
       $validator
            ->notEmpty('username', 'Usuário é necessário')
            ->notEmpty('password', 'Senha é necessária');
        return $validator;
    }

}


          //  ->notEmpty('role', 'Função é necessária')
            //->add('role', 'inList', [
              //  'rule' => ['inList', ['admin', 'author']],
                //'message' => 'Por favor informe uma função válida'
            //]);