<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Competences'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="competences form large-10 medium-9 columns">
    <?= $this->Form->create($competence) ?>
    <fieldset>
        <legend><?= __('Add Competence') ?></legend>
        <?php
            echo $this->Form->input('langue');
            echo $this->Form->input('logicielinformatique');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
