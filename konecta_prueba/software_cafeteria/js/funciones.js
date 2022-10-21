$(document).ready(function(){
  
        $("#registro").validate({
            
        event: "blur",rules: {'n_prod': "required", 'ref_prod':"required",'precio_prod':"required",'peso_prod':"required",
        'cat_prod': "required", 'stock_prod':"required",'fecha_prod': "required" },
        messages: {'n_prod': "Ingrese el nombre del producto",'ref_prod':"ingrese la referencia del producto",
            'precio_prod': "Ingrese el precio del producto", 'peso_prod':"ingrese el peso del producto",
            'cat_prod': "Seleccione la categoría del producto", 'stock_prod': "Ingrese el stock del producto",
            'fecha_prod': "Seleccione la fecha"
        },
        debug: true,errorElement: "label",
        submitHandler: function(form) {
            $("#alert").show();
            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 5000);
       $.ajax({
           
            url: "ingreso_producto-ajax.php", 
            type: "POST",             
            data: "n_prod="+escape($('#n_prod').val())+"&ref_prod="+escape($('#ref_prod').val())+"&precio_prod="+escape($("#precio_prod").val())
                    +"&peso_prod="+escape($("#peso_prod").val())+"&cat_prod="+escape($("#cat_prod").val())+"&stock_prod="+escape($("#stock_prod").val())+"&fecha_prod="+escape($("#fecha_prod").val()),
      
            success: function(msg) {
                 $("#alert").html(msg);
                 document.getElementById("n_prod").value="";
                 document.getElementById("ref_prod").value="";
                 document.getElementById("precio_prod").value="";
                 document.getElementById("peso_prod").value="";
                 document.getElementById("cat_prod").value='1';
                 document.getElementById("stock_prod").value="";
                 document.getElementById("fecha_prod").value="";
                 setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 5000);
            }   
                       
        });            
                       
}
        });

        
        
        $("#edicion").validate({
            
        event: "blur",rules: {'c_prod1':"required",'n_prod1': "required", 'ref_prod1':"required",'precio_prod1':"required",'peso_prod1':"required",
        'cat_prod1': "required", 'stock_prod1':"required",'fecha_prod1': "required" },
        messages: {'c_prod1':"Seleccione el producto a editar",'n_prod1': "Ingrese el nombre del producto",'ref_prod1':"ingrese la referencia del producto",
            'precio_prod1': "Ingrese el precio del producto", 'peso_prod1':"ingrese el peso del producto",
            'cat_prod1': "Seleccione la categoría del producto", 'stock_prod1': "Ingrese el stock del producto",
            'fecha_prod1': "Seleccione la fecha"
        },
        debug: true,errorElement: "label",
        submitHandler: function(form) {
            $("#alert").show();
            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 2500);
       $.ajax({
           
            url: "edicion_producto-ajax.php", 
            type: "POST",             
            data: "n_prod1="+escape($("#n_prod1").val())+"&c_prod1="+escape($('#c_prod1').val())+"&ref_prod1="+escape($('#ref_prod1').val())+"&precio_prod1="+escape($("#precio_prod1").val())
                    +"&peso_prod1="+escape($("#peso_prod1").val())+"&cat_prod1="+escape($("#cat_prod1").val())+"&stock_prod1="+escape($("#stock_prod1").val())+"&fecha_prod1="+escape($("#fecha_prod1").val()),
      
            success: function(msg) {
                 $("#alert").html(msg);
                 document.getElementById("c_prod1").value="";
                 document.getElementById("n_prod1").value="";
                 document.getElementById("ref_prod1").value="";
                 document.getElementById("precio_prod1").value="";
                 document.getElementById("peso_prod1").value="";
                 document.getElementById("cat_prod1").value='1';
                 document.getElementById("stock_prod1").value="";
                 document.getElementById("fecha_prod1").value="";
                 
                 setTimeout(function() {
                        $('#alert').fadeOut('slow');
                        window.location.href = 'edicion_producto.php';                       
                    }, 2500);
                     
            }   
                       
        });            
                       
}
        });
        
        
        $("#venta").validate({
            
        event: "blur",rules: {'n_prod2':"required",'cant_v': "required" },
        messages: {'n_prod2':"Seleccione el producto a vender", 'cant_v': "Ingrese la cantidad del producto",
        },
        debug: true,errorElement: "label",
        submitHandler: function(form) {
            $("#alert").show();
            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 2500);
       $.ajax({
           
            url: "venta_producto-ajax.php", 
            type: "POST",             
            data: "n_prod2="+escape($("#n_prod2").val())+"&cant_v="+escape($('#cant_v').val()),
      
            success: function(msg) {
                 $("#alert").html(msg);
                 document.getElementById("n_prod2").value="";
                 document.getElementById("cant_v").value="";

                 setTimeout(function() {
                        $('#alert').fadeOut('slow');
                    }, 2500);
            }   
                       
        });            
                       
}
        });
              
    $("#eliminar").validate({
            
        event: "blur",rules: {'c_prod3':"required" },
        messages: {'c_prod3':"Seleccione el producto a eliminar"
        },
        debug: true,errorElement: "label",
        submitHandler: function(form) {
            $("#alert").show();
            setTimeout(function() {
                $('#alert').fadeOut('slow');
            }, 2500);
       $.ajax({
           
            url: "eliminar_producto-ajax.php", 
            type: "POST",             
            data: "c_prod3="+escape($("#c_prod3").val()),
      
            success: function(msg) {
                 $("#alert").html(msg);
                 document.getElementById("c_prod3").value="";

                 setTimeout(function() {
                        $('#alert').fadeOut('slow');
                        window.location.href = 'eliminar_producto.php';                       
                    }, 2500);
                     
            }   
                       
        });            
                       
}
        });

 });  
 

    
       


