<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mascota'), ['action' => 'edit', $mascota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mascota'), ['action' => 'delete', $mascota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mascotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mascota'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Mascota'), ['controller' => 'TipoMascota', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Mascotum'), ['controller' => 'TipoMascota', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mascotas view large-9 medium-8 columns content">
    <h3><?= h($mascota->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $mascota->has('persona') ? $this->Html->link($mascota->persona->id, ['controller' => 'Personas', 'action' => 'view', $mascota->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Mascotum') ?></th>
            <td><?= $mascota->has('tipo_mascotum') ? $this->Html->link($mascota->tipo_mascotum->id, ['controller' => 'TipoMascota', 'action' => 'view', $mascota->tipo_mascotum->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raza') ?></th>
            <td><?= h($mascota->raza) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mascota->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= h($mascota->sexo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mascota->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Edad') ?></th>
            <td><?= $this->Number->format($mascota->edad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mascota->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mascota->modified) ?></td>
        </tr>
    </table>
</div>
