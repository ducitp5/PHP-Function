

// Định nghĩa rules
// Nguyên tắc của các rules:
// 1. Khi có lỗi => Trả ra message lỗi
// 2. Khi hợp lệ => Không trả ra cái gì cả (undefined)


//		function (selector , ...)

Validator.isRequired 	=	 function (selector , message) {
	
	return {
		
		selector	: selector,
		
		test		: function (value) {
			
			console.log('value - ' , value);
			
			return	  value 	?	 
					
							undefined 
							
								: 
									
							message || 'Vui lòng nhập trường này'
		}
	};
}



