<?php   require_once "views/shared/headerLogin.php"    ?>

<div class="login">
	<h1>Registro</h1>
    <form method="post" action="index.php?control=usuario&action=register">
    	<input type="number" name="cedula" placeholder="Cédula" required />
    	<input type="text" name="nombre" placeholder="Nombre" required />
    	<input type="email" name="email" placeholder="Email" required />
        <input type="password" name="contrasenia" placeholder="Contraseña" required />
        <button type="submit" class="btn btn-primary btn-block btn-large">Registrarse</button>
    </form>
    <div class="texto-blanco">
        ¿Ya esta registrado? <a href="index.php?control=usuario&action=verLogin">Ingrese</a>

    </div>
</div>

    
</body>
</html>
