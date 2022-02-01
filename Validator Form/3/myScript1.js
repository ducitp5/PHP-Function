
/*$.getScript("myScript22.js" , function() {
	
   alert("Script loaded but not necessarily executed.");
});   
*/



document.addEventListener('DOMContentLoaded' , function () {

	Validator( 
    {
        
        form				: '#form-1',

        selector			: '#fullname',

    	errorSelector		: '.form-message',	
        
    });

});


