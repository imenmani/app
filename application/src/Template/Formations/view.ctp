<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Formation'), ['action' => 'edit', $formation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Formation'), ['action' => 'delete', $formation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $formation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Formations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Formation'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="formations view large-10 medium-9 columns">
    <h2><?= h($formation->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Diplome') ?></h6>
            <p><?= h($formation->diplome) ?></p>
            <h6 class="subheader"><?= __('Institut') ?></h6>
            <p><?= h($formation->institut) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($formation->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Datedeb') ?></h6>
            <p><?= h($formation->datedeb) ?></p>
            <h6 class="subheader"><?= __('Datefin') ?></h6>
            <p><?= h($formation->datefin) ?></p>
        </div>
    </div>
</div>
