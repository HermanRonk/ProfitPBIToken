// Genereren AFAS Token voor web autorisatie

var convertedToken = "";

function confirmInput() {
    token = document.forms[0].AfasToken.value;
    convertedToken = "AfasToken " + btoa(token);
    document.getElementById("OutputDiv").innerHTML = "<p>Dit is de autorisatietoken die je kan gebruiken:</p><p>" + 
    "<textarea class='form-control' id='outputText' rows='3'>" + convertedToken + "</textarea>" + 
    "</p><p><button onclick='addToClipboard()' type='button' class='btn btn-primary'>Copy</button></p>"
    event.preventDefault();
}

function addToClipboard() {
    var dummy = document.createElement("input");
            document.body.appendChild(dummy);
            dummy.setAttribute("id", "dummy_id");
            dummy.setAttribute('value', convertedToken)
            dummy.select();
            document.execCommand("copy");
            document.body.removeChild(dummy);
}