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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $caloria->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caloria->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Calorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="calorias form content">
            <?= $this->Form->create($caloria) ?>
            <fieldset>
                <legend><?= __('Edit Caloria') ?></legend>
                <?php
                    echo $this->Form->control('ingrediente');
                    echo $this->Form->control('calorias');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
