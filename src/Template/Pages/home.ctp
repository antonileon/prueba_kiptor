<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
    error_reporting(0);
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
<div class="users index large-9 medium-8 columns content">
    <h3 align="center"><?= __('Bienvenido')   ?> <br><?php echo $this->Session->read('Auth.User.email'); ?></h3>
</div>
