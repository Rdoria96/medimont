function cerrar()
        {
            confirmar=confirm("¿Esta seguro de cerrar sesión?");
            if(confirmar){
            $.ajax({
                url:'../usr/cerrar',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
               console.log(resp);
                if(resp==0){
                    console.log('Cerro Sesion corectamente');
                    location.href='../';
                }else {
                    console.log('Ocurrio Algo');
                }
            });
            }
        }
        function cerrar2()
        {
            confirmar=confirm("¿Esta seguro de cerrar sesión?");
            if(confirmar){
            $.ajax({
                url:'pages/cerrar',
                type:'POST',
                data:"mensaje=mensaje&boton=cerrar"
            }).done(function(resp){
               
                if(resp==0){
                    console.log('Cerro Sesion corectamente');
                    location.href='';
                }else {
                    console.log('Ocurrio Algo');
                }
            });
            }
        }

$(document).ready(function(){
    $('#login').submit(function(){
        event.preventDefault();
        $.ajax({
            url:'pages/i',
            type:'POST',
            data:$('#login').serialize()
        }).done(function(resp){
            console.log(resp);
            var r = eval(resp);
            //console.log(r.length);
            if(r[0]['login']=='no'){
            swal({title: r[0]['Titulo'],
                text: r[0]['Texto'],
                type: r[0]['Tipo'],           
                confirmButtonText: 'Aceptar'
                });
            }else{
                //console.log(r[0]['url']);
                window.location=r[0]['url'];
            }
            
        });
        return false;
   });
});