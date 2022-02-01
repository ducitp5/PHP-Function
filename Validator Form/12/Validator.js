
    

// Đối tượng `Validator`

function Validator(options) {
	
	
    // Lấy element của form cần validate
    
	//											
	
    var form 	=	 document.querySelector(options.form);
    
    console.log('form - ' , form);
    
    if (form) {
    	
        // Khi submit form
        
    	form.onsubmit 	=	 function (e) {    		
			
            e.preventDefault();        
        }
    	
    	console.log('options.rule - ' 			, options.rule);
    	console.log('options.rule.selector - ' 	, options.rule.selector);
    	console.log('options.rule.test - ' 		, options.rule.test);
    	
    	var inputElement	 =	 form.querySelector(options.rule.selector);
        console.log('inputElement  - ' , inputElement);
        
        var errorElement 			=	 getParent(inputElement, options.formGroupSelector)		
		//
											.querySelector(options.errorSelector);        
        console.log('errorElement  - ' , errorElement);
        
        
        
    	inputElement.onblur 	=	 function () {
        
    		validate( inputElement , options.rule , options);    		
        }

    	
    	inputElement.onfocus 	=	 function () {
            
    		errorElement.innerText 		=	 'please tap me';
        }
        
    	
    	inputElement.oninput 	=	 function () {
    		
    		errorElement.innerText 		=	 'continue...';
            
    		getParent(inputElement , options.formGroupSelector).classList.remove('invalid');
        }

    
    }

}


	 