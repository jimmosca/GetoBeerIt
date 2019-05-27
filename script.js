function verificarUsuario() {
  obj = {};
  obj["usr"] = "mic";
  objJSON = JSON.stringify(obj);

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "http://localhost/mic/GetoBeerIt/registro.php");
  xhttp.setRequestHeader("Content-Type", "application/json");

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log("vamo bien");

      var respuestaJSON = JSON.parse(this.responseText);

      if(respuestaJSON["isContained"]){
        console.log("vamo mejor");
        var usr = document.getElementById("usr");
        usr.style.color = "red";
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
