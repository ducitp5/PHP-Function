


function validate(inputElement , rule , options) {

	//	.form-message		.form-group						.form-group
	
    var errorElement	=	 getParent	(inputElement   ,  options.formGroupSelector)
        
								.querySelector(options.errorSelector);
	
    console.log('inputElement - ' 		, inputElement);
    console.log('errorElement - ' 		, errorElement);

    console.log('rule.selector - ' 		, rule.selector);	// #fullname

	console.log('inputElement.type - ' 	, inputElement.type);             
        	
	console.log('rule - ' 					, rule);

	console.log('rule.test - ' 				, rule.test);
	console.log('inputElement.value - ' 	, inputElement.value);
	
	
	var errorMessage 	=	 rule.test(inputElement.value);

	console.log('errorMessage - ' 	, errorMessage);
   
   

    if (errorMessage) {
    	
        errorElement.innerText 		=	 errorMessage;
        
        getParent(inputElement, options.formGroupSelector).classList.add('invalid');
    } 
    else {
    
    	errorElement.innerText = '';
        
    	getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
    }

//    return !errorMessage;
}
