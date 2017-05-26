<br>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
    <div class="panel">
        <h2 class="text-center">Cadastrar produto</h2>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('nome', ['label' => 'Nome']);
    echo $this->Form->input('descricao', ['label' => 'Descrição']);
    echo $this->Form->input('quantidade', ['label' => 'Quantidade']);
    echo $this->Form->input('preco', ['label' => 'Preço']);
    //echo $this->Form->radio('condicao',['label' => 'Condição do produto', ['value' => 'novo;'],['value' => 'usado;']] );
    echo $this->Form->button(__('Cadastrar'));
    echo $this->Form->end();
?>
        </div>
</div>