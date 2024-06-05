function mostrarPartesDeTrabajo(partesTrabajo) {
    const partesTrabajoList = document.getElementById('partesTrabajoList');
    partesTrabajoList.innerHTML = ''; 

    partesTrabajo.forEach(part => {
        const listItem = document.createElement('li');
        listItem.textContent = `${part.descripcion} - ${part.fecha} - ${part.id} - ${part.empleado} - ${part.tiempo_empleado} - ${part.costo_asociado}`; 
        partesTrabajoList.appendChild(listItem);
    });
}




// Limpiar la lista antes de agregar nuevos elementos
// Aqui puedes mostrar los detalles del parte de trabajo