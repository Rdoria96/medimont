
function cargarDatosinfADM(){
	 $.ajax({
                         url:'../usr/list',
                        type:'POST',
                        data:'&DAT=yes'
                   }).done(function(resp){
                   	  console.log(resp);
                       var val = eval(resp);

                       
                       $('#client').html(val[0]['nUser']);
                       $('#prdo').html(val[0]['nProduct']);
                       
                       $('#art2').html(val[0]['N4']);
                   });
}

$(document).ready(function() {
   cargarDatosinfADM();
   lista_services('');
});