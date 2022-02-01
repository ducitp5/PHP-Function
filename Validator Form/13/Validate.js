


function validate(inputElement , options) {

	
    var errorElement	=	 getParent	(inputElement   ,  options.formGroup)
        
								.querySelector(options.formMessage);
	
  	
	var errorMessage 	=	 options.rule.test(inputElement.value);


    if (errorMessage) {
    	
        errorElement.innerText 		=	 errorMessage;
        
        getParent(inputElement	,  options.formGroup).classList.add('invalid');
    } 
    else {
    
    	errorElement.innerText 		=	 '';
        
    	getParent(inputElement	,  options.formGroup).classList.remove('invalid');
    }
    
    var 		valid	=	!errorMessage;
    
    return		valid;
}
