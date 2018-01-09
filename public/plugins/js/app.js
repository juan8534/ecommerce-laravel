/*Carga el modal de eliminar usuario*/    
$('button.delete-user').on('click', function(e){
  e.preventDefault();
  var self = $(this);
  swal({
      title             : "Estas seguro?",
      text              : "Se eliminara el usuario de forma permante!",
      type              : "warning",
      showCancelButton  : true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText : "Si, eliminalo!",
      cancelButtonText  : "No, cancela!",
      closeOnConfirm    : false,
      closeOnCancel     : false
  },
  function(isConfirm){
      if(isConfirm){
     //     swal("Eliminado!","Se elimino el usuario de manera exitosa", "success");
          setTimeout(function() {
              self.parents(".delete_user").submit();
          }, 1000); //2 second delay (2000 milliseconds = 2 seconds)
      }
      else{
            swal("cancelado","El usuario esta a salvo", "error");
      }
  });
});


/*Carga el modal de eliminar productos*/    
$('button.delete-product').on('click', function(e){
    e.preventDefault();
    var self = $(this);
    swal({
        title             : "Estas seguro?",
        text              : "Se eliminara el producto de forma permante!",
        type              : "warning",
        showCancelButton  : true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText : "Si, eliminalo!",
        cancelButtonText  : "No, cancela!",
        closeOnConfirm    : false,
        closeOnCancel     : false
    },
    function(isConfirm){
        if(isConfirm){
           // swal("Eliminado!","Se elimino el producto de manera exitosa", "success");
            setTimeout(function() {
                self.parents(".delete_product").submit();
            }, 1000); //2 second delay (2000 milliseconds = 2 seconds)
        }
        else{
              swal("cancelado","El producto esta a salvo", "error");
        }
    });
  }); 


/*Carga el modal de eliminar categorias*/    
$('button.delete-category').on('click', function(e){
    e.preventDefault();
    var self = $(this);
    swal({
        title             : "Estas seguro?",
        text              : "Se eliminara la categoria de forma permante!",
        type              : "warning",
        showCancelButton  : true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText : "Si, eliminalo!",
        cancelButtonText  : "No, cancela!",
        closeOnConfirm    : false,
        closeOnCancel     : false
    },
    function(isConfirm){
        if(isConfirm){
       //     swal("Eliminado!","Se elimino el usuario de manera exitosa", "success");
            setTimeout(function() {
                self.parents(".delete_category").submit();
            }, 1000); //2 second delay (2000 milliseconds = 2 seconds)
        }
        else{
              swal("cancelado","La categoria esta a salvo", "error");
        }
    });
  });

  /*Ajax para añadir producto al carrito*/
  $(document).ready(function(){
    $(".add-to-cart").on("submit",function(ev){
       ev.preventDefault();
       
        var $form = $(this);
        var $button = $form.find("[type ='submit']");

        $.ajax({
            url: $form.attr("action"),
            method: $form.attr("method"),
            data: $form.serialize(),
            dataType:"JSON",
            beforeSend: function(){
                $button.val("Cargando...");
            },
            success: function(data){
                $button.css("background-color","#00c853").val("Agregado");                

                $(".circle-shopping-cart").html(data.products_count).addClass("highlight");
                setTimeout(function(){
                    restartButton($button);
                }, 2000);
            },
            error: function(err){
                console.log(err)
                $button.css("background-color","#d50000").val("Hubo un error");

                setTimeout(function(){
                    restartButton($button);
                }, 2000);
            }
        });
       return false;
    });

    function restartButton($button){
        $button.val("Agregar al carrito").attr("style","");
        $(".circle-shopping-cart").removeClass("highlight");
    }
  });

const $filtrosToggle = $('#filtrosToggle')
$filtrosToggle.click(function (ev){
    ev.preventDefault()

    const $i = $filtrosToggle.find('i.fa')
    const isDown = $i.hasClass('fa-chevron-down')
    if(isDown){
        $i.removeClass('fa-chevron-down').addClass('fa-chevron-up')
    }
    else{
        $i.removeClass('fa-chevron-up').addClass('fa-chevron-down')
    }
})
  
  