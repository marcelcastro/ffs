<div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    
                    <h2>Faça seu login</h2>
                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create() ?>
                    <fieldset>
                    <?= $this->Form->input('username') ?>
                    <?= $this->Form->input('password') ?>
                    </fieldset>
                    <?= $this->Form->button(__('Entrar')); ?>
                    <?= $this->Form->end() ?>
                    
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or">Ou</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Seja um novo usuário</h2>
                        <?= $this->Form->create()?>
                    <fieldset>
                        <?= $this->Form->input('nome', ['label' => 'Nome']) ?>
                        <?= $this->Form->input('sobrenome', ['label' => 'Sobrenome']) ?>
                        <?= $this->Form->input('email', ['label' => 'E-Mail', 'placeholder' => 'nome@exemplo.com' ] ) ?>
                        <?= $this->Form->input('telefone', ['label' => 'Telefone(fixo ou celular)', 'placeholder' => 'Ex: 53 9 91111111']) ?>
                        <?= $this->Form->input('username', ['label' => 'Usuário']) ?>
                        <?= $this->Form->input('password', ['label' => 'Criar senha' , 'placeholder' => 'Use entre 4 e 20 caracteres']) ?>
                    </fieldset>
                        <?= $this->Form->button(__('Cadastrar')); ?>
                        <?= $this->Form->end() ?>
            </div><!--/sign up form-->
        </div>
    </div>
</div>
