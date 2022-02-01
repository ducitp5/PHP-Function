

// Định nghĩa rules
// Nguyên tắc của các rules:
// 1. Khi có lỗi => Trả ra message lỗi
// 2. Khi hợp lệ => Không trả ra cái gì cả (undefined)


//		function (selector , ...)

Validator.isRequired 	=	 function (selector , message) {
	
	return {
		
		selector	: selector,
		
		test 		: function (value) {
			
			console.log('value required- ' , value);
			
			return	  value 	?	 
					
							undefined 
							
								: 
									
							message || 'Vui lòng nhập trường này'
		}
	};
}




Validator.isEmail 	=	 function (selector, message) {

	return {
	
		selector	: selector,
		
		test		: function (value) {
			
			var regex 	=	 /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			
			return 		regex.test(value) 		? 
					
							undefined 			: 
								
							message || 'Trường này phải là email';
		}
	};
}


Validator.minLength 	=	 function (selector, min, message) {
	
	return {
	
		selector	:	 selector,
		
		test		:	 function (value) {
			
			return 	 	 value.length  >=  min 	? 
					
							undefined 
							
								: 
									
							message || `Vui lòng nhập tối thiểu ${min} kí tự`;
		}
	};
}



/*Validator.isConfirmed = function (selector, getConfirmValue, message) {
	
	return {
	
		selector: selector,
		
		test: function (value) {
		
			console.log('pass - ' , getConfirmValue);
			
			return 		value   ===   getConfirmValue() 	? 
					
							undefined 
							: 
							message || 'Giá trị nhập vào không chính xác';
		}
	}
}
*/



Validator.isConfirmed 		=	 function (selector , ConfirmelementID , message) {

	return 		{
	
		selector	:	 selector,
		
		passElement	:	 document.querySelector(ConfirmelementID),
		
		test		:	 function (value) {
						
			return	value   ===   this.passElement.value	 	? 
					
							undefined 	
								: 
							message || 'Giá trị nhập vào không chính xác';
		}
	}
}

