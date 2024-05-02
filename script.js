//Validacion de acciones
function confirmar(btn) {
  switch (btn) {
    case "eliminar":
      let answer = confirm(
        "¿Estas seguro de que quieres elimiar la informacion de este registro?"
      );
      return answer;

    default:
      window.alert("Ocurrio un problama, favor comuniquese con el tecnico.");
  }
}
