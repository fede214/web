function validacion() {
  nomb= document.getElementById('nombre').value;
  rank= document.getElementById('ranking').value;
  ptn= document.getElementById('puntos').value;
  edad= document.getElementById('edad').value;
  fech = document.getElementById('fechanac').value;
  
  if (nomb == "" || rank == "" || ptn == "" || edad == ""|| fech == "") {
    alert("Complete todos los campos");
    return false;
  }
  else if (nomb.length > 15) {
    alert("Nombre:caracter maximo 15");
    return false;
  }
//   else if (apel.length > 15) {
//     alert("Apellido:caracter maximo 15");
//     return false;
//   }
//   else if (!expresion.test(mail)) {
//     alert("introduzca un correo valido");
//     return false;
//   }
// else if (texto.length<8) {
//   alert("mensaje minimo 8 caracteres");
//   return false;
// }
// else if (texto.length>150) {
//   alert("mensaje muy largo");
//   return false;
// }

 
}
