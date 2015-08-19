<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Interets'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="interets form large-10 medium-9 columns">
    <?= $this->Form->create($interet) ?>
    <fieldset>
        <legend><?= __('Add Interet') ?></legend>
        <?php
            echo $this->Form->input('passion');
            echo $this->Form->input('musique');
            echo $this->Form->input('sport');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
