document.addEventListener('DOMContentLoaded' , function () {

	// Mong muốn của chúng ta

    Validator( 
    {
        
        form				: '#form-1',
        formGroup			: '.form-group',
        formMessage			: '.form-message',
        
        rules				: [
            
            Validator	.isRequired		('#fullname'	, 'Vui lòng nhập tên đầy đủ của bạn'),
            Validator	.minLength		('#fullname'	, 6),
            
            Validator	.isEmail		('#email' 		, 'the email type is not valid'),
                                             
            Validator	.isRequired		('#password'),
            Validator	.minLength		('#password'	, 6),
            
            Validator	.isRequired		('#password_confirmation'),
            
            Validator	.isConfirmed	(

	    		'#password_confirmation', 	
	    		
/*	            function(){
	    		
	    			return document.querySelector('#form-1 #password').value;
	    		}, */
          		'#form-1 #password'	, 
	
	        	'Mật khẩu nhập lại không chính xác')
        ],
    });
    
    
    Validator({
    	
		form				: '#form-2',
		formGroup			: '.form-group',
        formMessage			: '.form-message',

		rules				: [
	
			Validator	.isEmail		('#email' 		, 'the email type is not valid'),
            
			Validator	.isRequired		('#password'),
			Validator	.minLength		('#password'	, 8),
		],
	
		onSubmit			: function (data) {
		
			console.log('tu es en submit');
			
			console.log(data);
		}
	});


});


	
