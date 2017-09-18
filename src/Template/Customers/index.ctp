<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Customer[]|\Cake\Collection\CollectionInterface $customers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Job'), ['controller' => 'Job', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Job'), ['controller' => 'Job', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Order'), ['controller' => 'Order', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Order', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="customers index large-9 medium-8 columns content">
    <h3><?= __('Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('location') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax_billing') ?></th>
                <th scope="col"><?= $this->Paginator->sort('optained_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('obtained_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inactive_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->id) ?></td>
                <td><?= h($customer->name) ?></td>
                <td><?= h($customer->location) ?></td>
                <td><?= h($customer->contact) ?></td>
                <td><?= h($customer->address) ?></td>
                <td><?= h($customer->city) ?></td>
                <td><?= h($customer->state) ?></td>
                <td><?= $this->Number->format($customer->zip) ?></td>
                <td><?= h($customer->phone) ?></td>
                <td><?= h($customer->fax) ?></td>
                <td><?= h($customer->contact_billing) ?></td>
                <td><?= h($customer->address_billing) ?></td>
                <td><?= h($customer->address2_billing) ?></td>
                <td><?= h($customer->city_billing) ?></td>
                <td><?= h($customer->state_billing) ?></td>
                <td><?= $this->Number->format($customer->zip_billing) ?></td>
                <td><?= h($customer->phone_billing) ?></td>
                <td><?= h($customer->fax_billing) ?></td>
                <td><?= h($customer->optained_by) ?></td>
                <td><?= h($customer->obtained_date) ?></td>
                <td><?= $this->Number->format($customer->active) ?></td>
                <td><?= h($customer->inactive_date) ?></td>
                <td><?= h($customer->created) ?></td>
                <td><?= h($customer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $customer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $customer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $customer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
