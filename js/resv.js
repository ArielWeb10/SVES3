$(document).ready(function()
{
//alert('cliente');

$('#btnGuardar').click(function(){
	
 	var  formData=$('#datosRegistro').serialize();
     //alert(formData);
     //return false;
     var IDjugador = $('#txtIDjugador').val();

     
     valor=buscarID(IDjugador); // retornará nombre del cliente si encuentra, caso contario: 0
     //alert("valor:"+valor);
     if (valor=="0"){
          $.ajax({
               type: "POST",
               url: "cliente/insert",
               data: formData,
               success: function(r){
     
               }
          });

     }else{
          alert("El ID ya esta registrado a nombre de :" +valor);
         // return false;
          }
     

          //return false; // elimina que la pagina se recargue
	});


     function buscarID(IDjugador) {
          var idj = IDjugador;

          $.ajax({
              url: 'cliente/buscarIDiden',
              type: 'POST',
              data: {
               idj: idj
              }
          }).done(function(data) { 

              //alert(data);

              var reg = eval(data);

                if (reg.length > 0) {
                     var nombreCliente="";
                    for (var i = 0; i < reg.length; i++) {
                         nombreCliente= reg[i]['nombre'];
                    }
                    
                   return  nombreCliente;

                } else {
                    return "0";
                }

          });
          return false;  // comentando esta linea no registra
      }





});