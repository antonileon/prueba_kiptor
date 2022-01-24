<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoMascotum $tipoMascotum
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
<div class="tipoMascota view large-9 medium-8 columns content">
    <h3><?= h($tipoMascotum->tipo) ?>
        <span style="float: right;">
            <?= $this->Html->link(__('Lista de tipo de mascotas'), ['action' => 'index'], array('class'=>'button')) ?> 
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $tipoMascotum->id], array('class'=>'button')) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $tipoMascotum->id], array('class'=>'button'), ['confirm' => __('Are you sure you want to delete # {0}?', $tipoMascotum->id)]) ?>
        </span>
    </h3>
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
            <th scope="row"><?= __('Fecha de registro') ?></th>
            <td><?= h($tipoMascotum->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha de modificado') ?></th>
            <td><?= h($tipoMascotum->modified) ?></td>
        </tr>
    </table>
</div>
