<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Formation'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="formations index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('diplome') ?></th>
            <th><?= $this->Paginator->sort('institut') ?></th>
            <th><?= $this->Paginator->sort('datedeb') ?></th>
            <th><?= $this->Paginator->sort('datefin') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($formations as $formation): ?>
        <tr>
            <td><?= $this->Number->format($formation->id) ?></td>
            <td><?= h($formation->diplome) ?></td>
            <td><?= h($formation->institut) ?></td>
            <td><?= h($formation->datedeb) ?></td>
            <td><?= h($formation->datefin) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $formation->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $formation->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $formation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formation->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
