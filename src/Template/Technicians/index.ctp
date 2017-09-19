<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Technician[]|\Cake\Collection\CollectionInterface $technicians
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Technician'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="technicians index large-9 medium-8 columns content">
    <h3><?= __('Technicians') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('started') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($technicians as $technician): ?>
            <tr>
                <td><?= $this->Number->format($technician->id) ?></td>
                <td><?= h($technician->first_name) ?></td>
                <td><?= h($technician->last_name) ?></td>
                <td><?= h($technician->address) ?></td>
                <td><?= h($technician->city) ?></td>
                <td><?= h($technician->state) ?></td>
                <td><?= h($technician->zip) ?></td>
                <td><?= h($technician->phone) ?></td>
                <td><?= h($technician->email) ?></td>
                <td><?= h($technician->started) ?></td>
                <td><?= h($technician->created) ?></td>
                <td><?= h($technician->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $technician->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $technician->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $technician->id], ['confirm' => __('Are you sure you want to delete # {0}?', $technician->id)]) ?>
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
