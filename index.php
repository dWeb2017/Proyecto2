<html>
    <head>
        <title>Proyecto 2</title>
   <style type ="text/css">
        body {color: white; font-family: Georgia, Times; padding-left:2em; background-color:darkblue}
        footer {color: blue; text-align:center; font-family: Georgia, Times; padding-left:1em; background-color: gray;}
        </style>
    </head>
    <h1>PROYECTO 2 DEL CURSO DESARROLLO WEB</h1>
    <br/>
    <body>
        <?php
            // Escribe hola mundo en la pagina
            echo "Hola Mundo";
        //?>        
        
        <form action="insertar.php" method="post" name="FrmIngreso">
            <p>Nombre <input type="text" name="nombre" /></p>
            <p>Apellido <input type="text" name="apellido" /><p>
         A:   <input type="submit" value="Insertar Datos" />
        </form>
        
        <form action="consultar.php" method="post" name="FrmConsultar">
         B:   <input type="submit" value="Consultar Datos" />
        </form>    
      
    </body>
    <br/>
    <footer>
        <h2>PAGINA DESARROLLADA POR: </h2> 
           Gabriel Ortiz      0900-11-8756
            <br />   Levi Aguilar       0900-11-8733
            <br />Para el curso de Desarrollo Web
            <br />Agosto de 2017
    </footer>
</html>
