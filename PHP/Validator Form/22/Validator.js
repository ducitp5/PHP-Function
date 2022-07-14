

function Validator(options) {					
	
    var form 	=	 document.querySelector(options.form);
        
    if (form) { 
    	
    	var inputElements	=	[];
    	
    	options.rules.forEach(function(rule){
    			
			form.querySelectorAll( rule.selector ) 
			
				.forEach( function(selectedElement){
							
					inputElements.push(  selectedElement );
			})
			
    	});
    			
    	
 //		Event : focus , oninput , onblur   	
    	
    	inputElements.forEach(function(inputElement){
    	
    		
    		var errorElement 	 =	 getParent(inputElement , options.formGroup)	
            
										.querySelector(options.formMessage); 
    		
    		inputElement.onfocus 	=	 function () {
                
        		errorElement.innerText 		=	 'please tap me';
            }
            
    		
    		inputElement.oninput 	=	 function () {
        		
        		errorElement.innerText 		=	 'continue...';
                
        		getParent(inputElement , options.formGroup).classList.remove('invalid');
            }
    		
    		
    		inputElement.onblur 	=	 function () {
    	        
        		validate( inputElement , options);    		
            }
    	})
   	
    	
 //		Event onsubmit   
    	
    	form.onsubmit 	=	 function (e) {
    	    		
    		
	        e.preventDefault();	     
	        
	        
	        var isFormValid 		=	true;
	        
	        inputElements.forEach(function(inputElement){     	
	    			    		    	        
	        	if( ! validate( inputElement , options) )	
	        		
	        		isFormValid 	=	 false;    			            
	    	})
	        	            
	        console.log('isFormValid - ' , isFormValid);
	        
	        
	        if (isFormValid) {        		        	   	
	        	
	        	form.submit();	        	
	        }	    	        
	    }    
    }

}


	 