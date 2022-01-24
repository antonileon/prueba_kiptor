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
<div class="tipoMascota form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoMascotum) ?>
    <fieldset>
        <legend><?= __('Editar tipo de mascota') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Lista de tipo de mascota'), ['action' => 'index'], array('class'=>'button')) ?> 
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $tipoMascotum->id], array('class'=>'button')) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $tipoMascotum->id], array('class'=>'button'), ['confirm' => __('¿Está seguro de que desea eliminar a este Usuario # {0}?', $tipoMascotum->id)]) ?>
            </span>
        </legend>
        <?php
            echo $this->Form->control('tipo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modificar')) ?>
    <?= $this->Form->end() ?>
</div>
