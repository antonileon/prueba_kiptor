<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-12 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Registrar usuario') ?>
            <span style="float: right;">
            <?= $this->Html->link(__('Regresar'), ['action' => 'index'], array('class'=>'button')) ?>
        </span>
        </legend>
        <?php
            echo $this->Form->control('nombres', array('label' => 'Nombres','placeholder'=>'Nombres'));
            echo $this->Form->control('email', array('label' => 'Email','placeholder'=>'Email'));
            echo $this->Form->control('password', array('label' => 'Contraseña','placeholder'=>'Contraseña'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
</div>
