/*=============================================================
    Authour URL: www.designbootstrap.com

    http://www.designbootstrap.com/

    License: MIT

    http://opensource.org/licenses/MIT

    100% Free To use For Personal And Commercial Use.

    IN EXCHANGE JUST TELL PEOPLE ABOUT THIS WEBSITE

========================================================  */

//Luis Perera: Funcion para cargar html en modal/dialog

function dialogoHtml(data,width){
    $('#dialogo').html(data);
        $('#dialogo').dialog({
            dialogClass:'no-close',height: 500,width:width,modal: true,
            buttons: {
                Cerrar:function() {
                    $(this).dialog("close");
                }
            }

        });
}

function ajaxHtml(html,width){
    $.ajax({
        url: 'ajax.php',
        type: 'POST',
        data: {data: html},
    })
    .done(function(data) {
        dialogoHtml(data,width);
    })
    .fail(function() {alert("ERROR");});
}

$(document).ready(function () {

    $('.avisos').click(function (e) {
        e.preventDefault();
        $("#miAviso").html('<div id="dialogo" class="dialog" role="dialog"></div>');
        var valor = $(this).attr('valor');
        if (screen.width <= 700) {
            ajaxHtml(valor, 320);
        }
        else {
            ajaxHtml(valor, 800);
        }
    });

    $('.hoteles').click(function (e) {
        e.preventDefault();
        $("#miAviso").html('<div id="dialogo" class="dialog" role="dialog"></div>');
        var valor = $(this).attr('valor');
        if (screen.width <= 700) {
            ajaxHtml(valor, 320);
        }
        else {
            ajaxHtml(valor, 800);
        }

    });

    /*====================================
          SUBSCRIPTION   SCRIPTS
    ======================================*/


    $("#postcontent").submit(function (e) {
        $('#enviar').attr('disabled', true);
        $('#mensaje').html("<img src='assets/img/loading.gif'>");
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "subscribe.php",
            data: { data: $("#postcontent").serialize() },
            success: function (response) {
                $('#mensaje').html(response); // FOR ACTUAL RESPONSE
                //location = "http://vacacionescancunrivieramaya.com/html/registro.html";
                $('#enviar').removeAttr('disabled');
            }
        });
    });

    $("#postcontent2").submit(function (e) {
        $('#enviar2').attr('disabled', true);
        $('#mensaje2').html("<img src='assets/img/loading.gif'>");
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "subscribe2.php",
            data: { data: $("#postcontent2").serialize() },
            success: function (response) {
                $('#mensaje2').html(response); // FOR ACTUAL RESPONSE
                //location = "http://vacacionescancunrivieramaya.com/html/registro.html";
                $('#enviar2').removeAttr('disabled');
            }
        });
    });


    // SCROLL SCRIPTS
    $('.scroll-me a').bind('click', function (event) { //just pass scroll-me class and start scrolling
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1000, 'easeInOutQuad');
        event.preventDefault();
    });

    $('#logo').click(function () {
        //$("#dialog").load('html/aviso_privacidad.html').dialog();
        //cargarHtml('dialog','html/aviso_privacidad.html');
        /*var titulo = function(){
            $("#dialog").load('html/aviso_privacidad.html')
        };

        $( "#dialog").html(titulo);
        $( "#dialog").dialog({
            height: 500,
            width: 500,
            modal: true,
            buttons: {
                "Aceptar": function() {
                    $(this).dialog( "close" );
                }
            }
        });*/
    });

    $('#paymodal').modal({ show: false })

    $('#paymodalbtn').click(function () {
        $('#paymodal').modal('show');
    });
    

});

