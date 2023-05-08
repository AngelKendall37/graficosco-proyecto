$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nueva Persona");            
    $("#modalCRUD").modal("show");        
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    

    
$("#formPersonas").submit(function(e){
    e.preventDefault();  
      
    DEPARTAMENTO = $.trim($("#DEPARTAMENTO").val());
    MUNICIPIO = $.trim($("#MUNICIPIO").val());
    NIVEL_EDUCATIVO = $.trim($("#NIVEL_EDUCATIVO").val());
    SECTOR_SOCIOECONOMICO = $.trim($("#SECTOR_SOCIOECONOMICO").val());
    TIPO_PARTICIPANTE = $.trim($("#TIPO_PARTICIPANTE").val());    
    $.ajax({
        url: "./bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {DEPARTAMENTO:DEPARTAMENTO, MUNICIPIO:MUNICIPIO, NIVEL_EDUCATIVO:NIVEL_EDUCATIVO, SECTOR_SOCIOECONOMICO:SECTOR_SOCIOECONOMICO, TIPO_PARTICIPANTE:TIPO_PARTICIPANTE},
        success: function(data){  
            console.log(data);
            DEPARTAMENTO = data[0].DEPARTAMENTO;            
            MUNICIPIO = data[0].MUNICIPIO;
            NIVEL_EDUCATIVO = data[0].NIVEL_EDUCATIVO;
            SECTOR_SOCIOECONOMICO = data[0].SECTOR_SOCIOECONOMICO;
            TIPO_PARTICIPANTE = data[0].TIPO_PARTICIPANTE;
            TIPO_PARTICIPANTE = data[0].TIPO_PARTICIPANTE;
            if(opcion == 1){tablaPersonas.row.add([DEPARTAMENTO, MUNICIPIO, NIVEL_EDUCATIVO, SECTOR_SOCIOECONOMICO, TIPO_PARTICIPANTE]).draw();}
            else{tablaPersonas.row(fila).data([DEPARTAMENTO, MUNICIPIO, NIVEL_EDUCATIVO, SECTOR_SOCIOECONOMICO, TIPO_PARTICIPANTE]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});