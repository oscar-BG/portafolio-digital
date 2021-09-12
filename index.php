<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="vistas/css/style.css"/>
        <link rel="icon" href="modulos/icon/carpeta.png">
        <title>Portafolio digital</title>
        <meta charset="UTF-8">
        <meta name="title" content="Portafolio Digital Programador"/>
        <meta name="description" content="Oscar Bautista Gaytan Programador en SCharp & Java"/>
        <meta name="author" content="Oscar Bautista Gaytan"/>
        <meta name="keywords" content="Portafolio Digital, programador, lenguajes de programacion, Oscar Bautista Gaytan"/>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:ital,wght@1,700&family=Ranchers&display=swap" rel="stylesheet">
        <link href="modulos/css/style.css" rel="stylesheet">
    </head>
    <body >
        <!-- 1.- Cabezera de mi pagina web-->
        <header>
            <h1 class="header__titulo">portafolio digital de programador</h1> 
            <h1 class="header__titulo">oscar bautista gaytan</h1>
        </header>
        <!--Cambiar tabla por lista agregar session de blog-->
        <nav>
            <div class="div_nav">
                <ul>
                    <li><a href="modulos/sobre_mi.html" target="_blank">Sobre mi</a></li>
                    <li><a href="#presentacion">Presentación</a></li>
                    <li><a href="#habilidades">Conocimientos</a></li>
                    <li><a href="#miObjetivo">Mis objetivos</a></li>
                    <li><a href="#redesSociales">Redes sociales</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </div> 
        </nav>
        <br/>
        <!--Descriocion de mis capacidaded-->
        <!--3 seccion lo principal de mi web-->
        <article>
            <section>
                <hr width="100%" />
                <h3 id="presentacion">Presentación</h3>
                <p>
                    Hola soy <strong>Oscar Bautista  Gaytan</strong>, estudiante de Ingeniería en desarrollo 
                    de Software actualmente curso el sexto semestre.
                </p>
                <p>
                    Mis pasatiempos favoritos son las tecnologias de programación.
                    tengo conocimientos en lenguajes de programación en C# y java al igual que manejo de base de datos en Sql server
                </p>
                </br>
        
                <h3 id="habilidades">Conocimientos</h3>
                <div>
                    <div>
                        <strong>C# </strong><progress min="0" max="100" value="30"></progress>
                        <img src="https://img.icons8.com/color/48/000000/c-sharp-logo.png"/>
                    </div>
                    <div>
                        <strong>Java SE</strong> <progress min="0" max="100" value="30"></progress>
                        <img src="https://img.icons8.com/dusk/64/000000/java-coffee-cup-logo.png"/>
                    </div>
                    <div>
                        <strong>Sql server </strong><progress min="0" max="100" value="30"></progress>
                        <img src="https://img.icons8.com/plasticine/100/000000/add-database.png"/>
                    </div>
                    <div>
                        <strong>MySQL</strong> <progress min="0" max="100" value="30"></progress>
                        <img src="https://img.icons8.com/ios-filled/50/000000/mysql-logo.png"/>
                    </div>
                    <div>
                        <strong>Git</strong> <progress min="0" max="100" value="30"></progress>
                        <img src="https://img.icons8.com/color/48/000000/git.png"/>
                    </div>
                    <div>
                        <strong>GitHub</strong><progress min="0" max="100" value="30"></progress>
                        <img src="https://img.icons8.com/ios-filled/50/000000/github.png"/>
                    </div>
                </div>
                </br>
                <!-- Seccion de trabajos -->
                <h3>Trabajos realizados</h3>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/RCZ2I9a-8oQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kIooNro8FnE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <!-- Seccion de objetivco -->
                <h3 id="miObjetivo">Mis Objetivos</h3>
        
                <p>
                    Nunca terminamos de aprender y mis objetivos van cambiando buscando nuevos caminos que me ayuden a mi desarrollo profesional
                </p>
        
                <table>
                    <caption><h3 style="color: #ef233c;">Mis Objetivos</h3></caption>
                    <tr>    
                        <th> Desarrollo web</th>
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
            <section>
                <p>En mis tiempos libres me gusta estudiar sobre temas de programación al igual que practicarlos
                   tambien tengo otras actividades en mi tiempo libre, como dibujar, leer y ver series.
                </p>
                <p>
                    La programación es de una de mis mayores aficiones ya que es un área en la que me gustaria
                    dedicarme, estudio en diferentes plataformas gratuitas y de pago, una de ellas es SoloLearn y Udemy.
                    A qui alguas insignias que consegui como parte de mis esudios.
                </p>

                <div class="contenedor_img">
                    <div class="galeria">
                        <img src="https://dl.dropboxusercontent.com/s/6abgmchd9ac0qfj/HTML_certificate.jpg" alt="certificado-sololearm" title="programacion-sololearm">
                    </div>
                    <div class="galeria">
                        <img src="https://dl.dropboxusercontent.com/s/o8if6u9grte1ows/PHP_certificate.jpg?dl=0" alt="certificado-sololearm" title="programacion-sololearm">
                    </div>
                </div>
            </section>
        </article> 
        </br>
        
        <!--Pie de pagina-->
        <footer>
            <nav class="nav__contacto">
                <h3 class="subtitulo" id="redesSociales">Redes Sociales</h3>
                <a href="https://github.com/oscar-BG" target="_blank">
                    <img src="modulos/icon/github.png" alt="icono de GitHub" width="10%" height="10%" />
                </a>
                <a href="https://www.facebook.com/Ingenieros-en-Software-102111935247104" target="_blank">
                    <img src="https://img.icons8.com/color/48/000000/facebook.png" alt="icono de facebook" width="10%" height="10%"/>
                </a>
            </nav>

            <!--5 pie de pagina-->
        
            <aside>
                <p class="p__autor">Autor: <strong>Oscar Bautista Gaytan<strong></p>
                <p class="p__autor">Web: hecha con el &#x2764;&#xFE0F; </p>
                
            </aside> 
        </footer>
    </body>
</html>