$(document).ready(function(){
	//lista_clientes
    
    lista_client();
    $('#editar_cliente').submit(function(event){event.preventDefault(); editar_cli();});
    $('#Registro_cliente').submit(function(event){event.preventDefault(); reg_cli();});
   
});
function reg_cli(){
    var formR = $('#Registro_cliente').serialize();
    console.log(formR);
    $.ajax({
        url:'../pages/reg_client', type:'POST', data:formR}).done(function(resp){
            console.log(resp);
            if(resp==='true'){ CierraPopup('clienteN');reiniciar_Table();}else{ console.log('a')} });
}
function editar_cli(){var formEd = $('#editar_cliente').serialize();
    $.ajax({url:'../pages/ed_cli',type:'POST',data:formEd}).done(function(resp){if(resp==='true'){ CierraPopup('editar_clientes');reiniciar_Table();}else{ console.log('a')} });
}
function reiniciar_Table(){
    $('#table_cli').dataTable().fnDestroy();
    lista_client();
}
function lista_client(){
    /*$.ajax({url:'../page/list_cli', type:'POST'}).done(function(resp){
        console.log(resp);
    });*/
    //$('#table_cli').DataTable();
    $('#table_cli').DataTable({
        pageLength:10,
        responsive:true,
        processing:true,
        ajax: {"url": '../page/list_cli',"type": "POST", "dataSrc": ""},
        "language": {
                "url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
    });
    

    
}
function editar(datos){ var d=datos.split("*"); $('#idEd').val(d[0]); $('#nom1').val(d[1]); $('#tele1').val(d[2]); $('#fecha_cumple1').val(d[3])}

function CierraPopup(n){
  $("#"+n+"").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}

/* $.ajax({url:'../page/list_cli', type:'POST', data:'listar=true&v='+val}).done(function(resp){
        console.log(resp);
        var valores = eval(resp); html="";
        for(i=0;i<valores.length;i++){
            datos=valores[i]['idclient']+"*"+valores[i]["nombre"]+"*"+valores[i]['celular']+"*"+valores[i]['cumple'];
            html+="<tr><td>"+(i+1)+"</td><td>"+valores[i]['nombre']+"</td><td>"+valores[i]['celular']+"</td><td>"+valores[i]['cumple']+"</td><td><button class='btn btn-primary' data-toggle='modal' data-target='#editar_clientes' onclick='editar("+'"'+datos+'"'+");'><span class='fa fa-edit'></span></button></td><td><button class='btn btn-danger' onclick='eliminar("+'"'+valores[i]['id_Serv']+'"'+")'><span class='fa fa-trash'></span></button></td></tr>";
        }
        $("#client").html(html);
    });*/