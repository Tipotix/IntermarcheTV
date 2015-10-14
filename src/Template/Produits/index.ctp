<br><br><br><br><nav class="large-3 medium-4 columns" id="actions-sidebar">
        <?= $this->Html->link(__('Nouveau produit'), ['action' => 'add'],['class' =>'btn-success right']) ?>
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
                    <?= $this->Html->link(__('Regardé'), ['action' => 'view', $produit->id], ['class' => 'btn-info']) ?>
                    <?= $this->Html->link(__('Édité'), ['action' => 'edit', $produit->id], ['class' => 'btn-warning']) ?>
                    <?= $this->Form->postLink(__('Supprimé'), ['action' => 'delete', $produit->id], [
                    'class' => 'btn-danger', 'confirm' => __('Voulez vous vraiment supprimer ce produit # {0}?', $produit->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="pagination-container">
    <ul class="pagination">
        <?php
            if ($this->Paginator->hasPrev()){
                echo $this->Paginator->prev('«');
            }
            echo $this->Paginator->numbers(['modulus' => 5]);
            if ($this->Paginator->hasNext()){
               echo $this->Paginator->next('»');
            }
        ?>
    </ul>
</div>
</div>
