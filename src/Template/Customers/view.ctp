<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer $customer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Customer'), ['action' => 'edit', $customer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Customer'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Job'), ['controller' => 'Job', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Job', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($customer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Location') ?></th>
            <td><?= h($customer->location) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= h($customer->contact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($customer->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($customer->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($customer->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($customer->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($customer->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Billing') ?></th>
            <td><?= h($customer->contact_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Billing') ?></th>
            <td><?= h($customer->address_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2 Billing') ?></th>
            <td><?= h($customer->address2_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City Billing') ?></th>
            <td><?= h($customer->city_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State Billing') ?></th>
            <td><?= h($customer->state_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone Billing') ?></th>
            <td><?= h($customer->phone_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax Billing') ?></th>
            <td><?= h($customer->fax_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Optained By') ?></th>
            <td><?= h($customer->optained_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($customer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip') ?></th>
            <td><?= $this->Number->format($customer->zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zip Billing') ?></th>
            <td><?= $this->Number->format($customer->zip_billing) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $this->Number->format($customer->active) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Obtained Date') ?></th>
            <td><?= h($customer->obtained_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inactive Date') ?></th>
            <td><?= h($customer->inactive_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($customer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($customer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Job') ?></h4>
        <?php if (!empty($customer->job)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col"><?= __('Amount Recived') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->job as $job): ?>
            <tr>
                <td><?= h($job->id) ?></td>
                <td><?= h($job->customer_id) ?></td>
                <td><?= h($job->amount) ?></td>
                <td><?= h($job->amount_recived) ?></td>
                <td><?= h($job->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Job', 'action' => 'view', $job->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Job', 'action' => 'edit', $job->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Job', 'action' => 'delete', $job->id], ['confirm' => __('Are you sure you want to delete # {0}?', $job->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Order') ?></h4>
        <?php if (!empty($customer->order)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Job Id') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->order as $order): ?>
            <tr>
                <td><?= h($order->id) ?></td>
                <td><?= h($order->job_id) ?></td>
                <td><?= h($order->customer_id) ?></td>
                <td><?= h($order->amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Order', 'action' => 'view', $order->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Order', 'action' => 'edit', $order->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Order', 'action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
