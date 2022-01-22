<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<div class="mascotas form large-12 medium-8 columns content">
    <?= $this->Form->create($mascota) ?>
    <fieldset>
        <legend><?= __('Add Mascota') ?></legend>
        <?php
            echo $this->Form->control('personas_id', ['options' => $personas]);
            echo $this->Form->control('tipo_mascota_id', ['options' => $tipoMascota]);
            echo $this->Form->control('raza');
            echo $this->Form->control('nombre');
            echo $this->Form->control('sexo');
            echo $this->Form->control('edad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
