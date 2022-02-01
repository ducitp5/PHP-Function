<html>
<head>
<title>Contact Us Form</title>
<link rel="stylesheet" type="text/css" href="style.css" />
</head>


<body>

    <div class="form-container">
    
    	<h1 class="notification">notification</h1>
    	
        <form 	name="frmContact" 	id="myForm" 	frmContact"" 	method="post"
        
              	action="send_contact_mail.php" 			enctype="multipart/form-data"
              	
	            onsubmit="return validateContactForm()">


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
                
                <textarea 	name="content" id="content"
                    		class="input-field" cols="60" rows="6">
        		</textarea>
            </div>
            
            
            <div>
                <input type="submit" name="send" class="btn-submit" 
                		onclick="sendEmail()"   value="Send" />

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

			var userName 		= $("#userName")	.val();		    
			var userEmail 		= $("#userEmail")	.val();			   
			var subject 		= $("#subject")		.val();			   
			var content 		= $("#content")		.val();
		    

			console.log('day la 112');
			
			$.ajax({

				url			:   'send_contact_mail.php',
				method		:	'POST',
				dataType	:	'json',

				data		:	{

					name		:	userName,
					email		:	userEmail,
					subject		:	subject,
					body		:	content
				},

				success		:	function(response){

					$('#myForm')[0].reset();
					$('.notification').text("message sent OKK");
				}
			})
		}
    </script>


</body>
</html>