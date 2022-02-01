

var selectorRules = {};


// Hàm thực hiện validate

function validate(inputElement , rule , options) {

	//	.form-message		.form-group						.form-group
	
    var errorElement	=	 getParent	(inputElement   ,  options.formGroupSelector)
    
    //												.form-message
    
								.querySelector(options.errorSelector);
	
    console.log('formGroupSelector - ' 	, options.formGroupSelector);
    console.log('errorSelector - ' 		, options.errorSelector);
    console.log('errorElement - ' 		, errorElement);
    
    
    var errorMessage;

    console.log('rule.selector - ' 		, rule.selector);	// #fullname
    
    // Lấy ra các rules của selector

    console.log('selectorRules 0 - ' 		, selectorRules);
    var rules			=	 selectorRules[rule.selector];

    console.log('selectorRules - ' 		, selectorRules);
    console.log('rules - ' 				, rules);
    
    // Lặp qua từng rule & kiểm tra
    // Nếu có lỗi thì dừng việc kiểm

    for (var i = 0 ; i < rules.length ; ++i) {

    	console.log('inputElement.type - ' 	, inputElement.type);
    	
        switch (inputElement.type) {
        
            case 'radio':
        
            case 'checkbox':
            
            	errorMessage 	=	 rules[i](
                
        			formElement.querySelector(rule.selector + ':checked')
                );
            	
                break;
            
            default:            
            	
            	console.log('rules[i] - ' 	, rules[i]);
            
            	console.log('inputElement.value - ' 	, inputElement.value);
            	
            	errorMessage 	=	 rules[i](inputElement.value);
            
            	console.log('errorMessage - ' 	, errorMessage);
        }
        
        if (errorMessage) 	break;
    }

    if (errorMessage) {
    	
        errorElement.innerText 		=	 errorMessage;
        
        getParent(inputElement, options.formGroupSelector).classList.add('invalid');
    } 
    else {
    
    	errorElement.innerText = '';
        
    	getParent(inputElement, options.formGroupSelector).classList.remove('invalid');
    }

    return !errorMessage;
}
