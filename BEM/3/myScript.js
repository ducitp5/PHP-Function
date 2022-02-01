


function showSuccessToast() {

	toast({
      
		title		: "Thành công!",
		message		: "Bạn đã đăng ký thành công tài khoản tại F8.",
		type		: "success",
		duration	: 800000,
    });
}


function showErrorToast() {

	toast({
     
		title		: "Thất bại!",
		message		: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
		type		: "error",
		duration	: 500000, 
    });
}


  
      
// Toast function

function 	toast({ title 		= "", 
					message 	= "", 
					type 		= "info", 
					duration 	= 3000 }) 	{
  
	
	const 	main 			=	 document.getElementById("toast");


	const 	toastDiv 		=	 document.createElement("div");

    
	toastDiv.onclick 		=	 function (e) {
  
		if (e.target.closest(".toast__close")) {
    
			main.removeChild(toastDiv);
    
			clearTimeout(autoRemoveId);
		}
	};

		
	const autoRemoveId 		=	 setTimeout(function () {
		
		main.removeChild(toastDiv);

	}	,	 duration + 5000);

    
    const icons = {
    		
		success		: "fas fa-check-circle",
		info		: "fas fa-info-circle",
		warning		: "fas fa-exclamation-circle",
		error		: "fas fa-exclamation-circle" 
	};
    

    const icon 		= icons[type];
    
    const delay 	= (duration / 1000).toFixed(2);

        
    toastDiv.style.opacity		=	 1;
       
    toastDiv.style.animation 	=	 `slideInLeft ease 5.3s, fadeOut linear 1s ${delay}s forwards`;

    toastDiv.classList.add("toast" , `toast--${type}`);
    
    toastDiv.onresize			=	 function(e){
    	
    	console.log('toast e - ' , e );
    };
    
        
/*    $(toast).fadeOut(5000, function(){
    	
//    	alert("fadeOut() method is finished!");
    });*/
    

    toastDiv.onmouseenter 		=	 function (e) {
		  
//		this.style.background	=	'green';
	};
	
	toastDiv.onmouseover 		=	 function (e) {
	  
//		this.style.background	=	'red';
	};
	
	toastDiv.onmouseout 		=	 function (e) {
		  
		this.style.background	=	'';
	};
	
    toastDiv.addEventListener('click' , function(e){
    	
    	this.style.background	=	'yellow';
    });
    
    
    toastDiv.innerHTML = `
    
	    <div class="toast__icon">
	    	
	    	<div> <label class="seconds">0</label></div>
	    	
	        <i class="${icon}"></i>
	    </div>
	    
	    <div class="toast__body">
	    
	        <h3 class="toast__title">	${title}		</h3>
	        <p class="toast__msg">		${message}		</p>
	    </div>
	    
	    <div class="toast__close">
	    
	        <i class="fas fa-times"></i>
	    </div>
    `;
    
    
    var secondsLabel 		= 	 $(toastDiv);
    
    console.log('toastDiv - ' 		, toastDiv );
    
    console.log('$(toastDiv) - ' 	, $(toastDiv));
    
    console.log('seconds - ' 		, toastDiv.querySelector('.seconds'));
    
    console.log('$(seconds) - ' 	, $(toastDiv.querySelector('.seconds')));
    
    
    var totalSeconds 	= 	0;
	
	
	setInterval(setTime , 1000);
	
	
	function setTime() {
	
		
		toastDiv.querySelector('.seconds').innerHTML 		= 		++totalSeconds;
		
	}
    
    main	.appendChild(  toastDiv  );
        
}
//# sourceURL=pen.js

