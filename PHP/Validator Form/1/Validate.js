

var selectorRules = {};


// Hàm thực hiện validate

function validate(inputElement , rule , options) {

    var errorElement	=	 getParent	(inputElement   ,  options.formGroupSelector)

								.querySelector(options.errorSelector);
			
    var errorMessage;

    // Lấy ra các rules của selector

    var rules			=	 selectorRules[rule.selector];

    console.log('rules - ' , rules);
    
    // Lặp qua từng rule & kiểm tra
    // Nếu có lỗi thì dừng việc kiểm

    for (var i = 0 ; i < rules.length ; ++i) {

        switch (inputElement.type) {
        
            case 'radio':
        
            case 'checkbox':
            
            	errorMessage 	=	 rules[i](
                
        			formElement.querySelector(rule.selector + ':checked')
                );
            	
                break;
            
            default:
            
            	errorMessage 	=	 rules[i](inputElement.value);
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
