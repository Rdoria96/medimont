$(document).ready(function(){
	//lista_services
    lista_services('');
    $('#editar_services').submit(function(event){event.preventDefault(); editar_sevices();});
    $('#Registro_services').submit(function(event){event.preventDefault(); reg_services();});
    
});
function reg_services(){
    var formR = $('#Registro_services').serialize();
    $.ajax({
        url:'reg_serv', type:'POST', data:formR}).done(function(resp){
            if(resp==='true'){ CierraPopup('registrar');}else{ console.log('a')} });
}
function editar_sevices(){var formEd = $('#editar_services').serialize();
    $.ajax({url:'ed',type:'POST',data:formEd}).done(function(resp){if(resp==='true'){ CierraPopup('editar');lista_services('')}else{ console.log('a')} });
}
function lista_services(val){
    const formatterPeso = new Intl.NumberFormat('es-CO', {style: 'currency',currency: 'COP',minimumFractionDigits: 0});//Formateo de numeros para tener el precio en pesos colombianos

    $.ajax({url:'../page/list_serv',type:'POST',data:'val='+val}).done(function(resp){
        console.log(resp);
         var valores = eval(resp); html="";
        for(i=0;i<valores.length;i++){
            datos=valores[i]['id_serv']+"*"+valores[i]["nombre_serv"]+"*"+valores[i]['precio'];
            html+="<tr><td>"+(i+1)+"</td><td>"+valores[i]['nombre_serv']+"</td><td>"+formatterPeso.format(valores[i]['precio'])+"</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#editar' onclick='editar("+'"'+datos+'"'+");'><span class='fa fa-edit'></span></button></td><td><button class='btn btn-danger' onclick='eliminar("+'"'+valores[i]['id_Serv']+'"'+")'><span class='fa fa-trash'></span></button></td></tr>";
        }
        $("#services_body").html(html);
   
});
   /* $('#services').DataTable({

        pageLength:10,
        responsive:true,
        processing:true,
        ajax: {"url": '../page/list_serv',"type": "POST", "dataSrc": ""}
        /*"language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
    });*/
   
}
function editar(datos){ var d=datos.split("*"); $('#idEd').val(d[0]); $('#nom1').val(d[1]); $('#precio1').val(d[2])}

function CierraPopup(n){
  $("#"+n+"").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

/*  $.ajax({url:'../page/list', type:'POST', data:'listar=true'}).done(function(resp){
        console.log(resp);
   
});
     var valores = eval(resp); html="";
        for(i=0;i<valores.length;i++){
            datos=valores[i]['id_serv']+"*"+valores[i]["nombre_serv"]+"*"+valores[i]['precio'];
            html+="<tr><td>"+(i+1)+"</td><td>"+valores[i]['nombre_serv']+"</td><td>"+formatterPeso.format(valores[i]['precio'])+"</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#editar' onclick='editar("+'"'+datos+'"'+");'><span class='fa fa-edit'></span></button></td><td><button class='btn btn-danger' onclick='eliminar("+'"'+valores[i]['id_Serv']+'"'+")'><span class='fa fa-trash'></span></button></td></tr>";
        }
        $("#services").html(html);
    });*/