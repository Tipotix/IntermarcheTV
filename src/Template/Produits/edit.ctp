<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $produit->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="produits form large-9 medium-8 columns content">
    <?= $this->Form->create($produit) ?>
    <fieldset>
        <legend><?= __('Edit Produit') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('img');
            echo $this->Form->input('prix');
            echo $this->Form->input('avantage');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
