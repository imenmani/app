<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Competence'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="competences index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('langue') ?></th>
            <th><?= $this->Paginator->sort('logicielinformatique') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($competences as $competence): ?>
        <tr>
            <td><?= $this->Number->format($competence->id) ?></td>
            <td><?= h($competence->langue) ?></td>
            <td><?= h($competence->logicielinformatique) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $competence->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competence->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competence->id)]) ?>
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
