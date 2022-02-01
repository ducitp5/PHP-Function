

function Validator(options) {					
	
    var form 	=	 document.querySelector(options.form);
        
    if (form) { 
    	
//		collect all inputelements be selected by rule into 1 array    	 	
    	
    	var inputElements	=	[];
    	
//    	console.log('RulesList ' , options.rules);
    	
    	
    	options.rules.forEach(function(rule){
    			
			form.querySelectorAll( rule.selector ) 
			
				.forEach( function(selectedElement){
			
//					console.log('selectedElement ' , selectedElement);
				
					inputElements.push(  selectedElement );
			})
			
    	});
    			
   			        
 //   	console.log('List input Elements - ' , inputElements);

    	
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
    	
/*    	form.onsubmit 	=	 function (e) {
    	    		
    		
	        e.preventDefault();	     
	        
	        
	        inputElements.forEach(function(inputElement){     	
	    			    		    	        
	        	validate( inputElement , options);    		
	            
	    	})
	        
	        
	            
	        var isValid 		=	  validate(inputElement , options );
	            
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

    */
    }

}


	 