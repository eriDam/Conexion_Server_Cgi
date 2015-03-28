function raspberryPiServer() {
    this.currentTime=function(a, b, onFinish) {
        var sr = new soapXMLGenerator('urn:currentTime', 'ns:currentTime');
        sr.addParameter('a', a);
        sr.addParameter('b', b);

        soapCall(sr, function(response) {
            onFinish(response);
        });
    }
}