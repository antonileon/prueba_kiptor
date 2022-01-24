<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
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
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar usuario') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index'], array('class'=>'button')) ?> 
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], array('class'=>'button')) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], array('class'=>'button'), ['confirm' => __('¿Está seguro de que desea eliminar a este Usuario # {0}?', $user->id)]) ?>
            </span>
        </legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('nombres');
            echo $this->Form->control('password', array('label'=>'Contraseña'));
        ?>
        <?= $this->Form->button(__('Modificar datos')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
