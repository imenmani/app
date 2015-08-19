<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="contacts form large-10 medium-9 columns">
    <?= $this->Form->create($contact) ?>
    <fieldset>
        <legend><?= __('Add Contact') ?></legend>
        <?php
            echo $this->Form->input('nom');
            echo $this->Form->input('prenom');
            echo $this->Form->input('adresse');
            echo $this->Form->input('telephone');
            echo $this->Form->input('email');
            echo $this->Form->input('nationalite');
            echo $this->Form->input('datenais');
            echo $this->Form->input('age');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
