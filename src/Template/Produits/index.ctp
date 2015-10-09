<br><br><nav class="large-3 medium-4 columns" id="actions-sidebar">
        <?= $this->Html->link(__('Nouveau produit'), ['action' => 'add'],['class' =>'btn-success']) ?>
</nav>
<div class="produits index large-9 medium-8 columns content">
    <h3><?= __('Produits') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('prix') ?></th>
                <th><?= $this->Paginator->sort('avantage') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produits as $produit): ?>
            <tr>
                <td><?= $this->Number->format($produit->id) ?></td>
                <td><?= h($produit->name) ?></td>
                <td><?= h($produit->prix) ?></td>
                <td><?= h($produit->avantage) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Regardé'), ['action' => 'view', $produit->id]) ?>
                    <?= $this->Html->link(__('Édité'), ['action' => 'edit', $produit->id]) ?>
                    <?= $this->Form->postLink(__('Supprimé'), ['action' => 'delete', $produit->id], ['confirm' => __('Voulez vous vraiment supprimer ce produit # {0}?', $produit->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator"style="text-align: center">
            <?= $this->Paginator->prev('< ' . __('Avant')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Après') . ' >') ?>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
