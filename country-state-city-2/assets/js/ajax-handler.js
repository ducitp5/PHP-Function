

function getState(val) {

	$.ajax({
	
		type		:	 "POST",
		
		url			:	 "./ajax/get-state-ep.php",
		
		data		:	 'country_id='  +  val,

		
		success		:	 function(data){
			
			$("#state-list").html(data);
			
			$('#city-list').find('option[value]').remove();
		}
	});
}



function getCity(val) {
	
	$.ajax({
		
		type		:	 "POST",
		
		url			:	 "./ajax/get-city-ep.php",
		
		data		:	 'state_id='   +   val,	
		
		
		success		:	 function(data){
			
			$("#city-list").html(data);			
		}
	});
}