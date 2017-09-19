<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Technician $technician
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Technician'), ['action' => 'edit', $technician->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Technician'), ['action' => 'delete', $technician->id], ['confirm' => __('Are you sure you want to delete # {0}?', $technician->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Technicians'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Technician'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="technicians view large-9 medium-8 columns content">
    <h3><?= h($technician->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($technician->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($technician->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($technician->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($technician->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($technician->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= h($technician->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($technician->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($technician->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($technician->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Started') ?></th>
            <td><?= h($technician->started) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($technician->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($technician->modified) ?></td>
        </tr>
    </table>
</div>
