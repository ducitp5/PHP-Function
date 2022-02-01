<<!DOCTYPE link PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>

    
    <link rel="stylesheet"
    	href="http://necolas.github.com/normalize.css/2.0.1/normalize.css">
    <link rel="stylesheet" href="style.css" />
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
    
    
    
    <style>
    
    
        @font-face {
        	font-family: "FontAwesome";
        	src: url('font/fontawesome-webfont.eot');
        	src: url('font/fontawesome-webfont.eot?#iefix') format('eot'),
        		url('font/fontawesome-webfont.woff') format('woff'),
        		url('font/fontawesome-webfont.ttf') format('truetype'),
        		url('font/fontawesome-webfont.svg#FontAwesome') format('svg');
        	font-weight: normal;
        	font-style: normal;
        }
        
        body {
        	background-color: #333;
        }
        
        .ui-sortable {
        	width: 350px;
        	margin: 50px auto;
        	background-color: #ccc;
        	-webkit-box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, .1);
        	box-shadow: 0px 0px 10px 1px rgba(0, 0, 0, .1);
        	list-style-type: none;
        	padding: 0;
        }
        
        .ui-sortable li.ui-state-default {
        	margin: 0;
        	height: 45px;
        	line-height: 48px;
        	font-size: 1.4em;
        	color: #fff;
        	outline: 0;
        	padding: 0;
        	margin: 0;
        	text-indent: 15px;
        	background: rgb(78, 82, 91);
        	background: -moz-linear-gradient(top, rgb(78, 82, 91) 0%,
        		rgb(57, 61, 68) 100%);
        	background: -webkit-gradient(linear, left top, left bottombottom, color-stop(0%,
        		rgb(78, 82, 91)), color-stop(100%, rgb(57, 61, 68)));
        	background: -webkit-linear-gradient(top, rgb(78, 82, 91) 0%,
        		rgb(57, 61, 68) 100%);
        	background: -o-linear-gradient(top, rgb(78, 82, 91) 0%, rgb(57, 61, 68)
        		100%);
        	background: -ms-linear-gradient(top, rgb(78, 82, 91) 0%, rgb(57, 61, 68)
        		100%);
        	background: linear-gradient(to bottombottom, rgb(78, 82, 91) 0%,
        		rgb(57, 61, 68) 100%);
        	border-top: 1px solid rgba(255, 255, 255, .2);
        	border-bottom: 1px solid rgba(0, 0, 0, .5);
        	text-shadow: -1px -1px 0px rgba(0, 0, 0, .5);
        	font-size: 1.1em;
        	position: relative;
        	cursor: pointer;
        }
        
        .ui-sortable li.ui-state-default:first-child {
        	border-top: 0;
        }
        
        .ui-sortable li.ui-state-default:last-child {
        	border-bottom: 0;
        }
        
        .ui-sortable-placeholder {
        	border: 3px dashed #aaa;
        	height: 45px;
        	width: 344px;
        	background: #ccc;
        }
        
        .ui-sortable li.ui-state-default:after {
        	content: "\f0c9";
        	display: inline-block;
        	font-family: "FontAwesome";
        	position: absolute;
        	rightright: 18px;
        	top: 9px;
        	text-align: center;
        	line-height: 35px;
        	color: rgba(255, 255, 255, .2);
        	text-shadow: 0px 0px 0px rgba(0, 0, 0, 0);
        	cursor: move;
        }
    
    
    
    </style>
    
    <script>
    
        $(function() {
            
            $('#sortable_books').sortable({ 
    
                placeholder: "ui-sortable-placeholder" 
            }); 
        }); 
    
    </script>
    
    
    
    <script>
    
        $(function() {
            
            $( 'sortable_book1, #sortable_book2' ).sortable({
    
          		connectWith: 'stable'
            });
        });
    </script>
    


</head>


<body>

    <ul id="sortable_books">
    	<li>Book 1</li>
    	<li>Book 2</li>
    	<li>Book 3</li>
    	<li>Book 4</li>
    	<li>Book 5</li>
    	<li>Book 6</li>
    </ul>
    
    
    <ul id="sortable_book1" class="sortable">
    	<li>Book 1</li>
    	<li>Book 2</li>
    	<li>Book 3</li>
    	<li>Book 4</li>
    	<li>Book 5</li>
    	<li>Book 6</li>
    </ul>
    
    <ul id="sortable_book2" class="sortable">
    	<li>Book 7</li>
    	<li>Book 8</li>
    	<li>Book 9</li>
    	<li>Book 10</li>
    	<li>Book 11</li>
    	<li>Book 12</li>
    </ul>


</body>



</html>






