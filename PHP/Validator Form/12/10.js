document.addEventListener('DOMContentLoaded' , function () {

	// Mong muốn của chúng ta

    Validator( 
    {
        
        form				: '#form-1',
        formGroupSelector	: '.form-group',
        errorSelector		: '.form-message',
        
        rule				: 
            //							  selector				message
        	
            Validator	.isRequired		('#fullname'	,	 'Vui lòng nhập tên đầy đủ của bạn'),
   
        
        
        onSubmit: function (data) {
        	
	        // Call API
        	console.log('my data');
        	
        	console.log(data);
        }
    });


});


	
