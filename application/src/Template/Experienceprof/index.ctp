<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Experienceprof'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="experienceprof index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('fonction') ?></th>
            <th><?= $this->Paginator->sort('datedeb') ?></th>
            <th><?= $this->Paginator->sort('datefin') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($experienceprof as $experienceprof): ?>
        <tr>
            <td><?= $this->Number->format($experienceprof->id) ?></td>
            <td><?= h($experienceprof->fonction) ?></td>
            <td><?= h($experienceprof->datedeb) ?></td>
            <td><?= h($experienceprof->datefin) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $experienceprof->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $experienceprof->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $experienceprof->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experienceprof->id)]) ?>
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
