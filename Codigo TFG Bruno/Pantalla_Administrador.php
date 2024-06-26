<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Administrador_CSS.css" />
    <title>Pantalla Administrador</title>
</head>
<body>
    <header>
        <div class="imagen_header">
            <img src="Puerelec_Logo.jpg" alt="Puerelec Logo" />
        </div>
        <div class="usuario_info">
            <span class="welcome_message">Bienvenido de nuevo, Bruno!</span>
            <div class="icons">
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="bi bi-person-circle"
                    width="20"
                    height="20"
                    fill="#D8020E"
                    viewBox="0 0 16 16"
                >
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                    <path
                        fill-rule="evenodd"
                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1zm0 8c2.62 0 4.958 1.355 6.316 3.379a.5.5 0 0 1-.632.632C12.355 11.958 10.02 10 8 10s-4.355 1.958-5.684 4.011a.5.5 0 1 1-.632-.632C3.042 10.355 5.38 9 8 9z"
                    ></path>
                </svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="bi bi-bell"
                    width="20"
                    height="20"
                    fill="#D8020E"
                    viewBox="0 0 16 16"
                >
                    <path
                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"
                    ></path>
                </svg>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="20"
                    height="20 "
                    fill="currentColor"
                    class="bi bi-arrow-clockwise"
                    viewBox="0 0 16 16"
                >
                    <path
                        fill-rule="evenodd"
                        d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"
                    />
                    <path
                        d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"
                    />
                </svg>
            </div>
        </div>
    </header>
    <section>
        <div class="cuerpo_principal">
            <?php include 'mostrar.php'; ?>
        </div>
    </section>
    <footer>Puerelec</footer>
</body>
</html>
