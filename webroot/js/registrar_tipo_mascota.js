//--CODIGO PARA CREAR TIPO (LEVANTAR EL MODAL) ---------------------//
$.noConflict();
$('#createNewTipo').click(function () {
  $('#tagForm').trigger("reset");
  $('#CreateTipo').modal({backdrop: 'static', keyboard: true, show: true});
  $('#bodega_message_error').hide();
});
