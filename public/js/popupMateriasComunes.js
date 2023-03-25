contenidoMate = document.getElementById('listarMaterias');
var url1;//variable global
function materiasComunesAjax(url){
    url1=url;
    document.getElementById("myInputmate").value = "";//BORRO EL CONTENIDO DE MATERIAS
    const miajax= new XMLHttpRequest();
    // INSTANSIAMOS OBJETO XMLHTTPREQUEST ES EL QUE NOS PERMITE OBTENER ALGO SIN REFRESCAR
    miajax.open('GET',url,true);//TRUE  PARA QUE SEA ASINCRONO
    miajax.send();
    miajax.onreadystatechange = function(){//ACCEDEMOS A UNA DE SUS FUNCIONES
        if (this.readyState == 4 && this.status == 200) {
             // COMPRUEBO LOS ESTADOS (4 TODO A FINALIZADO, 200 TODO OK)
            let datos=JSON.parse(this.responseText);
            console.log(datos);
            // CON ESTA FUNCION LO PROYECTO EN LA TABLA
            proyeccionComunes(contenidoMate,datos);
            return datos;
        }
       
    }
    
}
// FUNCION PARA PROYECTAR
function proyeccionComunes (contenido, listaCarreras){
    contenido.innerHTML='';
    for(let item of listaCarreras){
        contenido.innerHTML +=`
        <tr>
        <td>
        ${item.nombre}
        </td>
        <td>
        <h4 class="boton-carreras">${item.anio}</h4>
        </td>
        <td>
        <a href="/listarComisionesComunes/${item.id}" class="btn btn-success" role="button">Buscar</a>
        </td>
        </tr>
        `
    }
    contenidoN.style.display = 'none';//OCULTO
}

    
