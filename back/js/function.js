//////////////DEFINO VARIABLES QUE SE USAN////////////////

var nombre = $("#nombre");
  apellido = $("#apellido");
     email = $("#email");
     boton = $("#agregar");
   mensaje = $("#mensaje");
   listado = $("#listado");
  cargando = $("#cargando");
  eliminar = $(".btnEliminar");



cargando.hide();
//////////////LISTADO /////////////////////////

(function(){
 

  $.ajax({
    type:"post",
    url:"inc/listado.php",
    data:"accion=generarListado",
    success:function(data){
       listado.html(data);
                           }
        });


})();


//////////////INSERTAR /////////////////////////


boton.click(function(){
var nombreF = nombre.val();
var apellidoF = apellido.val();
var emailF = email.val();

  $.ajax({
    type:"post",
    url:"inc/insertar.php",
    data:"nombre="+nombreF+"&apellido="+apellidoF+"&email="+emailF+"&accion=insertarUsuario",
    success:function(data){
       cargando.fadeIn( "slow");
       mensaje.html(data);
       cargando.fadeOut( "slow");
       mensaje.html(data).fadeOut("slow");
                          }
        });


});



///////////////BORRAR/////////////////////

function borrarUsuario()
{
    $(".remove-item").click(function(){
      var ID = $(this).attr("id");
      var idAborrar = 'accion=borrarUsuario&id='+ ID;
        $.ajax
        ({
            type: "POST",
            url: "inc/borrar.php",
            data: idAborrar,
            cache: false,
            success: function(data)
            {

            $(".usr"+ID).slideUp(2500, function() {$(this).remove();});
             mensaje.html(data);
            // mensaje.fadeOut(2500);
               /* $('.my-selected-items').html(data);
                register_delete_action();*/
            }
        }); 
    });
}



