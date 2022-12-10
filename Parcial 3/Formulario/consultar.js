document.getElementById('buscar').addEventListener('click',async(e)=>{
    e.preventDefault()
    const form = new FormData(document.getElementById('Form-Emp'))
    const results = await fetch('consultar.php',{
        method:'POST',
        body: form
    })
    results.status==200?
    swal('Jugador encontrado!','','success')
    :
    swal('No se encontró el Jugador','','error')
    let data= await results.json()
    
        $("#idJugador").val(data.id_jugador)
        $("#Equipo").val(data.seleccion_nacional)
        $("#Nombre").val(data.nombre)
        $('#ApellidoP').val(data.apellidoP)
        $('#ApellidoM').val(data.apellidoM)
        $('#Posicion').val(data.posicion)
        $('#NumCamisa').val(data.num_camisa)
        $('#Faltas').val(data.faltas)
        $('#TarjetasA').val(data.tarjetasA)
        $('#TarjetasR').val(data.tarjetasR)
        
        $('#exampleModal').modal('hide')

})