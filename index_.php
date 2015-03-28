<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ajax con JQuery</title>
    <!-- Agregamos la libreria Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    
    <!--inicio: script para llamar por ajax -->
    <script>
    
    // Funcion para pasar los valores por parámetro el usuario
   /*Creo la Funcion que va a comprobar el password introducido por el usuario */
    function cambioParametros(){
        
        var cambioNum1 = prompt("Inserta el 1 número: ");//nuestra var campo tiene asignado el objeto de texto
        var cambioNum2 = prompt("Inserta el 2 número: ");
        document.write("Tu numero es: "+ cambioNum1+" y "+cambioNum2);
        //num1= cambioNum1;
        //num2 = cambioNum2;
 }

      $(document).ready(function(){
        //recogemos el contenido de las cajas de texto
          var num1=$('#num1').val();
          var num2=$('#num2').val();
        
        //Detectamos cuando hagan clic en el boton de sumar
        $('#btnSumar').click(function(){
           
 

var sr=
<?php
echo '<?xml version="1.0" encoding="UTF-8"?>';
echo '<SOAP-ENV:Envelope';
echo '  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"';
echo '  xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"';
echo '  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
echo '  xmlns:xsd="http://www.w3.org/2001/XMLSchema"';
echo '  xmlns:ns="urn:currentTime">';
echo ' <SOAP-ENV:Body>';
echo '  <ns:currentTime>';
echo '   <a>';
if(isset($_POST['num1'])) echo $_POST['num1'];
echo '</a>';
echo '   <b>6</b>';
echo '  </ns:currentTime>';
echo ' </SOAP-ENV:Body>';
echo '</SOAP-ENV:Envelope>;';
?>
var xmlhttp = new XMLHttpRequest();
            xmlhttp.open('POST', '/cgi-bin/currentTime.cgi', true);
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4) {
                    if (xmlhttp.status == 200) {

                        alert('done use firebug to see response');
                    }
                    //alert('#resultado').html(data);
                    $('#resultado').html(xmlhttp.responseText);
                }
            }
            // Send the POST request
            xmlhttp.setRequestHeader('Content-Type', 'text/xml');
            xmlhttp.send(sr);
        });
      });
 
    </script>
    <!--fin: script para llamar por ajax -->
  </head>
  <body>
  <form action="index_.php" method="POST">
    
  
    <h3>SUMA DE DOS NUMEROS CON JAVASCRIPT Y PHP (DEVUELVE HTML)</h3>
    <input type="text" id="num1" name="num1"/> + <input type="text" id="num2" />
    <input type="submit" id="btnSumar" value="Sumar" /> <br/>
    <br/>
    <!-- Este div es el que se llena con el resultado de getSuma.php -->
    <div id="resultado"></div>
  </form>
  </body>
</html>