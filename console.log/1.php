<script type="text/javascript">
    
    function dump(arr,level) {
        
    	var dumped_text = "";

    	if(!level) level = 0;
    
    	//The padding given at the beginning of the line.
    	var level_padding = "";

    	for(var j=0;j<level+1;j++) level_padding += "    ";
    
    	if(typeof(arr) == 'object') { //Array/Hashes/Objects
        	
    		for(var item in arr) {
        		
    			var value = arr[item];
    
    			if(typeof(value) == 'object') { //If it is an array,

    				dumped_text += level_padding + "'" + item + "' ...\n";
    				
    				dumped_text += dump(value,level+1);
    			} 

    			else {
    				dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
    			}
    		}
    	} 
    	else { //Stings/Chars/Numbers etc.

        	dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
    	}
    	return dumped_text;
    }
    
    
    // Example:
    
    var employees = [
        { id: '1', sex: 'm', city: 'Paris' }, 
        { id: '2', sex: 'f', city: 'London' },
        { id: '3', sex: 'f', city: 'New York' },
        { id: '4', sex: 'm', city: 'Moscow' },
        { id: '5', sex: 'm', city: 'Berlin' }
    ]
    
    
    // Open dev console (F12) to see results:
    
    console.log(dump(employees));


</script>