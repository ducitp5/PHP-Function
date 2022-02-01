
/*$.getScript("myScript22.js" , function() {
	
   alert("Script loaded but not necessarily executed.");
});   
*/



document.addEventListener('DOMContentLoaded' , function () {

	// Mong muốn của chúng ta

    Validator( 
    {
        
        form				: '#form-1',
        formGroupSelector	: '.form-group',		// get into Array
        errorSelector		: '.form-message',		//-------------
        
        rules				: [
            
        	//							  selector		  		message
        	
            Validator	.isRequired		('#fullname'	, 'Vui lòng nhập tên đầy đủ của bạn'),
      
        
        ],
        
/*        onSubmit	: function (data) {

        	console.log('30 - ');
        	console.log(data);
        }*/
    });

});


