 
    /**
     * En este archivo se colocan todas las funciones que vamos a utilizar,
     * JavaScript tiene ciertas diferencias respecto a otros lenguajes de programación orientados a objetos. 
     * En JavaScript no existe el concepto de clase ni el concepto de constructor propiamente dicho.
     */

function soapXMLGenerator(urn, ns){
    this.urn=urn;
    this.ns=ns;
    this.parameters=[];

    this.addParameter=function(nombre, valor) {
        this.parameters[nombre]=valor;
    }
    this.generate=function() {
        var xml=
            '<?xml version="1.0" encoding="UTF-8"?>'+
            '<SOAP-ENV:Envelope'+
            '  xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"'+
            '  xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"'+
            '  xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"'+
            '  xmlns:xsd="http://www.w3.org/2001/XMLSchema"'+
            '  xmlns:ns="'+this.urn+'">'+
            ' <SOAP-ENV:Body>'+
            '  <'+this.ns+'>';

        for (i in this.parameters) {
            xml=xml+'<'+i+'>'+this.parameters[i]+'</'+i+'>';
        }

        xml=xml+
            '  </'+this.ns+'>'+
            ' </SOAP-ENV:Body>'+
            '</SOAP-ENV:Envelope>';

        return xml;
    }
}

function soapCall(sr, onFinish) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open('POST', '/cgi-bin/currentTime.cgi', true);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            if (xmlhttp.status == 200) {
              alert('done use firebug to see response');
            }
            onFinish(xmlhttp.responseText);
        }
    }

    // Send the POST request
    xmlhttp.setRequestHeader('Content-Type', 'text/xml');
    xmlhttp.send(sr.generate());
}
