$(document).ready(function () {
  const settings = {
    async: true,
    crossDomain: true,
    url: "http://localhost/Amaro-PW/Parcial%203/Grid/conexion.php",
    method: "GET",
    headers: {
      Accept: "*/*",
    },
  };

  $.ajax(settings).done(function (response) {
    console.log(response);

    let tabla = JSON.parse(response);
    console.log(tabla);

    $("#jsGrid").jsGrid({
      width: "100%",
      height: "400px",

      inserting: true,
      editing: true,
      sorting: true,
      paging: true,

      data: tabla,

      fields: [
        { name: "id_Jugador",type: "number",width: 150,validate: "required",},
        { name: "seleccion_nacional", type: "text", width: 150 },
        { name: "nombre", type: "text", width: 150 },
        { name: "apellidoP", type: "text", width: 150 },
        { name: "apellidoM", type: "text", width: 150 },
        { name: "posicion", type: "text", width: 150 },
        { name: "num_camisa", type: "number", width: 150 },
        { name: "faltas", type: "text", width: 150 },
        { name: "tarjetasA", type: "number", width: 150 },
        { name: "tarjetasR", type: "number", width: 150 },
      ],
    });
  });
});
