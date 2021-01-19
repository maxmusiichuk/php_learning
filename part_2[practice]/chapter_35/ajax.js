// saving object XMLHttpRequest
var xml = createObject();

//getting object XMLHttpRequest

function createObject() {
    var xml;
    //if IE
    if (window.ActiveXObject) {
        try {
            xml = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (e) {
            xml = false;
        }
    } else { //mozilla or another

        try {
            xml = new XMLHttpRequest();
        } catch (e) {
            xml = false;
        }

    }

    //return obj or error message
    //
    // if (!xmlHttp) {
    //     alert("Error");
    // } else {
        return xml;
    // }
}

//async request

function async() {
//if xml not used
    if (xml.readyState == 4 || xml.readyState == 0){
        //get username
        name = encodeURIComponent(document.getElementById("UserName").value());
        //send name of script ajax.php by method GET as param name
        xml.open("GET","ajax.php?name=" + name, true);
        xml.onreadystatechange = ServerResponce;

        // do request to server
        xml.send(null);
    }else{
        // if connection used waiting 1 sec (1000 ms)
        setTimeout('async()', 1000)
    }

    //start when we get response from server
    function serverResponse() {
        if (xml.readyState == 4){
            // code 200 - transaction successful completed
            if (xml.status == 200){
                //get xml from server
                xmlResponse = xml.responseXML;
                xmlDocumentElement = xmlResponse.documentElement;
                // get text message which is first child-element of xml document
                welcome= xmlDocumentElement.firstChild.data;
                //refresh index.html
                document.getElementById("WelcomeMessage").innerHTML =
                    '<i>'+ welcome + '</i>';

                //reload
                setTimeout('async()', 1000);
            }
            //if response code <>200 - error
            else {
                alert("Error"+xmlStatusText);
            }
        }
    }

}