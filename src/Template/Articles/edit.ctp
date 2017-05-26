<h1>Editar produto</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->input('nome', ['label' => 'Nome']);
    echo $this->Form->input('descricao', ['label' => 'Descrição',  'rows' => '10']);
    echo $this->Form->input('quantidade', ['label' => 'Quantidade']);
    echo $this->Form->input('preco', ['label' => 'Preço']);
    echo $this->Form->button(__('Salvar artigo'));
    echo $this->Form->end();
?>