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
                       
        ],
    });


});


	
