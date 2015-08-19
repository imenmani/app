<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Interet'), ['action' => 'edit', $interet->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Interet'), ['action' => 'delete', $interet->id], ['confirm' => __('Are you sure you want to delete # {0}?', $interet->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Interets'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Interet'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="interets view large-10 medium-9 columns">
    <h2><?= h($interet->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Passion') ?></h6>
            <p><?= h($interet->passion) ?></p>
            <h6 class="subheader"><?= __('Musique') ?></h6>
            <p><?= h($interet->musique) ?></p>
            <h6 class="subheader"><?= __('Sport') ?></h6>
            <p><?= h($interet->sport) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($interet->id) ?></p>
        </div>
    </div>
</div>
