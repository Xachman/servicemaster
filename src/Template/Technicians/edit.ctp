<?php
/**
 * @var \App\View\AppView $this
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $technician->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $technician->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Technicians'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="technicians form large-9 medium-8 columns content">
    <?= $this->Form->create($technician) ?>
    <fieldset>
        <legend><?= __('Edit Technician') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zip');
            echo $this->Form->control('phone');
            echo $this->Form->control('email');
            echo $this->Form->control('started');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
