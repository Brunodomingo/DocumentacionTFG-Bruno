const username = document.getElementById("username");
const password = document.getElementById("password");
const button = document.getElementById("button");
const mensaje = document.getElementById("mensaje");

button.addEventListener("click", (e) => {
  e.preventDefault();

  // Usuarios y contraseñas predeterminados
  const usuarios = [
    { usuario: "Bruno", contraseña: "1234", redireccion: "formulario.html" },
    {
      usuario: "Admin",
      contraseña: "adminpass",
      redireccion: "Pantalla_Administrador.html",
    },
  ];

  // Obtener los valores ingresados por el usuario
  const inputUsuario = username.value;
  const inputContraseña = password.value;

  // Verificar si el usuario y la contraseña son correctos
  const usuarioEncontrado = usuarios.find(
    (user) =>
      user.usuario === inputUsuario && user.contraseña === inputContraseña
  );

  if (usuarioEncontrado) {
    mensaje.textContent = "Redireccionando...";
    setTimeout(() => {
      window.location.href = usuarioEncontrado.redireccion;
    }, 2000);
  } else {
    mensaje.textContent =
      "Usuario o contraseña incorrectos. Inténtelo de nuevo.";
  }
});
