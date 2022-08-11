$(document).ready(function() {
  
  $("#close-sesion").click(function(){
    let url= $(this).data("url")
    $.ajax({
      
      url:   url,
      dataType: 'html',
      type:  'post',
      beforeSend: function () {
          //mostramos gif "cargando"
          //jQuery('#loading_spinner').show();
          //antes de enviar la petición al fichero PHP, mostramos mensaje
          //jQuery("#resultado").html("Déjame pensar un poco...");
      },
      success:  function (response) {
        window.location.href = response;
          //escondemos gif
          //jQuery('#loading_spinner').hide();
          //jQuery("#resultado").html(response);

      }
  });
  });
});
