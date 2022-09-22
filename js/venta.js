
const listaCarrito = document.querySelector('#listaCarrito tbody');
const carritoB = document.querySelector('#carritoB');
let carrito = [];

carritoB.addEventListener('click',eliminarProducto);
function agregarProducto(){
     const precio = $('#precio').val();
     const producto = $('#producto').val();
     const total = $('#total').val();
     const cantidad = $('#cantidad').val();

     if(cliente.length == 0 || producto.length == 0 || total == 0 || cantidad == 0|| precio == 0 ){
          console.log("Todos los campos son obligatorios");
          return;
      }
      const carritoObj ={
          idCarrito : Date.now(),
          producto,
          cantidad,
          precio,
          total,
      }
      carrito = [...carrito, carritoObj];

      const Iprecio = document.querySelector('#precio');
      const Iproducto = document.querySelector('#producto');
      const Itotal = document.querySelector('#total');
      const Icantidad = document.querySelector('#cantidad');
      const prec = document.querySelector('#precioNormal');
      const txtCantidadProducto = document.querySelector('#txtCantidadProducto');
      
      txtCantidadProducto.textContent = 'Cantidad';
       Iprecio.value='';
       prec.value='';
       Iproducto.value='';
       Itotal.value='';
       Icantidad.value='';
      

      crearHTML();
}
function crearHTML(){
     limpiarHTML();
     if(carrito.length>0){
         carrito.forEach(prod=>{
          const {cantidad,precio,total,producto, idCarrito} = prod;
          const row = document.createElement('tr');
          row.innerHTML = `
               <td>1</td>
               <td>${producto}</td>
               <td>${cantidad}</td>
               <td>${precio}</td>
               <td>${total}</td>

               <td class="text-center">
                    <a class="borrar-producto text-white" data-id='${idCarrito}' style="background-color: #004038 ;border-radius: 50%;padding: 5px 10px;text-decoration: none;color: white;font-weight: bold;" href="#">X</a>
               </td>
          `;
              listaCarrito.appendChild(row);
          })
     }
}
function eliminarProducto(e){
     console.log('funciona');
     if(e.target.classList.contains('borrar-producto')){
          const id = e.target.getAttribute('data-id');
          console.log(id);
         const cursos = carrito.filter(c => c.idCarrito != id );
         console.log(cursos);
         carrito = [...cursos];
         crearHTML();
     }
 
 }

function limpiarHTML(){
     while(listaCarrito.firstChild){
         listaCarrito.removeChild(listaCarrito.firstChild);
     }
}

function btn_buscar_cliente()
{
     // console.log();
     const cerrar = document.querySelector('#seleccionarCliente');
     cerrar.style.display='inline';

    var palabra = $("#cliente").val();
    console.log(palabra);
    var obj= {palabra};

        $.ajax({
                    //el protocolo
                    type: "POST",
                    //a donde quiero mandar el objeto
                    url: 'venta/buscar_en_bd_cliente',    
                    data: obj,
    
                    //que quieres mostrar como recargable al iniciar
                    beforeSend: function(objeto){
                        
                    },
    
                    //al finalizar
                    success: function(data)
                    {
                        $("#seleccionarCliente").html(data);

                       
                    }
                });
}
function btn_buscar_producto()
{
     // console.log();
     const cerrar = document.querySelector('#seleccionarProducto');
     cerrar.style.display='inline';

    var palabraProducto = $("#producto").val();
    console.log(palabraProducto);
    var obje= {palabraProducto};

        $.ajax({
                    //el protocolo
                    type: "POST",
                    //a donde quiero mandar el objeto
                    url: 'venta/buscar_en_bd_producto',    
                    data: obje,
    
                    //que quieres mostrar como recargable al iniciar
                    beforeSend: function(objeto){
                        
                    },
    
                    //al finalizar
                    success: function(data)
                    {
                        $("#seleccionarProducto").html(data);

                       
                    }
                });
}

function btn_cerrar(){
     const cerrar = document.querySelector('#seleccionarCliente');
     cerrar.style.display='none';
}
function btn_cerrar_producto(){
     const cerrar = document.querySelector('#seleccionarProducto');
     cerrar.style.display='none';
}

function agregarClienteInput(id,nombre,nit){
     const cliente = document.querySelector('#cliente');
     cliente.value = `${nombre} - ${nit}`;
     btn_cerrar();
     // const producto = $('#producto').val();
}

function agregarProductoInput(id,productoNombre,precio,codigo,stock){
     const producto = document.querySelector('#producto');
     const precioNormal = document.querySelector('#precioNormal');
     const txtCantidadProducto = document.querySelector('#txtCantidadProducto');
     precioNormal.value = precio;


     txtCantidadProducto.textContent=`Cantidad: ${stock}`



     const precioD = document.querySelector('#precio');
     precioD.value = precio;

     producto.value = `${productoNombre} - ${codigo}`;
     btn_cerrar_producto();
     // const producto = $('#producto').val();
}

function btn_calcular_total(){
     const cant = document.querySelector('#cantidad').value;
     const p = document.querySelector('#precio').value;
     const total = document.querySelector('#total');
     total.value=`${cant*p}`;



}

$(document).ready(function()
{




     
//alert('gsdgdfgdfg');

// $('#btnGuardar').click(function(){

//  	var  formData=$('#FormDatos').serialize();
//      alert(formData);
//      return false;

//      $.ajax({
//           type: "POST",
//           url: "usuario/insert",
//           data: formData,
//           success: function(r){

//           }
//      });

//           return false; // elimina que la pagina se recargue
// 	});




});