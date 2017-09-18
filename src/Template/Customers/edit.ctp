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
                ['action' => 'delete', $customer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Job'), ['controller' => 'Job', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Job', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Edit Customer') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('location');
            echo $this->Form->control('contact');
            echo $this->Form->control('address');
            echo $this->Form->control('city');
            echo $this->Form->control('state');
            echo $this->Form->control('zip');
            echo $this->Form->control('phone');
            echo $this->Form->control('fax');
            echo $this->Form->control('contact_billing');
            echo $this->Form->control('address_billing');
            echo $this->Form->control('address2_billing');
            echo $this->Form->control('city_billing');
            echo $this->Form->control('state_billing');
            echo $this->Form->control('zip_billing');
            echo $this->Form->control('phone_billing');
            echo $this->Form->control('fax_billing');
            echo $this->Form->control('optained_by');
            echo $this->Form->control('obtained_date');
            echo $this->Form->control('active');
            echo $this->Form->control('inactive_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
