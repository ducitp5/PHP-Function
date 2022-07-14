
    

// Đối tượng `Validator`

function Validator(options) {
	
	
    // Lấy element của form cần validate
    
    var formElement 	=	 document.querySelector(options.form);
    
    if (formElement) {
    	
        // Khi submit form
        
    	formElement.onsubmit 	=	 function (e) {
    		
			
            e.preventDefault();

            var isFormValid 	=	 true;

            // Lặp qua từng rules và validate
            
            options.rules	.forEach( function (rule) {
            	
                var inputElement 	=	 formElement	.querySelector( rule.selector );
                
                var isValid 		=	 validate(inputElement , rule , options );
                
                if (!isValid) {
                	
                    isFormValid = false;
                }
            });

            if (isFormValid) {        	
            	
            	console.log('form is valid - ' , isFormValid);
            	
            	// Trường hợp submit với javascript
            	
                if (typeof options.onSubmit === 'function') {
                
                	console.log('valid by fucntion - ' , options.onSubmit );
                	
                	var enableInputs 	=	 formElement.querySelectorAll('input[name]');	// NodeList
                    
                	console.log('enableInputs - ' , enableInputs);
                	
                	console.log('Array from - ' , Array.from(enableInputs));				// Array
                	
                	var formValues 		=	 Array.from(enableInputs).reduce(function (values, input) {

                		console.log('values - ' , values);
                		console.log('input  - ' , input);
                		
                		console.log('input.type - ' , input.type);
                		
                        switch (input.type) {
                        
                            case 	'radio':
                            	
                                values[input.name] 		=	 formElement.querySelector('input[name="' + input.name + '"]:checked').value;
                                
                                break;
                            
                            case 	'checkbox':
                            	
                                if (!input.matches(':checked')) {
                                
                                	values[input.name] = '';
                                    
                                	return values;
                                }
                                if (!Array.isArray(values[input.name])) {
                                    
                                	values[input.name] = [];
                                }
                                
                                values[input.name].push(input.value);
                                
                                break;
                                
                            case 'file':
                                
                            	values[input.name] = input.files;
                                
                            	break;
                            
                            default:
                            
                            	values[input.name] = input.value;
                        }

                        console.log('values end - ' , values);
                        
                        return values;

                	}	,	 {});
                	
                    options.onSubmit(formValues);
                }
                
                // Trường hợp submit với hành vi mặc định
                
                else {
                	
                	console.log('valid by default - ' , formElement );
                
                	formElement.submit();
                }
            }
        }

        // Lặp qua mỗi rule và xử lý (lắng nghe sự kiện blur, input, ...)
        options.rules.forEach(function (rule) {

            // Lưu lại các rules cho mỗi input
        	
            if (Array.isArray(selectorRules[rule.selector])) {
            	
                selectorRules[rule.selector].push(rule.test);
            } 
            else {
            
            	selectorRules[rule.selector] 	=	 [rule.test];
            }

            var inputElements	 =	 formElement.querySelectorAll(rule.selector);

            
            Array.from(inputElements).forEach(function (inputElement) {
            
            	// Xử lý trường hợp blur khỏi input
                
            	inputElement.onblur 	=	 function () {
                
            		validate( inputElement , rule , options);
                }

                // Xử lý mỗi khi người dùng nhập vào input
                
            	inputElement.oninput = function () {
                
            		var errorElement 			=	 getParent(inputElement, options.formGroupSelector).querySelector(options.errorSelector);
                    
            		errorElement.innerText 		=	 '';
                    
            		getParent(inputElement , options.formGroupSelector).classList.remove('invalid');
                }
            });
        });
    }

}


	 