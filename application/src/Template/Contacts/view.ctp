<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="contacts view large-10 medium-9 columns">
    <h2><?= h($contact->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nom') ?></h6>
            <p><?= h($contact->nom) ?></p>
            <h6 class="subheader"><?= __('Prenom') ?></h6>
            <p><?= h($contact->prenom) ?></p>
            <h6 class="subheader"><?= __('Adresse') ?></h6>
            <p><?= h($contact->adresse) ?></p>
            <h6 class="subheader"><?= __('Telephone') ?></h6>
            <p><?= h($contact->telephone) ?></p>
            <h6 class="subheader"><?= __('Email') ?></h6>
            <p><?= h($contact->email) ?></p>
            <h6 class="subheader"><?= __('Nationalite') ?></h6>
            <p><?= h($contact->nationalite) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($contact->id) ?></p>
            <h6 class="subheader"><?= __('Age') ?></h6>
            <p><?= $this->Number->format($contact->age) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Datenais') ?></h6>
            <p><?= h($contact->datenais) ?></p>
        </div>
    </div>
</div>
