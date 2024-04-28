<!DOCTYPE html>
<html>
<head>
    <title>Login y Registro</title>
    
    <link rel="stylesheet" href="asset/CSS/estilo.css">
</head>
<body>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesión">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Registrarse</button>
                </div>
            </div>
            <!--formulario__login-->
            <div class="contenedor__login-register">
                <!--login-->
                <form action="" class="formulario_login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar<button>
                </form>
                <!--register-->
                <form action="php/registro_usuario.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button >Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="asset/js/srcip.js"></script>
</body>
</html>