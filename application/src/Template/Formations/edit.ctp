<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $formation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $formation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Formations'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="formations form large-10 medium-9 columns">
    <?= $this->Form->create($formation) ?>
    <fieldset>
        <legend><?= __('Edit Formation') ?></legend>
        <?php
            echo $this->Form->input('diplome');
            echo $this->Form->input('institut');
            echo $this->Form->input('datedeb');
            echo $this->Form->input('datefin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
