<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Experienceprof'), ['action' => 'edit', $experienceprof->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Experienceprof'), ['action' => 'delete', $experienceprof->id], ['confirm' => __('Are you sure you want to delete # {0}?', $experienceprof->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Experienceprof'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Experienceprof'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="experienceprof view large-10 medium-9 columns">
    <h2><?= h($experienceprof->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Fonction') ?></h6>
            <p><?= h($experienceprof->fonction) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($experienceprof->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Datedeb') ?></h6>
            <p><?= h($experienceprof->datedeb) ?></p>
            <h6 class="subheader"><?= __('Datefin') ?></h6>
            <p><?= h($experienceprof->datefin) ?></p>
        </div>
    </div>
</div>
