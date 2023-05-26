function usNotify(type, text) {
	let iconType = 'info';
	
	switch (type) {
	  case 'success':
	    iconType = 'fas fa-check';
	    break;
	  case 'danger':
	    iconType = 'fas fa-times';
	    break;
	  case 'warning':
	    iconType = 'fas fa-exclamation';
	    break;
	}
	
	$.notify({
		message: text,
		icon: iconType
	},{
		type: type
	});
}