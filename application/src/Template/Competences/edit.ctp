<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competence->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competence->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competences'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="competences form large-10 medium-9 columns">
    <?= $this->Form->create($competence) ?>
    <fieldset>
        <legend><?= __('Edit Competence') ?></legend>
        <?php
            echo $this->Form->input('langue');
            echo $this->Form->input('logicielinformatique');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
