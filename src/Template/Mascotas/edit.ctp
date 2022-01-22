<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mascota->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mascotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personas'), ['controller' => 'Personas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Personas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Mascota'), ['controller' => 'TipoMascota', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Mascotum'), ['controller' => 'TipoMascota', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mascotas form large-9 medium-8 columns content">
    <?= $this->Form->create($mascota) ?>
    <fieldset>
        <legend><?= __('Edit Mascota') ?></legend>
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
