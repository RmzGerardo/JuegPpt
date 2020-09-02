$(document).ready(function(){

	$("#jugarBtn").click(function(){
		getEstatus();
		// $("#partida").html(ID);
		putNombre();
    putNombre2();

		// id();

	});


function getEstatus(){
  var estatus = setInterval(()=>{
    $.ajax({
      url: "/juego_ppt/index.php",
      method: "GET",
      success: function (resultado) {
        console.log(resultado);
        if (estatus === "CON GANADOR") {
        clearInterval(estatus)
      }
      },
      error: function (resultado) {
        alert("Error no se pudo conectar con el servidor");
      },
    });

	 
  },5000);
}



// function id(){
// 	var id = resultado;
// 	var resultado = document.getElementById("partida");

// 	 $.ajax({
//     url: "/juego_ppt/index.php",
//     method: "PUT",
//     success: function (resultado) {
//       console.log(resultado);
//       resultado.innerHTML+= '<label>${id}</label>';
//     },
//     error: function (resultado) {
//       alert("Error no se pudo conectar con el servidor");
//     },
//   });
// }


function catchFromHtml() {
  var nuevoDato = {
    nombreJ: $("#nombreJ").val()
  };

  return JSON.stringify(nuevoDato);
}




function putNombre(){
var nuevoDato = {
    nombreJ: $("#nombreJ").val()
  };
	$.ajax({
    url: "/juego_ppt/index.php",
    method: "PUT",
    data: JSON.stringify(nuevoDato),
    success: function (resultado) {
      console.log(resultado);
    },
    error: function (resultado) {
      alert("Error no se pudo conectar con el servidor");
    },
  });
}


function putNombre2(){
var nuevoDato1 = {
    nombreJ: $("#nombreJ").val()
  };  
  $.ajax({
    url: "/juego_ppt/index2.php",
    method: "PUT2",
    data: JSON.stringify(nuevoDato1),
    success: function (resultado) {
      console.log(resultado);
    },
    error: function (resultado) {
      alert("Error no se pudo conectar con el servidor");
    },
  });
}




$("#piedraBtn").click(function(){
    getEstatus();
    //putTiro1();
    

  });

function mostrarDescripcion(){
  document.getElementById("descImg1").style.display = "block";

}

function putTiro1(){

  //document.getElementById("#piedraBtn").value;
  var nuevoDato = {
    piedraBtn: $("#piedraBtn").val(),   
  };  
  // if (tiro1 ==piedraBtn && tiro2 == tijeraBtn) {
  //   echo("Gana Jugador 1")
  // }else if(tiro1 ==papelBtn&& tiro2 == piedraBtn){
  //   echo("Gana Jugador 1")
  // }else if (tiro1 ==tijeraBtn&& tiro2 == papelBtn) {
  //   echo("Gana Jugador 1")
  // }else if (tiro1 ==tijeraBtn && tiro2 == piedraBtn){
  //    echo("Gana Jugador 2")
  // }else if (tiro1 ==piedraBtn&& tiro2 == papelBtn){
  //   echo("Gana Jugador 2")
  // }else if (tiro1 ==papelBtn&& tiro2 == tijeraBtn){
  //   echo("Gana Jugador 2")
  // }else if (tiro1 ==papelBtn && tiro2 == papelBtn){
  //   echo("Empate")
  // }else if (tiro1 ==piedraBtn&& tiro2 == piedraBtn){
  //   echo("Empate")
  // }else (tiro1 ==tijeraBtn && tiro2 == tijeraBtn){

  $.ajax({
    url: "/juego_ppt/tiro.php",
    method: "PUT",
    data: JSON.stringify(nuevoDato),
    success: function (resultado) {
      console.log(resultado);
    },
    error: function (resultado) {
      alert("Error no se pudo conectar con el servidor");
    },
  });
}








});