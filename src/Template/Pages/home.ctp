<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
    error_reporting(0);
?>
<div class="users index large-9 medium-8 columns content">
    <h3 align="center"><?= __('Bienvenido')   ?> <br><?php echo $this->Session->read('Auth.User.email'); ?></h3>
</div>
