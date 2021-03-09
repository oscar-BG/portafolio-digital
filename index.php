<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <link rel="icon" href="icon/carpeta.png">
        <title>Portafolio digital</title>
        <meta charset="UTF-8">
        <meta name="title" content="Portafolio Digital Programador"/>
        <meta name="description" content="Oscar Bautista Gaytan Programador en SCharp & Java"/>
        <meta name="author" content="Oscar Bautista Gaytan"/>
        <meta name="keywords" content="Portafolio Digital, programador, lenguajes de programacion, Oscar Bautista Gaytan"/>
    </head>
    <body >
        <!-- 1.- Cabezera de mi pagina web-->
        <header>
            <h1 class="titulo">portafolio digital de programador</h1>
            <h1 class="titulo">oscar bautista gaytan</h1>
        </header>
        
        <!-- 2.- Barra de navegación de mi pagina web-->
        <nav class="navegacion">
            <!--a qui va mi barra de navegacion-->
            <ul class="circle">
                <li><a href="sobre_mi.html" target="_blank"><h2>Sobre mi</h2></a></li>
                <li><a href="#presentacion"><h2 class="hoverh2">Presentación</h2></a></li>
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
            <p class="texto">
                 Hola soy Oscar Bautista  Gaytan, estudiante de Ingeniería en desarrollo 
                de Software actualmente curso el sexto semestre.
             </p>
            <p class="texto">
                Mis pasatiempos favoritos son las tecnologias de programación.
                actualmente tengo conocimientos en lenguajes de programación en C# y java al igual que manejo de base de datos en Sql server
            </p>
            </br>
        
            <h3 id="habilidades">Conocimientos</h3>
        
            <ol >
                <li class="habilidades">
                    C# <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/color/48/000000/c-sharp-logo.png"/>
                </li>
                <li class="habilidades">
                    Java SE <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/dusk/64/000000/java-coffee-cup-logo.png"/>
                </li>
                <li class="habilidades">
                    Sql server <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/plasticine/100/000000/add-database.png"/>
                </li>
                <li class="habilidades">
                    MySQL <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/ios-filled/50/000000/mysql-logo.png"/>
                </li>
                <li class="habilidades">
                    Git <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/color/48/000000/git.png"/>
                </li>
                <li class="habilidades">
                    GitHub <progress min="0" max="100" value="30"></progress>
                    <img src="https://img.icons8.com/ios-filled/50/000000/github.png"/>
                </li>
            </ol>
            </br>

            <h3 id="miObjetivo">Mis Objetivos</h3>
        
            <p class="texto">
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

           <h3 class="subtitulo" id="redesSociales"> <nav class="contacto">
        Redes Sociales</h3>
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
                <h3>Autor</h3>
                <p class="autor">Autor: Oscar Bautista Gaytan</p>
                <time datetime="01-02-2021"> 1 de febrero del 2021</time>
            </aside> 
        </footer>
    </body>
</html>