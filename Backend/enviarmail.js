var correo;
function enviarmail(){
  swal({
  title: "",
  text: "Ingresa tu email",
  type: "input",
  showCancelButton: true,
  closeOnConfirm: false,
  animation: "slide-from-top",
  inputPlaceholder: "Correo"
},
function(inputValue){
  if (inputValue === false) return false;

  if (inputValue === "") {
    swal.showInputError("Tienes que escribir algo!");
    return false
  }

  swal("Bien!", "Escribiste: " + inputValue, "success");
  correo = inputValue;
});
}
