

function Validator(options) {

	//											#form-1	
    
    var formElement 	=	 document.querySelector(options.form);
    
    console.log('form Element - ' , formElement);
    
    if (formElement) {		
    	
    	
    	var selector 		=	 formElement	.querySelector( options.selector );
    	
    	var errorSelector 	=	 formElement	.querySelector( options.errorSelector );
    	
        
    	formElement.onsubmit 	=	 function (e) {
    		
			
            e.preventDefault();

            
            console.log('selector - ' 		, selector );
            
            
            console.log('errorSelector - ' 	, errorSelector );
        }       
    	
    	
    	
    	
    	
    	
    	selector.onblur 	=	 function () {
            
    		
    		errorSelector.parentElement.classList.add('invalid');
        	
        	errorSelector.innerText 	=	 'sai rui';
    		
        }
    	
    	
    	selector.oninput 	=	 function () {
            
//    		alert('in input');
    		
    		errorSelector.parentElement.classList.remove('invalid');
    		
    		errorSelector.innerText		=	 '';
            
    		
        }
    }
   
	
    

}


	