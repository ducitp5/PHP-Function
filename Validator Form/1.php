<style>
     @import url("myCSS.css"); 
</style>



<div class="main">

	<form action="" method="POST" class="form" id="form-1">
	
        <h3 class="heading">Thành viên đăng ký</h3>
        
        <p class="desc">Cùng nhau học lập trình miễn phí tại F8 ❤️</p>
        
        <div class="spacer"></div>
        
        
        <div class="form-group">
        
        	<label 	for="fullname" 	class="form-label">Tên đầy đủ</label> 
        	
        	<input	id="fullname" 	name="fullname" 	type="text" 
        	
        			placeholder="VD: Sơn Đặng"     		class="form-control"> 
        		
    		<span class="form-message"></span>
    		
        </div>
        
        
        <div class="form-group">
        
        	<label for="email" 	class="form-label">Email</label> 
        	
        	<input 	id="email"	name="email" 	type="text" 
        	
        			placeholder="VD: email@domain.com"		class="form-control"> 
        		
    		<span class="form-message"></span>
    		
        </div>
        
        
        <div class="form-group">
        
        	<label for="password" class="form-label">Mật khẩu</label> 
        	
        	<input	id="password" 	name="password" type="password"
        		
        			placeholder="Nhập mật khẩu" 	class="form-control"> 
        			
			<span	class="form-message"></span>
			
        </div>
        
        
        <div class="form-group">
        
        	<label 	for="password_confirmation" 	class="form-label">Nhập lại mật khẩu</label> 
        		
    		<input 	id="password_confirmation"	name="password_confirmation" placeholder="Nhập lại mật khẩu"
        	
        			type="password" 	class="form-control"> 
        		
    		<span class="form-message"></span>
    		
        </div>
        
        <button class="form-submit">Đăng ký</button>
        
	</form>
	


	<form action="" method="POST" class="form" id="form-2">

		<h3 class="heading">Đăng nhập</h3>
	
		<p class="desc">Cùng nhau học lập trình miễn phí tại F8 ❤️</p>

		<div class="spacer"></div>


		<div class="form-group">

			<label for="email" class="form-label">Email</label> 
			
			<input 	id="email"	name="email" type="text" 
			
					placeholder="VD: email@domain.com"		class="form-control"> 
				
			<span class="form-message"></span>
			
		</div>


		<div class="form-group">
		
			<label for="password" class="form-label">Mật khẩu</label> 
			
			<input	id="password" name="password" 	type="password"
				
					placeholder="Nhập mật khẩu" 	class="form-control"> 
					
			<span	class="form-message"></span>
			
		</div>

		<button class="form-submit">Đăng nhập	</button>

		
	</form>

</div>




<script>

    document.addEventListener('DOMContentLoaded' , function () {

    	// Mong muốn của chúng ta
    
        Validator( 
        {
            
            form				: '#form-1',
            formGroupSelector	: '.form-group',
            errorSelector		: '.form-message',
            
            rules				: [
                
                Validator	.isRequired		('#fullname'	, 'Vui lòng nhập tên đầy đủ của bạn'),
                Validator	.isEmail		('#email'),
                Validator	.minLength		('#password'	, 6),
                Validator	.isRequired		('#password_confirmation'),
                
                Validator	.isConfirmed	(

            		'#password_confirmation', 

            		function () {
                    
                  		return document.querySelector('#form-1 #password').value;
                	}, 

                	'Mật khẩu nhập lại không chính xác')
            ],
            
            onSubmit: function (data) {
            // Call API
            console.log(data);
            }
        });



		Validator({
	
			form				: '#form-2',
			formGroupSelector	: '.form-group',
			errorSelector		: '.form-message',
	
			rules				: [
		
				Validator	.isEmail	('#email'),
				Validator	.minLength	('#password', 8),
			],
		
			onSubmit			: function (data) {
			
				console.log(data);
			}
		});
  	});


	


</script>
    



    
<script type="text/javascript"   src="myScript.js">


</script> 




<script>	

</script>