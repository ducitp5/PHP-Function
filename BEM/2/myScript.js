


function showSuccessToast() {

	toast({
      
		title		: "Thành công!",
		message		: "Bạn đã đăng ký thành công tài khoản tại F8.",
		type		: "success",
		duration	: 15000,
    });
}


function showErrorToast() {

	toast({
     
		title		: "Thất bại!",
		message		: "Có lỗi xảy ra, vui lòng liên hệ quản trị viên.",
		type		: "error",
		duration	: 5000000, 
    });
}


  
      
// Toast function

function 	toast({ title 		= "", 
					message 	= "", 
					type 		= "info", 
					duration 	= 3000 }) 	{
  
	
	const 	main 			=	 document.getElementById("toast");


	const toast 			=	 document.createElement("div");

//	console.log('new toast - ' , toast);
    
	toast.onclick 		=	 function (e) {
  
		if (e.target.closest(".toast__close")) {
    
			main.removeChild(toast);
    
			clearTimeout(autoRemoveId);
		}
	};

		
	const autoRemoveId 		=	 setTimeout(function () {
		
		main.removeChild(toast);

	}	,	 duration + 5000);

    
    const icons = {
    		
		success		: "fas fa-check-circle",
		info		: "fas fa-info-circle",
		warning		: "fas fa-exclamation-circle",
		error		: "fas fa-exclamation-circle" 
	};
    

    const icon 		= icons[type];
    
    const delay 	= (duration / 1000).toFixed(2);

        
    toast.style.opacity		=	 1;
       
    toast.style.animation 	=	 `slideInLeft ease 23.3s, fadeOut linear 1s ${delay}s forwards`;

    toast.classList.add("toast" , `toast--${type}`);
    
    toast.onresize			=	 function(e){
    	
    	console.log('toast e - ' , e );
    };
    console.log('toast - ' , toast );
    
/*    $(toast).fadeOut(5000, function(){
    	
//    	alert("fadeOut() method is finished!");
    });*/
    

    toast.onmouseenter 		=	 function (e) {
		  
		this.style.background	=	'green';
	};
	
	toast.onmouseover 		=	 function (e) {
	  
		this.style.background	=	'red';
	};
	
	toast.onmouseout 		=	 function (e) {
		  
		this.style.background	=	'';
	};
	
    toast.addEventListener('click' , function(e){
    	
    	this.style.background	=	'yellow';
    });
    
    
    toast.innerHTML = `
    
	    <div class="toast__icon">
	    
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
    
    main	.appendChild(  toast  );
    
//  }
    
}
//# sourceURL=pen.js

