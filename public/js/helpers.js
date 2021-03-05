let Helpers = {

	/**
	 * Mostrar modal tipo jquery confirm para BeforeSend Ajax
	 *
	 */
  loading_open : () => {
    Jconfirm_loading = $.dialog({
      escapeKey: true,
      backgroundDismiss: false,
      closeIcon: false,
      title: '',
      theme: 'supervan', //
      content: '<center><i class="fas fa-circle-notch fa-spin fa-4x"></i><br>Espere por favor</center>',
    });
  },

	/**
	 * Ocultar modal tipo jquery confirm para BeforeSend Ajax
	 *
	 */
  loading_hide : () => {
    Jconfirm_loading.close();
  },

	/**
	 * Mostrar alert modal para notificaciones tipo alert
	 *
	 * @param string de mensaje para mostrar
	 * @param string de tipo success o error
	 * @return Array de datos ordenados
	 */
  alert : (mensaje, tipo) => {
    let color = '';
    if(tipo == 'success'){
      color = 'blue';
    }else if (tipo == 'error') {
      color = 'red';
    }

    $.alert({
        title: '',
        // useBootstrap: true,
        boxWidth: '40%',
        type : color,
        buttons: {
          yes: {
                text: 'Aceptar',
                btnClass: 'btn btn-light active btn-sm',
                action: function(){
                  // alert("si...");
                }
            }

        },
        content: '<b>'+mensaje+'<b>',
    });
  },

	/**
	 * Mostrar errores Ajex
	 *
	 * @param jqXHR
	 * @param textStatus
	 * @return errorThrown
	 */
  error_ajax : function(jqXHR, textStatus, errorThrown){
    if (jqXHR.status === 0) {
      Helpers.alert("Not connect: Verify Network", "error");
    } else if (jqXHR.status == 404) {
      Helpers.alert("Requested page not found [404]", "error");
    } else if (jqXHR.status == 500) {
      Helpers.alert("Internal Server Error [500]", "error");
    } else if (textStatus === "parsererror") {
      Helpers.alert("Requested JSON parse failed", "error");
    } else if (textStatus === "timeout") {
      Helpers.alert("Time out error", "error");
    } else if (textStatus === "abort") {
      Helpers.alert("Ajax request aborted", "error");
    } else {
      Helpers.alert("Uncaught Error: "+qXHR.responseText, "error");
    }

  }


};
