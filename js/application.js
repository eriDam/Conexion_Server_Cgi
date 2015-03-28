var server;

function onBtnSumarClick() 
{
    server.currentTime(1,3, function(response) {
        $('#resultado').html(response);
    });
}

function applicationMain()
{
    server=new raspberryPiServer();
    
    //Detectamos cuando hagan clic en el boton de sumar
    $('#btnSumar').click(onBtnSumarClick);
}