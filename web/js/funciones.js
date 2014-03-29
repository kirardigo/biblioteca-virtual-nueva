jQuery(document).ready(function(){
 		$(function() {
			$( 'a.link' ).button();
			$( "#mierda" ).button();
			$( 'a.Pisado').button({disabled: true});
		});
});
