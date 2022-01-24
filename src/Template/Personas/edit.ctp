<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
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
<div class="personas form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Editar Persona') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Lista de personas'), ['action' => 'index'], array('class'=>'button')) ?> 
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $persona->id], array('class'=>'button')) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $persona->id], array('class'=>'button'), ['confirm' => __('¿Está seguro de que desea eliminar a este Usuario # {0}?', $persona->id)]) ?>
            </span>
        </legend>
        <?php
            echo $this->Form->control('nombres');
            echo $this->Form->control('apellidos');
            echo $this->Form->control('rut');
            echo $this->Form->control('email');
            echo $this->Form->control('telefono');
        ?>
        <?= $this->Form->button(__('Modificar')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
