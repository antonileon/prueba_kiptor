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
        <legend><?= __('Registrar mascota') ?>
            <span style="float: right;">
                <?= $this->Html->link(__('Regresar'), ['action' => 'index'], array('class'=>'button')) ?>
            </span>
        </legend>
        <?php
            //echo $this->Form->control('personas_id', ['options' => $personas]);
        ?>
        <label for="personas_id"><b>Persona</b> <b style="color: red;">*</b></label>
        <select name="personas_id" id="personas_id">
            <?php foreach($personas as $persona): ?>
                <option value="<?php echo $persona['id']; ?>"><?php echo $persona['nombres']; ?> <?php echo $persona['apellidos']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="tipo_mascota_id">
            <b>Tipo de mascota</b> <b style="color: red;">*</b>
            <a href="#" data-bs-toggle="modal" data-bs-target="#createTipo"><b>Registrar tipo </b></a>
        </label>
        <select name="tipo_mascota_id" id="tipo_mascota_id">
            <?php foreach($tipoMascota as $tipoM): ?>
                <option value="<?php echo $tipoM['id']; ?>"><?php echo $tipoM['tipo']; ?></option>
            <?php endforeach; ?>
        </select>
        <?php
            //echo $this->Form->control('tipo_mascota_id', ['options' => $tipoMascota]);
            echo $this->Form->control('raza');
            echo $this->Form->control('nombre');
        ?>
        <label for="sexo"><b>Sexo</b> <b style="color: red;">*</b></label>
        <select name="sexo" id="sexo">
            <option value="HEMBRA">Hembra</option>
            <option value="MACHO">Macho</option>
        </select>
        <?php
            echo $this->Form->control('edad');
        ?>
    <?= $this->Form->button(__('Registrar')) ?>
    <?= $this->Form->end() ?>
    </fieldset>
</div>
<!-- Modal -->
<div class="modal fade" id="createTipo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Registrar tipo de mascota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <form id="formTipo" name="formTipo" method="POST" autocomplete="off" data-parsley-validate action="">
            <div class="modal-body">
                <p align="center"><small>Todos los campos <b style="color: red;">*</b> son requeridos.</small></p>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="tipo">Tipo: <b style="color: red;">*</b></label>
                            <input type="text" name="tipo" id="tipo" class="form-control form-control-sm" required="required" placeholder="Tipo" autocomplete="off" required="true">
                        </div>
                    </div>
                </div>
            </div>
        </form>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="SubmitCreateTipo">Guardar</button>
      </div>
    </div>
  </div>
</div>
<?php $this->start('script'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript">
//--CODIGO PARA CREAR PBX (GUARDAR REGISTRO) ---------------------//
$('#SubmitCreateTipo').click(function(e) {
  e.preventDefault();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: "addTipoMascota",
    method: 'POST',
    data: {
      tipo: $('#tipo').val(),
    },
    success: function(result) {
      if(result.errors) {
        $('#message_error').html('');
        $.each(result.errors, function(key, value) {
          $('#message_error').show();
          $('#message_error').append('<strong><li>'+value+'</li></strong>');
        });
      } else {
        $('#message_error').hide();
        $('#CreateBodega').modal('hide');
      }
    }
  });
});
</script>
<?php $this->end(); ?>
