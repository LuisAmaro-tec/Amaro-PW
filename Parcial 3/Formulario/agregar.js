
document.getElementById('b_agregar').addEventListener('click',async ()=>{
    const form= new FormData(document.getElementById('Form-Emp'))
    
     const res=await fetch('agregar.php',{
        method:'POST',
        body:form,
        
    })
    res.status==200?
    swal('Jugador añadido con éxito!','','success')
    :
    swal('No se pudo añadir el jugador','','error')
    document.getElementById('Form-Emp').reset()
})