<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
 //error_reporting(0);
?>

<div class="personas form large-12 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Registrar persona') ?></legend>
        <?php
            echo $this->Form->control('nombres', array('placeholder'=>'Nombres','required'=>'true'));
            echo $this->Form->control('apellidos', array('placeholder'=>'Apellidos','required'=>'true'));
            echo $this->Form->control('rut', array('placeholder'=>'RUT','required'=>'true'));
            echo $this->Form->control('email', array('placeholder'=>'Email'));
            echo $this->Form->control('telefono', array('label' => 'Teléfono','placeholder'=>'Teléfono','required'=>'true'));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
</div>
