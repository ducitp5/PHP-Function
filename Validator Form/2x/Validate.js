


function validate(inputElement , options) {

	
    var errorElement	=	 getParent	(inputElement   ,  options.formGroup)
        
								.querySelector(options.formMessage);
	
    var errorMessage;
    
    
    console.log("options.rules - " , options.rules  );    
    
    for(var i = 0 ; i < options.rules.length ; i++){
    	
    	var rule = options.rules[i];
    
//    options.rules.forEach( function(rule){
    	
	
 //   	if(rule.selector == '#'+inputElement.getAttribute("id")){
    		
		if($(rule.selector)[0] == inputElement){   		
    		
    		console.log("selector - " , $(rule.selector)  );    
    		
    		
    		errorMessage 	=	 rule.test(inputElement.value);
    		
    		console.log("errorMessage - " , errorMessage  );
    		
    		
    		if (errorMessage) {
    	    	
    	        errorElement.innerText 		=	 errorMessage;
    	        
    	        getParent(inputElement	,  options.formGroup).classList.add('invalid');   	        
    	    } 
			else {
			
				errorElement.innerText 		=	 '';

				getParent(inputElement, options.formGroup)				
					.classList
					.remove('invalid');
			}    		
    	}   

		if (errorMessage) break;
//    })
    }
    
    var valid 	=	 !errorMessage;
    
    
    return   valid;
    
    
    
/*	


    
  
    
    var 		valid	=	!errorMessage;
    
    return		valid;*/
}
