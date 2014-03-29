jQuery(document).ready(function(){
 		$(function() {
			$( 'a.link' ).button();
			$( "#mierda" ).button();
			$( 'a.Pisado').button({disabled: true});
                        
                       $("#accordion").accordion({
			 animated: "bounceslide",
			collapsible: true,
			autoHeight: false,
			autoWidth: false,
			 active: false
			
		});
                
                	$('#paging_container2').pajinate();
				
                	$('#paging_container3').pajinate({
					items_per_page : 5,
					item_container_id : '.alt_content',
					nav_panel_id : '.alt_page_navigation',
                                        nav_label_first:"Primero" ,
                                        nav_label_prev:"Anterior",
                                        nav_label_next:"Siguiente",
                                        nav_label_last:"Ultimo"			
				});
                
                
                
                
                
                
		});
                

});
