

function Validator(options) {					
	
    var form 	=	 document.querySelector(options.form);
        
    if (form) { 
    	
    	var inputElement	 =	 form.querySelector( options.rule.selector );
        
        var errorElement 	 =	 getParent(inputElement , options.formGroup)	
        
									.querySelector(options.formMessage);         
        
        
    	inputElement.onblur 	=	 function () {
        
    		validate( inputElement , options);    		
        }

    	
    	inputElement.onfocus 	=	 function () {
            
    		errorElement.innerText 		=	 'please tap me';
        }
        
    	
    	inputElement.oninput 	=	 function () {
    		
    		errorElement.innerText 		=	 'continue...';
            
    		getParent(inputElement , options.formGroup).classList.remove('invalid');
        }
    	
    	
	        
    	form.onsubmit 	=	 function (e) {
    	    		
    				
	        e.preventDefault();	     
	            
	        var isValid 		=	 validate(inputElement , options );
	            
	        console.log('isValid - ' , isValid);
	        
	        
	        var isFormValid 	=	 true;
	        
	        if (!isValid) {
	            	
	            isFormValid = false;
	        }      
	        
	        
	        if (isFormValid) {        	
	        	
	        	console.log('form is valid - ' , isFormValid);	        	
	        	
	        	form.submit();
	        	
	        	console.log('form is valid 2- ' , isFormValid);
	        }
	        else{
	        	
	        	console.log('isFormValid - ' , isFormValid );
	            
	        }
	        
	    }

    
    }

}


	 