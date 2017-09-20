<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('foundation.css') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="top-bar">
  <div class="top-bar-left">
  <?= $this->fetch('title') ?>
  </div>
  <div class="top-bar-right">
    <ul class="dropdown menu" data-dropdown-menu>
      <li>
        <?=$this->Html->link('Customers', ["controller" => 'Customers', 'action' => 'index'])?>
      </li>
      <li>
        <?=$this->Html->link('Jobs', ["controller" => 'Jobs', 'action' => 'index'])?>
      </li>
      <li>
        <?=$this->Html->link('Technicians', ["controller" => 'Technicians', 'action' => 'index'])?>
      </li>
      <li>
        <?=$this->Html->link('Services', ["controller" => 'Services', 'action' => 'index'])?>
      </li>
    </ul>
  </div>
</div>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('vendor/foundation.js'); ?>
    <script>
    $(document).foundation();
    </script>
</body>
</html>
