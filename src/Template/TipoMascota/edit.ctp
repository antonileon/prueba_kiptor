<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoMascotum $tipoMascotum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoMascotum->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoMascotum->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Mascota'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoMascota form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoMascotum) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Mascotum') ?></legend>
        <?php
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
