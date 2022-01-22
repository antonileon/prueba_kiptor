<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoMascotum $tipoMascotum
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Mascotum'), ['action' => 'edit', $tipoMascotum->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Mascotum'), ['action' => 'delete', $tipoMascotum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoMascotum->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Mascota'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Mascotum'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoMascota view large-9 medium-8 columns content">
    <h3><?= h($tipoMascotum->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= h($tipoMascotum->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoMascotum->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tipoMascotum->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tipoMascotum->modified) ?></td>
        </tr>
    </table>
</div>
