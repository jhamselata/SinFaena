const estudiantes = [
  { nombre: "Gabriel", edad: 20, carrera: "Ingenieria en Sistemas" },
  { nombre: "Juan", edad: 21, carrera: "Contabilidad" },
  { nombre: "Pedro", edad: 22, carrera: "Arquitectura" },
  { nombre: "Maria", edad: 23, carrera: "Administración de Empresas" },
  { nombre: "Jose", edad: 24, carrera: "Ingenieria en Sistemas" },
];

const listaEstudiantes = document.getElementById("lista-estudiantes");
listaEstudiantes.innerHTML = estudiantes
  .map(
    (estudiante) =>
      `<li>Nombre: ${estudiante.nombre} - Edad: ${estudiante.edad} años - Carrera: ${estudiante.carrera}</li>`
  )
  .join("");