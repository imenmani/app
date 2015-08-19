<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Experienceprof'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="experienceprof form large-10 medium-9 columns">
    <?= $this->Form->create($experienceprof) ?>
    <fieldset>
        <legend><?= __('Add Experienceprof') ?></legend>
        <?php
            echo $this->Form->input('fonction');
            echo $this->Form->input('datedeb');
            echo $this->Form->input('datefin');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
