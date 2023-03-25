
resultado=false;
contenidoN=document.getElementById("nohay");//ID DE TEXTO NO HAY MATERIAS
function filtroMatAnio() {
  var estados=[true];
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInputmate");
    filter = input.value.toUpperCase();
    table = document.getElementById("materias");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[0];
      tds = tr[i].getElementsByTagName("td")[1];//AGREGO EL OTRO CAMPO PARA FILTRAR
      if (td || tds) {
        txtValue = td.textContent || td.innerText;
        txtValues = tds.textContent || tds.innerText;
        if ((txtValue.toUpperCase().indexOf(filter) > -1)||(txtValues.toUpperCase().indexOf(filter) > -1)) {
          tr[i].style.display = "";
          estados.push(true);//cuento la cantidad de veces q proyecto
        } else {
          tr[i].style.display = "none";
        }
      }       
    }

    console.log("nueva buequeda");
    for (w = 0; w < estados.length; w++) {
      if(estados.length>1){  
        contenidoN.style.display = 'none';//OCULTO
      console.log("que loco");
      }else{
        contenidoN.style.display='block';//MUESTRO
        console.log("no hay materias");
      }
    }

  }