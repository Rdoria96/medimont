$(document).ready( function(){

	$.ajax({
		url:'../h/hora',
		type:'POST',
		data:'v=true'
	}).done(function(zs){
     
      var valores = eval(zs);
      var m="";
      var n = new Date();
      
      //console.log(n);
      var now = moment(n).utcOffset('-0500').format('hh:mm a');
      var hours = n.getHours();
      var min   = n.getMinutes();
      var h_i=HH(valores[0]['hora_inicio']);
      var h_f=valores[0]['h_f'];
		if(hours>h_i){
			h=hours;
		}else{
			h=h_i;
		}      
		
		if(min>=30 && hours<(hours+1)){
			h=hours+1;
			mn=45;
		}else{
			mn=45;
		}
		m='<option value="">Seleccione una hora por favor</option>';
      for(var i=h;i<=h_f;i++){
	      	if(h_f!=i){

	      		hour = i+':'+mn+':00';
	      		

	      		m += '<option value="'+hour+'">'+hora(hour)+'</option>';

	      		//console.log(i+':'+45+':'+valores[0]['s_i']);
	      	}
      	
      }
      $('#seltc').html(m);
	});
	$('#pedido').submit(function(){
		v = $('#pedido').serialize();
		event.preventDefault();
		$.ajax({
			url:'../ped/orders',
			type:'POST',
			data:v
		}).done(function(resp){
			console.log(resp);
			if(resp==1){
				
			swal({
				  title: "Excelente",
				  text: "Su pedido se registro satisfactoriamente",
				  type: "success",
				  confirmButtonClass: "btn-success",
				  confirmButtonText: "Listo",
				  closeOnConfirm: false,
			}).then((result) => {
			      if (result.value) {
			        window.location.href = "../";
			      }
			    });

		return false;
				}
			});
	});
	
});

function HH(h){
	var breakfast = moment(h,'hh:mm').format('hh');
	return breakfast;
}
function hora(h){
	var breakfast = moment(h,'hh:mm').format('hh:mm A');
	return breakfast;
}