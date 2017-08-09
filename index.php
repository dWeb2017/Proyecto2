<html>
    <head>
        <title>Proyecto Php</title>
    </head>
    <h1>Pagina Php</h1>
    <body>
        <?php
            // Escribe hola mundo en la pagina
            echo "Hola Mundo";
        ?>        
        <form action="insertar.php" method="post" name="FrmIngreso">
            <p>Nombre <input type="text" name="nombre" /></p>
            <p>Apellido <input type="text" name="apellido" /><p>
            <input type="submit" value="Insertar Datos" />
        </form>
        <form action="consultar.php" method="post" name="FrmConsultar">
            <input type="submit" value="Consultar Datos" />
        </form>            
    </body>
</html>
