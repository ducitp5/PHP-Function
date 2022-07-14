<style>
* {
	box-sizing: border-box;
}

table {
	border-collapse: collapse;
}

td, th {
	padding: 5px 15px;
	text-align: left;
}

table, th, td {
	border: 1px solid #000;
}
</style>

<table id="tableId">
	<thead>
		<tr>
			<th><input type="checkbox" /></th>
			<th>Size</th>
			<th>File</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><input type="checkbox" /></td>
			<td>10Mb</td>
			<td>C:\Users\BrainBell\Desktop\Empty\abc.txt</td>
		</tr>
	</tbody>
</table>


<script type="text/javascript">
    
    var tables 		=	 document.getElementsByTagName('table');
    
    for (var i = 0 ; i < tables.length ; i++){

    	resizableGrid(tables[i]);
    }


	function resizableGrid(table) {
        
	 	var row 	=	 table.getElementsByTagName('tr')[0],

     		 cols 	=	 row 	?	 row.children 	 :	 undefined;
 		 

 		if (!cols) return;
 
 		table.style.overflow 		=	 'hidden';
 
 		var tableHeight 			=	 table.offsetHeight;
 

		for (var i = 0  ; i < cols.length ; i++){

	  		var div = createDiv(tableHeight);

	  	  	cols[i].appendChild(div);

	  	  	cols[i].style.position = 'relative';

	  	  	setListeners(div);
 		}


		function setListeners(div){

			var pageX,curCol,nxtCol,curColWidth,nxtColWidth;

  			div.addEventListener('mousedown' , function (e) {

    			curCol 			= e.target.parentElement;
    
    	   		nxtCol 			= curCol.nextElementSibling;
    
    	   	   	pageX 			= e.pageX; 
     

    	   	   	var padding 	= paddingDiff(curCol);
 

				curColWidth = curCol.offsetWidth - padding;

				
			   	if (nxtCol)		    nxtColWidth 	=	 nxtCol.offsetWidth - padding;
  			});


  		  	div.addEventListener('mouseover', function (e) {

	  	   		e.target.style.borderRight = '2px solid #0000ff';
  			})

  
  			div.addEventListener('mouseout', function (e) {

		   		e.target.style.borderRight = '';
  			})

  
  			document.addEventListener('mousemove', function (e) {

		   		if (curCol) {

		   			var diffX 		=	 e.pageX - pageX;

		   		    if (nxtCol)	     nxtCol.style.width 	=	 (nxtColWidth - (diffX))+'px';

    				curCol.style.width = (curColWidth + diffX)+'px';
   				}
			});


  		  	document.addEventListener('mouseup', function (e) {
  	  		  	 
                curCol 			=	 undefined;
                nxtCol 			=	 undefined;
                pageX 			=	 undefined;
                nxtColWidth 	=	 undefined;
                curColWidth 	=	 undefined
  			});
		}
 

	 	function createDiv(height){
		 	
            var div 				= document.createElement('div');
            div.style.top 			= 0;
            div.style.right 		= 0;
            div.style.width 		= '5px';
            div.style.position 		= 'absolute';
            div.style.cursor 		= 'col-resize';
            div.style.userSelect 	= 'none';
            div.style.height 		= height + 'px';

            return div;
 		}
 

	 	function paddingDiff(col){
 
  			if (getStyleVal(col , 'box-sizing')  ==  'border-box'){

  			   	return 0;
			}
 
            var padLeft 	=	 getStyleVal(col,'padding-left');
            var padRight 	=	 getStyleVal(col,'padding-right');

            return 			(parseInt(padLeft) + parseInt(padRight));
 		}


	 	function getStyleVal(elm,css){

  			return (window.getComputedStyle(elm, null).getPropertyValue(css))
 		}
	};


</script>