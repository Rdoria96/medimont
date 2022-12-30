$(document).ready(function(){
	//lista_clientes
    lista_client();
    Select_serv();
    
    $('#editar_curso').submit(function(event){event.preventDefault(); editar_user();});
    $('#Registro_user').submit(function(event){event.preventDefault(); reg_user();});
   
});
function reg_user(){
    var formR = $('#Registro_user').serialize();
    console.log(formR);
    $.ajax({
        url:'../page/reg_user', type:'POST', data:formR}).done(function(resp){
            console.log(resp);
            if(resp==='true'){ CierraPopup('USERN');reiniciar_Table();}else{ console.log('a')} });
}
function editar_user(){var formEd = $('#editar_user').serialize();

    $.ajax({url:'../page/r', type:'POST', data:formEd}).done(function(resp){if(resp==='true'){ CierraPopup('editar_cursos');reiniciar_Table();}else{ } });
}
function reiniciar_Table(){
    $('#table_cursos').dataTable().fnDestroy();
    lista_client();
}
function lista_client(){
   $.ajax({url:'../page/l_', type:'POST', data:'listar_s=true'}).done(function(resp){ console.log(resp); });
    $('#table_solic').DataTable({ pageLength:10, responsive:true, processing:true,
        ajax: {"url": '../page/l_',"type": "POST", "dataSrc": ""}, "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"},
             columnDefs: [{"className": "dt-justify", "targets": "_all"}] });
}

function editar(datos){ 
    var d=datos.split("*"); 
    
    $('#id1').val(d[0]); 
    $('#nom1').val(d[1]); 
    $('#ap1').val(d[2]); 
    $('#us1').val(d[3]);
    $('#email1').val(d[5]);
}
function CierraPopup(n){
  $("#"+n+"").modal('hide');//ocultamos el modal
  $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
  $('.modal-backdrop').remove();//eliminamos el backdrop del modal
}
function eliminar(dat){
    console.log(dat);
}
function Select_serv(){
    $.ajax({url:'../page/list_serv', type:'POST', data:'listar_s=true'}).done(function(resp){
       
        var val = eval(resp); html="";
        
         html = "<option value='0'>Seleccione una opcion</option>";
        for(i=0;i<val.length;i++){
            html+="<option value="+val[i]['id_servi']+">"+val[i]['nombre_ser']+"</option>";
        }

        $("#sv").html(html);
      });

}

function Select_rol(){
    $.ajax({url:'../page/list_rol', type:'POST', data:'listar_s=true'}).done(function(resp){
        var val = eval(resp); html="";
         html = "<option value='0'>Seleccione una opcion</option>";
        for(i=0;i<val.length;i++){
            html+="<option value="+val[i]['id_rol']+">"+val[i]['nombre_rol']+"</option>";
        }
        $("#rl").html(html);
      });

}
