function filtroComision() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInputcomi");//CAPTURO ID INPUT
    filter = input.value.toUpperCase();//CONVIERTO SU CONTENIDO TODO A MAYUSCULA
    ul = document.getElementById("myULcomi");//CAPTURO ID UL
    li = ul.getElementsByTagName("li");//CAPTURO TAG LI
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("p")[0];
        ar = li[i].getElementsByTagName("p")[1];
        if (a || ar) {
            //CAPTURO EL PRIMER ELEMENTO P DEL TAG LI Y LO  GUARDO EN VARIABLE A 
            txtValue = a.textContent || a.innerText;//OBTENGO EL CONTENIDO DE TEXTO DE A
            txtValues = ar.textContent || ar.innerText;
        if ((txtValue.toUpperCase().indexOf(filter) > -1)||(txtValues.toUpperCase().indexOf(filter) > -1)) {
            // BUSCO EN LA CADENA EL CONTENIDO INGRESADO
            li[i].style.display = "";
        } else {
           // SI NO TIENE CONTENIDO NO MUESTRO ELTAG LI
            li[i].style.display = "none";
        }
    }
}
}
function limpiare(){
    document.getElementById("myInputcomi").value = "";
    filtroComision();
  }