<?php    session_start();     ?>


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

    	<h1 class="notification">notification </h1>
    	
    	
    	
    	
    	
        <form 	name="frmContact" 	id="myForm" 	frmContact"" 	method="post"
        
              	action="send_contact_mail.php" 			enctype="multipart/form-data"
              	
	            onsubmit="return validateContactForm()">

			<h1 class="">Sender Name</h1>
			
			<div class="input-row">
            
                <input  type="text" class="input-field" name="sender"   />
                
            </div>
            
            <h1 class="">SEND TO</h1>
            
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
                		  value="Send" />

                <div id="statusMessage"> 
                
<?php

    if (! empty($_SESSION[ 'message']) ) {
?>
	                <p><?php echo $_SESSION[ 'message']; ?></p>

<?php

    
        $_GET[ 'message'] = null;
    }
    else {
?>
					<p>ko co j ca</p>

<?php     
    }
?>
            	</div>
            </div>
            
            
            <div id="statusMessage"> 
<?php                
                print_r($_SESSION);
?>                            
        	</div>
        
        </form>
        
    </div>




    




    <script src="https://code.jquery.com/jquery-2.1.1.min.js"        type="text/javascript">	</script>
    
    
    <script type="text/javascript" src="contact-view.js">	</script>
    


</body>
</html>