


function validate(inputElement , options) {

//	console.log('options - ' , options);
	
    var errorElement	=	 getParent	(inputElement   ,  options.formGroup)
        
								.querySelector(options.formMessage);
	
    var errorMessage;
    
    
    for(var i = 0 ; i < options.rules.length ; i++){

    	
    	var inputSelector	=	$( options.form + ' ' +options.rules[i].selector ) [0];
    	
   	
		if(inputSelector  ==  inputElement){   		
    		    					
    		errorMessage 	=	 options.rules[i].test(inputElement.value);

    		console.log('errorMessage ' +i+ ' - ', errorMessage);

    		if (errorMessage) {
    	    	
    	        errorElement.innerText 		=	 errorMessage;
    	        
    	        getParent(inputElement	,  options.formGroup).classList.add('invalid');   	        
    	    } 
			else {
			
				errorElement.innerText 		=	 '';

				getParent(inputElement , options.formGroup)				
					.classList
					.remove('invalid');
			}   		
    	}
		if(errorMessage)	break;
    }
    
    var 	 valid 	  =   !errorMessage;
    
    
    return   valid;
    
}
