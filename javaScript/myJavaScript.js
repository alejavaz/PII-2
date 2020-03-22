 alert("Using JS from external file")

//output

console.log("running console.log to the browser console")

document.getElementById("first").innerText = "Print on browser screen";
//lo que llama debe de estar antes de que cargue el script si no no lo va a encontrar cuando corra 
//la accion



//if (name == "Luis") {
//    alert("Bienvenido Luis")
//}

//function hello() {
//  alert("Welcome user");  
//}

//hello();

var name = "Luis";

function helloUser(username) {
    alert("Hello "+ username + " user");
    }

helloUser(name);


num1 = 10
num2 = 2
var resultado = "El resultado es: "

function suma(num1,num2) {
    alert(num1 + num2)
    }
function resta(num1,num2) {
    alert(num1 - num2)
    }
function multiplicacion(num1,num2) {
    alert(num1 * num2)
    }
function division(num1,num2) {
    alert(num1 / num2)
}

suma(num1,num2);
resta(num1,num2);
multiplicacion(num1,num2);
division(num1,num2);






