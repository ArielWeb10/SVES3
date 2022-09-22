$(document).ready(function()
{

//alert('gsdgdfgdfg');

$('#btnGuardar').click(function(){

 	var  formData=$('#FormDatos').serialize();
     //alert(formData);
     //return false;

     $.ajax({
          type: "POST",
          url: "cliente/insert",
          data: formData,
          success: function(r){

          }
     });

          //return false; // elimina que la pagina se recargue
	});





     // function buscarID(IDjugador) {
     //      var idj = IDjugador;

     //      $.ajax({
     //          url: 'cliente/buscarIDiden',
     //          type: 'POST',
     //          data: {
     //           idj: idj
     //          }
     //      }).done(function(data) { 

     //          //alert(data);

     //          var reg = eval(data);

     //            if (reg.length > 0) {
     //                 var nombreCliente="";
     //                for (var i = 0; i < reg.length; i++) {
     //                     nombreCliente= reg[i]['nombre'];
     //                }
                    
     //               return  nombreCliente;

     //            } else {
     //                return "0";
     //            }

     //      });
     //      return false;  // comentando esta linea no registra
     //  }





});