
function catalogo(){
  //Genero un objeto vacio
  obj = {};
  var objPais =document.getElementById("pais");
//Coge las opciones, de ellas coge el valor de la que está seleccionada
  obj["pais"]= objPais.options[objPais.selectedIndex].text;

 var tipos = document.getElementsByName("tipo_cerveza.nombre");

 for (let index = 0; index < tipos.length; index++) {
   if (tipos[index].checked) {
    obj["tipo_cerveza.nombre"]=tipos[index].value;

   }
 }
 var precios = document.getElementsByName("price");

 for (let index = 0; index < precios.length; index++) {
   if (precios[index].checked) {
    obj["precio"]=precios[index].value;

   }
 }
 var botellas = document.getElementsByName("botle");

 for (let index = 0; index < botellas.length; index++) {
   if (botellas[index].checked) {
    obj["botella"]=botellas[index].value;

   }
 }

 objJSON = JSON.stringify(obj);
 console.log(objJSON);

 var xmlhttp = new XMLHttpRequest();
 var url = "http://localhost/bea/GetoBeerIt/Catalogo2Datos.php";
 
 xmlhttp.onreadystatechange = function() {
   if (this.readyState == 4 && this.status == 200) {
     console.log(this.responseText);
     var myObject = JSON.parse(this.responseText);
     pintaProducto(myObject);
     console.log("paso el function")
   }
 };
 xmlhttp.open("POST", url, true);
 xmlhttp.setRequestHeader("Content-Type", "application/json");
 xmlhttp.send(objJSON);

}

function pintaProducto(objeto) {
  var general = document.getElementById("solucion");
    general.innerHTML = " ";

    var arrProductos =  objeto["productos"];	
    
		for(var i = 0; i < arrProductos.length; i++){
      var div = document.createElement("div");
      div.setAttribute("class","col-3");
      div.setAttribute("id", "productos_" + arrProductos[i].id);
      
      for (let index = 0; index < arrProductos.length; index++) {

        var parrafonombre = document.createElement("p");
        var parrafotipo = document.createElement("p");
        var parrafoprecio = document.createElement("p");
        var parrafobotella = document.createElement("p");
        var parrafopais = document.createElement("p");
        var img = document.createElement("img");
        img.setAttribute("src", arrProductos[i].imagen);

    
        var nombre = document.createTextNode(arrProductos[i].nombre);
        var tipo = document.createTextNode(arrProductos[i].tipo);
        var precio = document.createTextNode(arrProductos[i].precio);
        var pais = document.createTextNode(arrProductos[i].pais);
        var botella = document.createTextNode(arrProductos[i].botella);

        parrafonombre.appendChild(nombre);
        parrafotipo.appendChild(tipo);
        parrafoprecio.appendChild(precio);
        parrafopais.appendChild(pais);
        parrafobotella.appendChild(botella);
        
      }
      div.appendChild(parrafonombre);
      div.appendChild(parrafotipo);
      div.appendChild(parrafoprecio);
      div.appendChild(parrafopais);
      div.appendChild(parrafobotella);
      div.appendChild(img);

      general.appendChild(div);
      
		}

}


function verificarUsuario() {
  obj = {};
  obj["usr"] = document.getElementById("usr").value;
  objJSON = JSON.stringify(obj);

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "http://localhost/bea/GetoBeerIt/comprobarUsr.php");
  xhttp.setRequestHeader("Content-Type", "application/json");

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var respuestaJSON = JSON.parse(this.responseText);
      var usr = document.getElementById("usr");
      var msjError = document.getElementById("msjError");
      var btn = document.getElementById("btn");
      var btnDisabled = document.createAttribute("disabled");
      var btnEnabled = btn.getAttributeNode("disabled");

      if(respuestaJSON["isContained"]){
        usr.style.color = "red";
        msjError.className = "d-inline";
        msjError.style.color = "red";
        msjError.style.fontSize = "medium";
        btn.setAttributeNode(btnDisabled);

      }else{
        usr.style.color = "black";
        msjError.className = "d-none";
        btn.removeAttributeNode(btnEnabled);

      }


    }else{
      console.log(this.readyState + " " + this.status);
      if (this.readyState == 4 && this.status == 404) {
        alert("URL INCORRECTA");

      }
    }
  };

  xhttp.send(objJSON);

}
