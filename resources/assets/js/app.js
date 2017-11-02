$(document).ready(function(){
    $(".dropdown-button").dropdown();
});

$(document).ready(function() {
    Materialize.updateTextFields();
  });

$(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function(){
// the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
    
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
          swal("Eliminado!","Se elimino el usuario de manera exitosa", "success");
          setTimeout(function() {
              self.parents(".delete_user").submit();
          }, 2000); //2 second delay (2000 milliseconds = 2 seconds)
      }
      else{
            swal("cancelado","El usuario esta a salvo", "error");
      }
  });
});

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
            swal("Eliminado!","Se elimino el producto de manera exitosa", "success");
            setTimeout(function() {
                self.parents(".delete_product").submit();
            }, 2000); //2 second delay (2000 milliseconds = 2 seconds)
        }
        else{
              swal("cancelado","El producto esta a salvo", "error");
        }
    });
  });