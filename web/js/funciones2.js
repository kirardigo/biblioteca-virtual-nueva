
$().ready(function() {
	

$(function() {
	
		$(function() {
			$( 'a.link' ).button();
			$( "#probar" ).button();
			$( 'a.Pisado').button({disabled: true});
		});
//--------------------------------------------------------
		var arrayValoresAutocompletar = [
			"Rawson",
			"Trelew",
			"Madryn",
			"Dolavon",
			"..."
		];
//----------------------------------------------------------------------

//-----------------------------------------------------------------------
		$('#button').click(function(){
			
			while(total<100){
			total=total+10;
			//window.setTimeout('barUpdate(total)', 3000);
	 
			
			}
			
			});
//----------------------------------------------------------------------

//-----------------------------------------------------------------------

		$("#accordion").accordion({
			 animated: "bounceslide",
			collapsible: true,
			autoHeight: false,
			autoWidth: false,
			 active: false
			
		});
		
		$( 'img.producto').click(function() {
			$( "#dialog" ).dialog( "open" );
			return false;
		});
		
		
		$( "#dialog" ).dialog({
			autoOpen: false,
			show: "fold",
			hide: "scale",
			modal: true,
			resizable: false
		});

		
		$( "#alerta" ).dialog({
			autoOpen: false,
			show: "fold",
			hide: "scale",
			modal: true,
			resizable: false
		});
		
		
	
		$( "#dialog-confirm" ).dialog({
			autoOpen: false,
			resizable: false,
			hide:"explode",
			height:140,
			modal: true
		});
		
		$( "#tabs" ).tabs();
		});
		

		
		

});





