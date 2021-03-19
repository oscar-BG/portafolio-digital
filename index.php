<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/style.css"/>
        <link rel="icon" href="icon/carpeta.png">
        <title>Portafolio digital</title>
        <meta charset="UTF-8">
        <meta name="title" content="Portafolio Digital Programador"/>
        <meta name="description" content="Oscar Bautista Gaytan Programador en SCharp & Java"/>
        <meta name="author" content="Oscar Bautista Gaytan"/>
        <meta name="keywords" content="Portafolio Digital, programador, lenguajes de programacion, Oscar Bautista Gaytan"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,700&family=Ranchers&display=swap" rel="stylesheet">
    </head>
    <body >
        <!-- 1.- Cabezera de mi pagina web-->
        <header>
            <h1 class="header__titulo">portafolio digital de programador</h1> 
            <h1 class="header__titulo">oscar bautista gaytan</h1>
        </header>
        
        <!-- 2.- Barra de navegación de mi pagina web-->
        <nav class="nav">
            <!--a qui va mi barra de navegacion-->
            <ul class="nav__circle">
                <li><a href="sobre_mi.html" target="_blank"><h3 class="subtitulo">Sobre mi</h3></a></li>
                <li><a href="#presentacion"><h2>Presentación</h2></a></li>
                <li><a href="#habilidades"><h2>Conocimientos</h2></a></li>
                <li><a href="#miObjetivo"><h2>Mis objetivos</h2></a></li>
                <li><a href="#redesSociales"><h2>Redes sociales</h2></a></li>
            </ul>
        </nav>
        <br/>
        
        <!--Descriocion de mis capacidaded-->
        <!--3 seccion lo principal de mi web-->
        <section>
            <hr width="100%" />
            <h3 id="presentacion">Presentación</h3>
            <p>
                 Hola soy <strong>Oscar Bautista  Gaytan</strong>, estudiante de Ingeniería en desarrollo 
                de Software actualmente curso el sexto semestre.
             </p>
            <p>
                Mis pasatiempos favoritos son las tecnologias de programación.
                actualmente tengo conocimientos en lenguajes de programación en C# y java al igual que manejo de base de datos en Sql server
            </p>
            </br>
        
            <h3 id="habilidades">Conocimientos</h3>
        
            <ol class="ol__habilidades">
                <li>
                    <strong>C# </strong><progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/color/48/000000/c-sharp-logo.png"/>
                    <form action="index.php" method="POST">
                        <input type="submit" value="¿Que es C#" name="SCharp">
                        <?php
                            if(isset($_POST["SCharp"])){
                                echo "<br>";
                                echo "C#: Es un lenguaje de programación multiparadigma desarrollado y estandarizado por la empresa Microsoft como parte de su plataforma .NET";
                            }
                        ?>
                    </form>
                    
                </li>
                <li>
                    <strong>Java SE</strong> <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/dusk/64/000000/java-coffee-cup-logo.png"/>
                    <form action="index.php" method="POST">
                        <input type="submit" value="¿Que es Java SE?" name="javaSE">
                        <?php
                            if(isset($_POST["javaSE"])){
                                echo "<br>";
                                echo "Java es un tipo de lenguaje de programación y una plataforma informática, creada y comercializada por Sun Microsystems en el año 1995.<br> 
                                Se constituye como un lenguaje orientado a objetos, su intención es permitir que los desarrolladores de aplicaciones escriban el programa una sola vez y lo ejecuten en cualquier dispositivo.";
                            }
                        ?>
                    </form>
                </li>
                <li>
                    <strong>Sql server </strong><progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/plasticine/100/000000/add-database.png"/>
                    <form action="index.php" method="POST">
                        <input type="submit" value="¿Que es Sql server?" name="sql">
                        <?php
                            if(isset($_POST["sql"])){
                                echo "<br>";
                                echo "SQL Server es un sistema de gestión de bases de datos relacionales (RDBMS) de 
                                Microsoft que está diseñado para el entorno empresarial. SQL Server se ejecuta en 
                                T-SQL (Transact -SQL), un conjunto de extensiones de programación de Sybase y Microsoft 
                                que añaden varias características a SQL estándar, incluyendo control de transacciones, 
                                excepción y manejo de errores, procesamiento fila, así como variables declaradas.";
                            }
                        ?>
                    </form>
                </li>
                <li>
                    <strong>MySQL</strong> <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/ios-filled/50/000000/mysql-logo.png"/>
                    <form action="index.php" method="POST">
                        <input type="submit" value="¿Que es MySQL?" name="mySql">
                        <?php
                            if(isset($_POST["mySql"])){
                                echo "<br>";
                                echo "MySQL es un sistema de administración de bases de datos 
                                (Database Management System, DBMS) para bases de datos relacionales. ";
                            }
                        ?>
                    </form>
                </li>
                <li>
                    <strong>Git</strong> <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/color/48/000000/git.png"/>
                    <form action="index.php" method="POST">
                        <input type="submit" value="¿Que es git?" name="git">
                        <?php
                            if(isset($_POST["git"])){
                                echo "<br>";
                                echo "Git, es un software de control de versiones diseñado por Linus Torvalds. 
                                La pregunta es ¿qué es control de versiones? Pues bien, se define como 
                                control de versiones a la gestión de los diversos cambios que se
                                 realizan sobre los elementos de algún producto o una configuración del mismo";
                            }
                        ?>
                    </form>
                </li>
                <li>
                    <strong>GitHub</strong><progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/ios-filled/50/000000/github.png"/>
                    <form action="index.php" method="POST">
                        <input type="submit" value="¿Que es GitHub?" name="gitHub">
                        <?php
                            if(isset($_POST["gitHub"])){
                                echo "<br>";
                                echo "GitHub es un sitio web y un servicio en la nube que ayuda a los desarrolladores a
                                 almacenar y administrar su código, al igual que llevar un registro y control de cualquier 
                                 cambio sobre este código.";
                            }
                        ?>
                    </form>
                </li>
            </ol>
            </br>

            <h3 id="miObjetivo">Mis Objetivos</h3>
        
            <p>
                Nunca terminamos de aprender y mis objetivos van cambiando buscando nuevos caminos que me ayuden a mi desarrollo profesional
            </p>
        
            <table align="center" >
                <tr>
                    <td class="centro" colspan="2">
                        <b>
                            Objetivos
                        </b>
                    </td>
                </tr>
                <tr>    
                    <th> Diseño web</th>
                    <th>Programación</th>
                </tr>
                <tr>
                    <td>HTML5</td>
                    <td rowspan="3" class="middle">Python</td>
                </tr>
                <tr>
                    <td>CSS3</td>
                </tr>
                <tr>
                    <td>java script</td>
                </tr>
            </table>
        </section> 
        </br>

        <nav class="nav__contacto">
            <h3 class="subtitulo" id="redesSociales">Redes Sociales</h3>
            <a href="https://github.com/oscar-BG" target="_blank">
                <img src="https://img.icons8.com/ios-filled/50/000000/github.png" 
                alt="icono de GitHub"
                width="10%"
                height="10%"
                />
            </a>
            <a href="https://www.facebook.com/Ingenieros-en-Software-102111935247104" target="_blank">
                <img src="https://img.icons8.com/color/48/000000/facebook.png" 
                alt="icono de facebook"
                width="10%"
                height="10%"
                />
            </a>
        </nav>

        <!--5 pie de pagina-->
        <footer>
            <aside>
                <p class="h3__autor">Autor: <strong>Oscar Bautista Gaytan<strong></p>
                <?php
                    $day = date("d");
                    $month = date("m");
                    $year = date("y");
                    $monthArray = array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');
                    echo "<time>".$day." De ".$monthArray[$month -1]." Del "."20".$year;
                    //echo "<time datetime="01-02-2021"> 1 de febrero del 2021</time>";
                ?>
                
            </aside> 
        </footer>
    </body>
</html>