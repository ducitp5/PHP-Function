


function validate(inputElement , options) {

	
    var errorElement	=	 getParent	(inputElement   ,  options.formGroup)
        
								.querySelector(options.formMessage);
	
    var errorMessage;
    
    
    for(var i = 0 ; i < options.rules.length ; i++){

    	rule	=	options.rules[i];
	    		
		if($(rule.selector)[0]  ==  inputElement){   		
    		    					
    		errorMessage 	=	 rule.test(inputElement.value);


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
