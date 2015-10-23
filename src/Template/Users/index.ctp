<br><br><br><br><nav class="large-3 medium-4 columns" id="actions-sidebar">
<?= $this->Html->link(__('Nouveau produit'), ['action' => 'add'],['class' =>'btn-success right']) ?>
</nav>
<div class="produits index large-9 medium-8 columns content">
    <h3><?= __('Utilisateurs') ?></h3>

    <table cellpadding="0" cellspacing="0">

        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= $user->username ?></td>
                <td><?= $user->password ?></td>
                <td class="actions">
                        <div class="container">
                            <div class="grid-4">

                                <?= $this->Html->link(__('Regardé'), ['action' => 'view', $user->id], ['class' => 'btn-info']) ?>
                            </div>

                            <div class="grid-4">
                                <?= $this->Html->link(__('Édité'), ['action' => 'edit', $user->id], ['class' => 'btn-warning']) ?>
                            </div>

                            <div class="grid-4">
                                <?= $this->Form->postLink(__('Supprimé'), ['action' => 'delete', $user->id], [
                                'style' => 'margin-left: -21px;', 'class' => 'btn-danger', 'confirm' => __('Voulez vous vraiment supprimer ce user # {0}?', $user->id)]) ?>
                            </div>
                        </div>
                    </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev(__('Avant')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Après')) ?>
        </ul>
    </div>
</div>
