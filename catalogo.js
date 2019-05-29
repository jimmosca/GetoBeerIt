var xmlhttp = new XMLHttpRequest();
var url = "catalogobaseDatos.php";

xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {

    console.log(this.responseText);

    var myObject = JSON.parse(this.responseText);
    myFunction(myObject);
  }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(obj) {
  var i;
  var j ;
  capa= document.getElementById("id01"); 
  for (j= 0; j < obj.length; j++) {

    var div = document.createElement('div');
    div.setAttribute('class', 'producto');
    capa.appendChild(div);
    producto = obj[j];

    for(item in producto){
      if(item == "imagen"){
        var img = document.createElement('img');
        img.setAttribute('src', producto.imagen);
        div.appendChild(img);
      }else{
        elemento= document.createElement("p"); 
        texto = document.createTextNode(producto[item]);
        elemento.appendChild(texto);
        div.appendChild(elemento);

      }
    }
  }
}
