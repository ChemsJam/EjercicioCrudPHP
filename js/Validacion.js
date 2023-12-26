function validarForm(form1){

    // TEXT        **********************
	if(form1.txt_Nombre.value == null || 
       form1.txt_Nombre.value.length ==0 ||
       /^\s+$/.test(form1.txt_Nombre.value)
      ){ //Validacion de campo instituto vacio
        alert('Insert your name'); // envia mensaje
	    form1.txt_Nombre.focus(); //enviar el cursor al campo de instituto 
		return false; //termina la funcion validarForm
	} 
    
    if(form1.txt_ApPat.value == null || 
       form1.txt_ApPat.value.length ==0 ||
       /^\s+$/.test(form1.txt_ApPat.value)
      ){ //Validacion de campo instituto vacio
        alert('Insert your First Name'); // envia mensaje
	    form1.txt_ApPat.focus(); //enviar el cursor al campo de instituto 
		return false; //termina la funcion validarForm
	} 
    
    if(form1.txt_ApMat.value == null || 
       form1.txt_ApMat.value.length ==0 ||
       /^\s+$/.test(form1.txt_ApMat.value)
      ){ //Validacion de campo instituto vacio
        alert('Insert your name'); // envia mensaje
	    form1.txt_ApMat.focus(); //enviar el cursor al campo de instituto 
		return false; //termina la funcion validarForm
	} 
    
    // NUMBER       **********************    
    if(form1.txt_Edad.value.length==0 || 
       isNaN(form1.txt_Edad.value)){
        if(form1.txt_Edad.value.length==0){
           alert('Insert your Age');
        }else if(isNaN(form1.txt_Edad.value)){
           alert('The Age is a number');
        }
	    form1.txt_Edad.focus();
		return false; 
	}
	
    // RADIOBUTTON **********************
    var seleccionado = false;
    for(var i=0; i<form1.rad_Sex.length; i++) {
        if(form1.rad_Sex[i].checked) {
            seleccionado = true;
            break;
        }
    }    
	if(!seleccionado){
	    alert('Select a Sex');
        form1.rad_Sex[0].focus(); 
		return false; 
	}
    
    // telephone NUMBER ******************    
    if(form1.txt_Telephone.value.length==0 || 
       !(/^\d{9}$/.test(form1.txt_Telephone.value))  ){
           alert('The telephone number');
	    form1.txt_Telephone.focus();
		return false; 
	}
    
    // LIST       **********************
	if(form1.lst_sexo.value.length==0 || form1.lst_sexo.value == "Seleccionar..."){ 
	    alert('Select Marital Estatus');
        form1.lst_sexo.focus();
		return false;
	}
    
    // CHECK      **********************
	if(!form1.color1.checked && !form1.color2.checked && !form1.color3.checked){ 
	    alert('Select a color');
        form1.color1.focus();
		return false;
	}
    
    // MAIL      **********************
    if( !(/^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i.test(form1.txt_Mail.value)) ) {
        alert('verified Mail');
        form1.txt_Mail.focus();        
        return false;
    }
	
	return true;
}