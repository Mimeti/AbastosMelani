

$("#ID_clie").keyup(function(even){
    even.preventDefault();

    var cedu = $(this).val();
    var action = 'info_cedu';

    if(cedu != ''){
        
        $.ajax({
            url: 'ajax.php',
            type: "POST",
            async: true,
            data: {action: action, cedu:cedu},
    
            success: function(response)
            {
                
                if(response != 1){
                    var info = JSON.parse(response);
                    $("#name_clie").html(info.name_clie);
                    $("#cedu_clie").html(info.cedu_clie);
                }else{
                    $("#name_clie").html("-");
                    $("#cedu_clie").html("-");
                }

            },
            error: function(error){
            }
        });
    }
});

$("#ID_inve").keyup(function(even){
    even.preventDefault();

    var inven = $(this).val();
    var action = 'info_inve';

    if(inven != ''){
        
        $.ajax({
            url: 'ajax.php',
            type: "POST",
            async: true,
            data: {action: action, inven:inven},
    
            success: function(response)
            {
                
                if(response != 1){
                    var info = JSON.parse(response);
                    $("#name_inve").html(info.name_inve);
                    $("#mark_inve").html(info.mark_inve);
                    $("#alma_inve").html(info.alma_inve);
                    $("#prec_inve").html(info.prec_inve);
                    $("#num_ven").val(1);
                    $("#prec_ven").html(info.prec_ven);

                    $("#num_ven").removeAttr('disabled');
                    $("#agregar").slideDown('');
                }else{
                    $("#name_inve").html("-");
                    $("#mark_inve").html("-");
                    $("#alma_inve").html("-");
                    $("#prec_inve").html('0.00');
                    $("#num_ven").val('0');
                    $("#prec_ven").html('0.00');
                    $("#num_ven").attr('disabled');
                    $("#agregar").slideUp('');
                }

            },
            error: function(error){
            }
        });
    }
});

$("#num_ven").keyup(function(e){
    e.preventDefault();
    var prec_ven = $(this).val() * $('#prec_inve').html();
    var existencia = parseInt($('#alma_inve').html());
    $('#prec_ven').html(prec_ven);

    if( ($(this).val() < 1 || isNaN($(this).val())) || ($(this).val() > existencia)  ){
        $(".agregar").slideUp('');
    }else{
        $(".agregar").slideDown('');
    }
});

$('#agregar').click(function(e){
    e.preventDefault();

    if($("#num_ven").val() > 0)
    {
    var factu = $('#codi_fact').val();
    var ID_inve = $('#ID_inve').val();
    var num_ven = $('#num_ven').val();
    var action = 'fact';
    
    
    

    $.ajax({
        url: 'ajax.php',
        type: "POST",
        async: true,
        data: {action: action,factu: factu, ID_inve:ID_inve,num_ven:num_ven},

        success: function(response)
        {
            if(response != 1){
            location.reload(); 
            }else{
            console.log('no data');
            
            }
        },
        error: function(error){
        }
    });

}

});



$('#eliminar').click(function(e){
    e.preventDefault();
    
    var action = 'delinveven';
    var factu = $('#codi_fact').val();
    var ID_del = $('#ID_teve').val();

    $.ajax({
        url: 'ajax.php',
        type: "POST",
        async: true,
        data: {action: action,ID_del: ID_del,factu: factu},
    
        success: function(response)
        {
            if(response != 'error'){

            
                var info = JSON.parse(response);
                $("#detalle_ven").html(info.detalle);
                $("#detalle_total").html(info.total);
                
                $("#name_inve").html("-");
                $("#mark_inve").html("-");
                $("#alma_inve").html("-");
                $("#prec_inve").html('0.00');
                $("#num_ven").val('0');
                $("#prec_ven").html('0.00');
                $("#num_ven").attr('disabled');
                $("#agregar").slideUp('');
    
               }else{
                console.log('no data');
                
               }
                
        },error: function(error){
        }
    });
    
});

$('#anular').click(function(e){
    e.preventDefault();

    var rows = $('#detalle_ven tr').length;

    if(rows > 0){

        var action = 'anularven';
        var factu = $('#codi_fact').val();

        $.ajax({
            url: 'ajax.php',
            type: "POST",
            async: true,
            data: {action: action,factu:factu},
        
            success: function(response)
            {
                if(response != 'error'){
                   location.reload(); 
                }
                
            },error: function(error){

            }

        });
    }
});

$('#procesar').click(function(e){
    e.preventDefault();

    var rows = $('#detalle_ven tr').length;

    if(rows > 0){

        var action = 'procesarven';
        var factu = $('#codi_fact').val();
        var clie = $('#ID_clie').val();

        $.ajax({
            url: 'ajax.php',
            type: "POST",
            async: true,
            data: {action: action,factu:factu,clie:clie},
        
            success: function(response)
            {
                
                if(response != 'error'){
                    //var info = JSON.parse(response);
                    //console.log(info);
                    location.reload();
                }else{
                    console.log('no date');
                }
                
            },error: function(error){

            }

        });
    }
});



/*$.ajax({
    url: 'ajax.php',
    type: "POST",
    async: true,
    data: {action: action,ID_del: ID_del,factu:factu},

    success: function(response)
    {
        console.log(response);

    },error: function(error){
    }
});*/