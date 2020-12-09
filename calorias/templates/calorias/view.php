<?php

/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $caloria
 */

?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Caloria'), ['action' => 'edit', $caloria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Caloria'), ['action' => 'delete', $caloria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caloria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Calorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Caloria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calorias view content">
            <h3><?= h($caloria->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ingrediente') ?></th>
                    <td><?= h($caloria->ingrediente) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($caloria->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Calorias') ?></th>
                    <td><?= $this->Number->format($caloria->calorias) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
