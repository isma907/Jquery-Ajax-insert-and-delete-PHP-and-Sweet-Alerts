//////////////DEFINO VARIABLES QUE SE USAN////////////
var nombre = $("#nombre");
  apellido = $("#apellido");
     email = $("#email");
formulario = $("#agregar");
   mensaje = $("#mensaje");
   listado = $("#listado");
  cargando = $("#cargando");
  eliminar = $(".btnEliminar");
cargando.hide();

$(function(){

///////////CARGAR LISTADO/////////////////////////////


  function cargarListado(){

    $.ajax({
      type:"post",
      url:"inc/listado.php",
      data:"accion=generarListado",
      success:function(data){
      listado.html(data);
     }
   });

  }

  cargarListado();

//////////////INSERTAR //////////////////////////////


formulario.submit(function(){
  
  var nombreF = nombre.val();
  var apellidoF = apellido.val();
  var emailF = email.val();

  $.ajax({
    type:"post",
    url:"inc/insertar.php",
    data:"nombre="+nombreF+"&apellido="+apellidoF+"&email="+emailF+"&accion=insertarUsuario",
    success:function(data){
     cargando.fadeIn( "slow").fadeOut(1900);
     cargarListado();

   }
 });

return false

});


/////////////////ELIMINAR////////////////////////////
$('body').delegate('.btnEliminar', 'click', function(){

  var ID = $(this).attr("id");
  var idAborrar = 'accion=borrarUsuario&id='+ ID;
  swal({title: "Borrar Usuario", 
    text: "Usted está seguro de borrar este usuario?", 
    type: "warning",   showCancelButton: true, 
    confirmButtonColor: "#DD6B55", 
    confirmButtonText: "Borrar",
    cancelButtonText: "Cancelar",
    closeOnConfirm: false,
    closeOnCancel: false },
    function(isConfirm){ 
      if (isConfirm) { swal("Borrado!", "El usuario ha sido borrado.", "success");  
      $.ajax
      ({
        type: "POST",
        url: "inc/borrar.php",
        data: idAborrar,
        cache: false,
        success: function(data)
        {
          $(".usr"+ID).slideUp(2500, function() {$(this).remove();});
          cargarListado();  
        }
      });      
    }
    else {     swal("Cancelado", "No borraste nada :)", "error"); } 
  });


});

///////////////////////////////////////////////////






});


