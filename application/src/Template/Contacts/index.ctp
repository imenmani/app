<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="contacts index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nom') ?></th>
            <th><?= $this->Paginator->sort('prenom') ?></th>
            <th><?= $this->Paginator->sort('adresse') ?></th>
            <th><?= $this->Paginator->sort('telephone') ?></th>
            <th><?= $this->Paginator->sort('email') ?></th>
            <th><?= $this->Paginator->sort('nationalite') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($contacts as $contact): ?>
        <tr>
            <td><?= $this->Number->format($contact->id) ?></td>
            <td><?= h($contact->nom) ?></td>
            <td><?= h($contact->prenom) ?></td>
            <td><?= h($contact->adresse) ?></td>
            <td><?= h($contact->telephone) ?></td>
            <td><?= h($contact->email) ?></td>
            <td><?= h($contact->nationalite) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?>
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
