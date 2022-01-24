<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
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
<div class="mascotas form large-9 medium-8 columns content">
    <?= $this->Form->create($mascota) ?>
    <fieldset>
        <legend><?= __('Editar mascota') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Lista de mascotas'), ['action' => 'index'], array('class'=>'button')) ?> 
                <?= $this->Html->link(__('Ver'), ['action' => 'view', $mascota->id], array('class'=>'button')) ?>
                <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $mascota->id], array('class'=>'button'), ['confirm' => __('¿Está seguro de que desea eliminar a este Usuario # {0}?', $mascota->id)]) ?>
            </span>
        </legend>
            <label for="personas_id"><b>Persona</b> <b style="color: red;">*</b></label>
            <select name="personas_id" id="personas_id">
                <?php foreach($personas as $persona): ?>
                    <option value="<?php echo $persona['id']; ?>" <?php if($persona['id']==$mascota->personas_id): ?> selected <?php endif; ?>><?php echo $persona['nombres']; ?> <?php echo $persona['apellidos']; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="tipo_mascota_id"><b>Tipo de mascota</b> <b style="color: red;">*</b></label>
            <select name="tipo_mascota_id" id="tipo_mascota_id">
                <?php foreach($tipoMascota as $tipoM): ?>
                    <option value="<?php echo $tipoM['id']; ?>" <?php if($tipoM['id']==$mascota->tipo_mascota_id): ?> selected <?php endif; ?>><?php echo $tipoM['tipo']; ?></option>
                <?php endforeach; ?>
            </select>
        <?php
            echo $this->Form->control('raza');
            echo $this->Form->control('nombre');
        ?>
            <label for="sexo"><b>Sexo</b> <b style="color: red;">*</b></label>
            <select name="sexo" id="sexo">
                <option value="HEMBRA" <?php if($mascota->sexo=="HEMBRA"): ?> selected <?php endif; ?>>Hembra</option>
                <option value="MACHO" <?php if($mascota->sexo=="MACHO"): ?> selected <?php endif; ?>>Macho</option>
            </select>
        <?php
            echo $this->Form->control('edad');
        ?>
        <?= $this->Form->button(__('Modificar datos')) ?>
        <?= $this->Form->end() ?>
    </fieldset>
</div>
