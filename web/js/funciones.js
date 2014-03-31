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
//                                        nav_label_first:'<div class="btn btn-inverse" >Primero</div>' ,
//                                        nav_label_prev:'<div class="btn btn-inverse" >Anterior</div>',
//                                        nav_label_next:'<div class="btn btn-inverse" >Siguiente</div>',
//                                        nav_label_last:'<div class="btn btn-inverse" >Ultimo</div>'
                                        
                                        nav_label_first:'<<',
                                        nav_label_prev:'<',
                                        nav_label_next:'>',
                                        nav_label_last:'>>'
                            });
                
                
                
                
                
                
		});
                

});
