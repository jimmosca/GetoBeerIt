function verificarUsuario() {
  obj = {};
  obj["usr"] = document.getElementById("usr").value;
  objJSON = JSON.stringify(obj);

  var xhttp = new XMLHttpRequest();
  xhttp.open("POST", "http://localhost/jaime/PHP/TiendaCerveza/comprobarUsr.php");
  xhttp.setRequestHeader("Content-Type", "application/json");

  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      var respuestaJSON = JSON.parse(this.responseText);
      var usr = document.getElementById("usr");
      var msjError = document.getElementById("msjError");

      if(respuestaJSON["isContained"]){
        usr.style.color = "red";
        msjError.className = "d-inline";
        msjError.style.color = "red";

      }else{
        usr.style.color = "black";
        msjError.className = "d-none";
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
