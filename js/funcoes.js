function alerta(titulo, mensagem, tipo) {
	var tipoalerta =[];
	tipoalerta["alerta"]="warning";
	tipoalerta["info"]="info";
	tipoalerta["erro"]="error";
	tipoalerta["sucesso"]="success";
	var coralerta =[];
	coralerta["alerta"]="#d07806";
	coralerta["info"]="#366f92";
	coralerta["erro"]="#a74641";
	coralerta["sucesso"]="#417739";
	
	$.toast({
		text: mensagem, // Text that is to be shown in the toast
		heading: titulo, // Optional heading to be shown on the toast
		icon: tipoalerta[tipo], // Type of toast icon
		showHideTransition: 'slide', // fade, slide or plain
		allowToastClose: true, // Boolean value true or false
		hideAfter: 6000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
		stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
		position: 'top-right', // bottom-left or bottom-right or bottom-center or top-left or top-right or top-center or mid-center or an object representing the left, right, top, bottom values
		
		
		
		textAlign: 'left',  // Text alignment i.e. left, right or center
		loader: true,  // Whether to show loader or not. True by default
		loaderBg: coralerta[tipo],  // Background color of the toast loader
		beforeShow: function () {}, // will be triggered before the toast is shown
		afterShown: function () {}, // will be triggered after the toat has been shown
		beforeHide: function () {}, // will be triggered before the toast gets hidden
		afterHidden: function () {}  // will be triggered after the toast has been hidden
	    });
              
	
}



