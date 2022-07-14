document.addEventListener('DOMContentLoaded' , function () {

	// Mong muốn của chúng ta

    Validator( 
    {
        
        form				: '#form-1',
        formGroup			: '.form-group',
        formMessage			: '.form-message',
        
        rule				: 
            //							  selector				message
        	
            Validator	.isRequired		('#fullname'	,	 'Vui lòng nhập tên đầy đủ của bạn'),

    });


});


	
