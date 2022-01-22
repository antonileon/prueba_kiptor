<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-12 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Lista de usuarios'), ['action' => 'index'], array('class'=>'button')) ?> 
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id], array('class'=>'button')) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id], array('class'=>'button'), ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
            </span>
        </legend>
        <?php
            echo $this->Form->control('email');
            echo $this->Form->control('nombres');
            echo $this->Form->control('password', array('label'=>'Contraseña'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Modificar datos')) ?>
    <?= $this->Form->end() ?>
</div>
