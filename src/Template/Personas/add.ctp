<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
 //error_reporting(0);
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
        <legend>
            <?= __('Registrar persona') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Regresar'), ['action' => 'index'], array('class'=>'button')) ?>
            </span>       
        </legend>
        <?php
            echo $this->Form->control('nombres', array('placeholder'=>'Nombres','required'=>'true'));
            echo $this->Form->control('apellidos', array('placeholder'=>'Apellidos','required'=>'true'));
            echo $this->Form->control('rut', array('placeholder'=>'RUT','required'=>'true','min'=>1,'type'=>'number'));
            echo $this->Form->control('email', array('placeholder'=>'Email'));
            echo $this->Form->control('telefono', array('label' => 'Teléfono','placeholder'=>'Teléfono','required'=>'true'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
</div>
