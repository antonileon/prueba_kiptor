<?php
	error_reporting(0);
?>
<h1 align="center">Inicio de sesión</h1>
<div class="row users form">
	<?= $this->Flash->render('auth') ?>
	<?= $this->Form->create() ?>
	<fieldset>
        <legend><?= __('Por favor introduzca sus credenciales') ?></legend>
        <?= $this->Form->input('email', array('placeholder'=>'Email')) ?>
        <?= $this->Form->input('password', array('label'=>'contraseña','placeholder'=>'Contraseña')) ?>
		<?= $this->Form->button('Iniciar') ?>
    </fieldset>
	<?= $this->Form->end() ?>
</div>