<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Menú') ?></li>
        <li><?= $this->Html->link(__('Usuarios'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Personas'), ['controller'=> 'Personas','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Mascotas'), ['controller' => 'Mascotas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Tipo de mascota'), ['controller' => 'TipoMascota', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Cerrar sesión'), ['controller' => 'Users', 'action' => 'logout']) ?></li>
    </ul>
</nav>
<div class="mascotas view large-9 medium-8 columns content">
    <h3 style="text-transform: uppercase;"><?= h($mascota->nombre) ?>
        <span style="float: right;">
            <?= $this->Html->link(__('Lista de mascotas'), ['action' => 'index'], array('class'=>'button')) ?> 
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mascota->id], array('class'=>'button')) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $mascota->id], array('class'=>'button'), ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id)]) ?>
        </span>
    </h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $mascota->has('persona') ? $this->Html->link($mascota->persona->nombres, ['controller' => 'Personas', 'action' => 'view', $mascota->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Mascotum') ?></th>
            <td><?= $mascota->has('tipo_mascotum') ? $this->Html->link($mascota->tipo_mascotum->tipo, ['controller' => 'TipoMascota', 'action' => 'view', $mascota->tipo_mascotum->id]) : '' ?></td>
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
