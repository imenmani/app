<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Competence'), ['action' => 'edit', $competence->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competence'), ['action' => 'delete', $competence->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competence->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competences'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competence'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="competences view large-10 medium-9 columns">
    <h2><?= h($competence->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Langue') ?></h6>
            <p><?= h($competence->langue) ?></p>
            <h6 class="subheader"><?= __('Logicielinformatique') ?></h6>
            <p><?= h($competence->logicielinformatique) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($competence->id) ?></p>
        </div>
    </div>
</div>
