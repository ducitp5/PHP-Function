<html>
<head>

    <title>Contact Us Form</title>

    <link rel="stylesheet" type="text/css" href="style.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>


<body>

	

	<div class="form-container">

    	<h1 class="notification">notification</h1>
    	
    	<h1 class="notification">BY AJAX SEND TO</h1>
    	
    	
        <form 	name="frmContact" 	id="myForm" 	method="post"
        
              	enctype="multipart/form-data" >


            <div class="input-row">
            
                <label style="padding-top: 20px;">Name</label> 
                
                <span  id="userName-info" class="info"></span>
                    
                <br /> 
                
                <input  type="text" class="input-field" name="userName"  id="userName" />
                
            </div>
            
            
            <div class="input-row">
            
                <label>Email</label> 
                
                <span id="userEmail-info"	 class="info"></span>
                    
                <br /> 
                
                <input type="text"   class="input-field" name="userEmail" id="userEmail" />
            </div>
            
            
            <div class="input-row">
            
                <label>Subject</label> 
                
                <span id="subject-info"    class="info"></span>
                    
                <br /> 
                
                <input type="text"         class="input-field" name="subject" id="subject" />
            </div>
            
            
            <div class="input-row">
            
                <label>Message</label> 
                
                <span id="userMessage-info"   class="info">		</span>
                
                <br />
                
                <textarea 	name="content" 		id="content"
                
                    		class="input-field" cols="60" rows="6">
        		</textarea>
            </div>
            
            
            <div>
                <input 	type="button" 	name="send" 	class="btn-submit" 
                
                		onclick="sendEmail()"   		value="Send" />
                		
        		<input 	type="reset" 	name="reset" 	class="btn-submit" 
                
                		value="Reset" />


                <div id="statusMessage"> 
                
<?php

    if (! empty($message)) {
?>
	                <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
<?php

    }
?>
                </div>
            </div>
        
        </form>
        
    </div>




    




    <script src="https://code.jquery.com/jquery-2.1.1.min.js"        type="text/javascript">	</script>
    
    
    <script type="text/javascript" src="contact-view.js">	</script>
    
    <script type="text/javascript">

    	

		function sendEmail(){

			console.log('day la 121');
			
			if(validateContactForm()){				
    
    			console.log('day la 131');
    			
    			$.ajax({
    
    				url			:   'send_contact_mail.php',
    				method		:	'POST',
    				dataType	:	'JSON',
    
    				data		:	{
    
    					name		:	$("#userName")		.val(),
    					email		:	$("#userEmail")		.val(),
    					subject		:	$("#subject")		.val(),	
    					body		:	$("#content")		.val()
    				},
    
    				success		:	function(){
        				
 //   					alert('gui thanh cong 151');
 
    					$('#myForm')[0].reset();

    			 		$('.notification').text("message sent OKK");
    			 		
 //   					console.log('gui thanh cong 151');
    		 		},
    				
    				error : function (xhr , status , error){

    					console.log('157');
    					alert(error);
						console.log('xhr is - ' 	+xhr);
						console.log('status is -' 	+status);
						console.log('error is -' 	+error);
						
    				}
    			})
    		}
    	}
		
    </script>


</body>
</html>