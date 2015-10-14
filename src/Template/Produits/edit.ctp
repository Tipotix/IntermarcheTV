<br>
<br>
<br>
<?= $this->Form->create($produit) ?>
<h1>
    Édition du ticket
</h1>
    <?php
        echo $this->Form->input('name', ['class' => 'form']);
        echo $this->Form->input('img', ['class' => 'form']);
        echo $this->Form->input('prix', ['class' => 'form']);
        echo $this->Form->input('avantage', ['class' => 'form']);
    ?>
<?= $this->Form->button(__('Validé'), ['class' => 'btn-success']) ?>
<?= $this->Form->end() ?>
