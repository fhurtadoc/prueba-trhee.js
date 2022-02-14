<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <script
			  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
			  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
			  crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <title>Fabio Hurtado WEB</title>    
</head>
<body>
    <section class="parallax" id="seccion1">
        <div class="menu">
            <input type="checkbox" name="btn-menu" id="btn-menu" hidden>
            <label for="btn-menu"><img src="./img/menu.png" alt="menu"></label>
            <nav class="menu-into">
                <ul>
                    <li><a href="#seccion2">Sobre Mi</a></li>
                    <li><a href="#seccion3">Experiencia</a></li>
                    <li><a href="#seccion4">Contacto</a></li>
                    <li><a href="#seccion5">Hoja de Vida</a></li>
                </ul>
            </nav>
        </div>
        <div class="continer">
            <h1 class="titulo" style="color:#b8dce8; -webkit-text-stroke: 1px #040e25;">FABIO ALEJANDRO HURTADO CASTILLO<br> <span class="typed"></span></h1>            
        </div>             
    </section>
    
    <section class="parallax" id="seccion2">  
        <div class="card" id="card-sobremi">
            <img class="card-img-top" src="./img/teffy2-fondoblanco.png" alt="imagen">
            <div class="card-body">
              <h5 class="card-title">Sobre Mi </h5>
              <p>Soy un apasionado por la tecnología amante de las ciencias computacionales que constantemente está trabajando en proyectos desafiantes que me permitan expandir mis habilidades, a una compensación justa con suficiente tiempo libre para seguir mis proyectos de código abierto académicos y expandir mis conocimientos en temas desconocidos</p>            
              <p class="string">html</p>  
              <p  class="string">css</p>  
              <p  class="string">Java-Script</p>  
              <p  class="string">Angular</p>  
              <p  class="string">PHP</p> 
              <div style="clear: both"></div> 
              <div id="logos">                
                <img class="tecnologias" src="./estatics/img/html-5.png" alt="HTML" id="html">
                <img class="tecnologias" src="./estatics/img/image.axd.png" alt="HTML" id="css">
                <img class="tecnologias" src="./estatics/img/js.png" alt="HTML" id="js">
                <img class="tecnologias" src="./estatics/img/índice.png" alt="HTML" id="angular">
                <img class="tecnologias" src="./estatics/img/php.png" alt="HTML" id="php">
              </div>
            </div>
          </div>     
        
    </section>
    <section class="parallax" id="seccion3">
        <h3 id="titulo-proyectos">MI EXPERIENCIA</h3>
        <div id="continer-proyectos">
            <figure>
                <img src="./estatics/img/escritorio.jpg" alt="proyecto">
                <div class="capa">
                    <h3>ITSYS SAS</h3>
                    <p>Desarrollador Junior tecnologias: JAVA, JAVASCRIPT MYSQL</p>                    
                </div>                
            </figure>
            <div id="continer-proyectos">
            <figure>
            <img src="./estatics/img/pexels-myburgh-roux-1102797.jpg" alt="proyecto">
                <div class="capa">
                    <h3>SOFEM LTDA</h3>
                    <p>Desarrollador Junior tecnologias: NODE.JS, ANGULAR, POSTGRESQL</p>                    
                </div>                
            </figure>
            <figure>
            <img src="./estatics/img/pexels-kevin-ku-577585.jpg" alt="proyecto">
                <div class="capa">
                    <h3>INFOMETRIKA</h3>
                    <p>Desarrollador Junior tecnologias: PHP, JAVASCRIPT, JQUERY,POSTGRESQL</p>                    
                </div>                
            </figure>
        </div>
    </section>
    <section class="parallax" id="seccion4">              
        <div class="containerv-fluid">
            <header class="vid">
                <div class="overlay"></div>
                <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="assets/vid/bgcode.jpg">
                    <!-- <source src="https://dl.dropboxusercontent.com/s/5bm48qmxs1l59z5/shot.mp4?dl=0" type="video/mp4"> -->
                    <source src="./estatics/img/Flare - 25840.mp4" type="video/mp4">
                </video>
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 col-md-12">
                            <h2 class="title-shot  wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown; color:#6a436d;">
                                Contacto</h2>
                            <p class="description-shot wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.8s; animation-name: fadeInDown;">
                                Estoy dispuesto a encontrar nuevos retos en programacion y estaria encantada en ser parte de tu equipo de trabajo o proyecto</p>
                            <div class="boton-shot text-center" style="color: white;">
                                <a rel="nofollow noopener noreferrer"  href="https://api.whatsapp.com/send?phone=3143934204&text=buen%20dia%20estefania%20estamos%20interesados%20en%20tu%20trabajo" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;" id="what-app">Enviame un WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <footer id="seccion5">
        <div class="continer-footer">
            <div class="div-footer">
                <a href="mailto:fabiohurtadoc@gmail.com">Correo</a>                
                <img src="./img/correo.PNG" alt="correo">
                <p id="mail" >fabiohurtadoc@gmail.com</p>                
            </div>
            <div class="div-footer">
                <a href="https://www.linkedin.com/in/fabio-alejandro-hurtado-castillo-405b31185/details/experience/">linkedin</a>                
            </div>
            <div class="div-footer">
                <a href="https://github.com/fhurtadoc">GitHub</a>                
            </div>                        
            <div class="div-footer">
            <a href="./estatics/globo.png" download="Hoja de vida 2021">Descargar mi Hoja de Vida</a>
            </div> 
        </div>
        
    </footer>    
</body>
<script src="js/home.js"></script>
</html>