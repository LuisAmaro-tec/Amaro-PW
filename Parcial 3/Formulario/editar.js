
document.getElementById('editar').addEventListener('click',async()=>{
    const form= new FormData(document.getElementById('Form-Emp'))
     const res = await fetch('editar.php',{
        method:'POST',
        body:form
    })

    res.status==200?
    swal('Jugador editado con éxito!','','success')
    :
    swal('Algo salió mal...','','error')
    document.getElementById('Form-Emp').reset()
})
