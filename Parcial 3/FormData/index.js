document.getElementById("btnGet").addEventListener("click", async () => {
  let respuesta = await fetch("Get.php");
  let dato = await respuesta.json();
  document.getElementById("idJugador").value = dato.id;
  document.getElementById("Nombre").value = dato.nombre;
  document.getElementById("ApellidoP").value = dato.apellidoP;
  document.getElementById("ApellidoM").value = dato.apellidoM;
  document.getElementById("Equipo").value = dato.equipo;
  document.getElementById("Posicion").value = dato.posicion;
  document.getElementById("NumCamisa").value = dato.numCamisa;
  document.getElementById("Faltas").value = dato.faltas;
  document.getElementById("TarjetasA").value = dato.tarjetasA;
  document.getElementById("TarjetasR").value = dato.tarjetasR;
});
