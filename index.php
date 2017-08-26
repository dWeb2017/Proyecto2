<html>
    <head>
        <title>Proyecto 2</title>
   <style type ="text/css">
       body {
        color: white; 
        font-family: Georgia, Times; padding-left:2em; 
        background-color:gray;
 }
 
footer {
        color: blue; 
        text-align:center; 
        font-family: Georgia, Times; 
        padding-left:0; 
        background-color: gray;
}
        </style>
<!--        <link rel="stylesheet" type="text/css" href="estilo1.css" >-->
<!--
<link rel="stylesheet" href="css/bootstrap.css" >
<script src="js/bootstrap.js" ></script>   -->
    </head>
<!--    <h1>PROYECTO 2 DEL CURSO DESARROLLO WEB</h1>-->
    
    <body>
        <header>   
           
            <img src="header.png" width="auto" height="auto"  >
        </header>
    

        <div class="container">   
        <p> Sistema de ingreso para productos </p>
        <form action="insertar.php" method="post" name="FrmIngreso">
            <p>Ingrese un id:</p>
            <input type="text" name="id" />
            <p>Ingrese una descripción</p>
            <input type="text" name="desc" /><br>
         A:   <input type="submit" value="Agregar Datos" />
        </form>
        
        <br>
        <form action="borrar.php" method="post" name="FrmBorrar">
         B:   <input type="text" name="dat" /><br>
         <input type="submit" value="Borrar Datos" />
        </form>
        
        <br>
          <form action="consultar.php" method="post" name="FrmConsultar">
         C:   <input type="submit" value="Consultar Datos" />
        </form>
      </div>
    </body>
    <br/>
    <footer> <!--pie de pagina--> 
<!--        <h2>PAGINA DESARROLLADA POR: </h2> 
           Gabriel Ortiz      0900-11-8756
            <br />   Levi Aguilar       0900-11-8733
            <br />Para el curso de Desarrollo Web
            <br />Agosto de 2017-->
<img src="Footer.png">       
    </footer>
</html>
