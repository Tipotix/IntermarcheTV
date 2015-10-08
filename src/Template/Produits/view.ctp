<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Produit'), ['action' => 'edit', $produit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Produit'), ['action' => 'delete', $produit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Produits'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Produit'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produits view large-9 medium-8 columns content">
    <h3><?= h($produit->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($produit->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Prix') ?></th>
            <td><?= h($produit->prix) ?></td>
        </tr>
        <tr>
            <th><?= __('Avantage') ?></th>
            <td><?= h($produit->avantage) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($produit->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Img') ?></h4>
        <?= $this->Text->autoParagraph(h($produit->img)); ?>
    </div>
</div>
