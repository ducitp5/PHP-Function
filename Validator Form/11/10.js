document.addEventListener('DOMContentLoaded' , function () {

	// Mong muốn của chúng ta

    Validator( 
    {
        
        form				: '#form-1',
        formGroupSelector	: '.form-group',
        errorSelector		: '.form-message',
        
        rules				: [
            
            Validator	.isRequired		('#fullname'	,	 'Vui lòng nhập tên đầy đủ của bạn'),
   
        ],
        
        onSubmit: function (data) {
        	
	        // Call API
        	console.log('my data');
        	
        	console.log(data);
        }
    });


});


	
