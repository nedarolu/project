<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" href="file/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
    <script type="text/javascript" src="file/js/jssor.slider.mini.js"></script>
    <script src="file/js/jquery-1.11.2.js"></script> 
    <script src="file/js/script.js"></script>    

<style type="text/css">
      nav.navbar {
    /*background-color: transparent;*/
}

nav.navbar ul.nav li {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 1.2em;
    
}

footer{

    width: 100%;
    height: 100px;
    background-color:  rgba(36, 46, 50, 0.9);
    color: white;

    }

    /* next*/  /* Bifurbicar */

    .jssorb21 {
                    position: absolute;
                }
                .jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {
                    position: absolute;
                   
                    width: 19px;
                    height: 19px;
                    text-align: center;
                    line-height: 19px;
                    color: white;
                    font-size: 12px;
                    background: url(img/b05.png) no-repeat;
                    overflow: hidden;
                    cursor: pointer;
                }
                .jssorb21 div { background-position: -5px -5px; }
                .jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
                .jssorb21 .av { background-position: -65px -5px; }
                .jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }



                /*  next 2*/

</style>
</head>
<body>
 <header>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
    <a class="navbar-brand " href="#" >
        <img alt="" src="img/ucc.png">      </a>
      <button type="button" class="navbar-toggle collapsed" 
            data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="#">Mild Coffee </a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
       <ul class="nav navbar-nav navbar-right">
      <!--<li><a href="#" data-toggle="modal"  data-target="#log"><span class="glyphicon glyphicon-user"></span>Regístrate</a></li> -->
      <li><a href="#" data-toggle="modal"  data-target="#login"><span class="glyphicon glyphicon-log-in"></span>Acceder</a></li>
    </ul>
     
    </div>
  </div>

</nav>
 </header>

    <div id="slider1_container" style="visibility: hidden; position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            
            <div u="loading" style="position: absolute; top: 0px; left: 0px;">
                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
                <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
                </div>
            </div>
            
            <div u="slides" style="position: absolute; left: 0px; top: 0px; width: 1300px; height: 500px; overflow: hidden;">
                <div>
                    <img u="image" src2="img/coffe0.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/coffe1.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/coffe2.jpg" />
                </div>
                <div>
                    <img u="image" src2="img/coffe3.jpg" />
                </div>
            </div>
            
          
            <div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
                
                <div u="prototype"></div>
            </div>
          
          
            
            <span u="arrowleft" class="jssora21l" style="top: 123px; left: 8px;">
            </span>
           
            <span u="arrowright" class="jssora21r" style="top: 123px; right: 8px;">
            </span>
         
        </div>       
 
    
    <!--login --> 
   <div id="login" class="modal  fade " role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <a data-dismiss="modal" class="close">×</a>
        <h2>Iniciar Sesión</h2>
     </div>
     <div class="modal-body">
         
       <form id="loginform" class="form-horizontal " role="form">
                        <div style="margin-bottom: 25px" class="input-group col-sm-9">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="username" value="coffee" placeholder="username or email">                                        
                        </div>    
                        <div style="margin-bottom: 25px" class="input-group col-sm-9">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="password" value="1234" placeholder="password">
                        </div>
                       
                           
                    </form>               
    </div>
    <div class="modal-footer">
        <a href="vista/principal.html" class="btn btn-success">Guardar</a>
        <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
    </div>
</div>
</div>
</div>
<!-- login-->

<!--registro -->
<div id="logup" class="modal  fade " role="dialog">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <a data-dismiss="modal" class="close">×</a>
        <h2>Registro</h2>
     </div>
     <div class="modal-body">
         
       <form id="signupform" class="form-horizontal" role="form">
                        <div id="signupalert" style="display:none" class="alert alert-danger">
                            <p>Error:</p>
                            <span></span>
                        </div>
                        <div class="form-group">
                            <label for="firstname" class="col-md-3 control-label">Nombres</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtNombre" placeholder="Digite Nombres de la persona">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Apellidos</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtApellido" placeholder="Digite Apellidos de la persona">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Identificación</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtIdentificacion" placeholder="Digite número de Identificación">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Correo</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtIdentificacion" placeholder="Digite correo personal">
                            </div>
                        </div>
                         <div class="form-group">
                            <label for="lastname" class="col-md-3 control-label">Usuario</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="txtUsuario" placeholder="Digite nombre de usuario">
                            </div>
                        </div>
                         
                        <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Contraseña</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="passwd" placeholder="Password">
                            </div>
                        </div>   
                         <div class="form-group">
                            <label for="password" class="col-md-3 control-label">Confirmar Contraseña</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="passwd" placeholder="Digite nuevamente la contraseña">
                            </div>
                        </div>  
                                   
                    </form>
    </div>
    <div class="modal-footer">
        <a href="index.html" class="btn btn-success">Guardar</a>
        <a href="#" data-dismiss="modal" class="btn">Cerrar</a>
    </div>
</div>
</div>
</div>
<!--registro -->
<div id="caja1" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
    <h2>Quiénes somos</h2>  
 <p class="text-justify">Mild Coffee Company Huila (MCCH), es una empresa conjunta de la compañía holandesa The Mild Coffee Company (MCC) fundada en 1993 y especializada en la comercialización de cafés colombianos, esta, hace parte del Grupo Douqué  creado desde 1895,  y la empresa colombiana Inversiones Cafeteras del Sur que tiene más de 30 años de experiencia en la producción y compra de café en el Huila y Tolima.</p>

 <p class="text-justify" >Mild Coffee Company Huila (MCCH), nace en mayo de 2.011, como una exportadora de café verde sostenible, de origen y de alta calidad, en Huila - Colombia, garantizando la logística en el proceso de exportación. Busca mejorar la calidad de vida de las familias caficultoras, a través de la comercialización de sus productos y la elaboración y ejecución de proyectos productivos sostenibles que garanticen, a través de sus acciones, el bienestar de las comunidades.</p>
 <p class="text-justify">Ha logrado posicionamiento estratégico en el mercado Europeo de Café, que le permite altos niveles de competitividad y continuidad, a través de una propuesta de valor caracterizado por dos aspectos: </p> 
 <p class="text-justify">Un café especial que sobresale por sus propiedades únicas, con origen en las tierras altas de las cordilleras volcánicas en el Departamento del Huila y sur del Tolima; 
Y un modelo de producción que integra aproximadamente a 499 familias cafeteras en condiciones de sostenibilidad y prosperidad, lo que garantiza la transparencia en la cadena de suministro.</p>
      </div>
    </div>
  </div>
</div>
<div id="caja2" class="pad-section">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
       <h2>Política integral </h2>    
       <p class="text-justify">MILD COFFEE COMPANY HUILA contribuye al desarrollo social, económico, ambiental y de seguridad en el sector caficultor del Departamento del Huila y sus aledaños, mediante la comercialización y exportación de café excelso y certificado verde de alta calidad, garantizando la inocuidad del alimento. MCCH con sus sistemas de gestión pretende satisfacer las expectativas de sus Clientes con procesos que propendan al mejoramiento continuo a través del control de sus Impactos Ambientales y la prevención de la contaminación de sus partes interesadas, para reducir y controlar la Generación de Residuos; Controlar los peligros y riesgos, entre ellos la Generación de Ruido de Impacto Continúo y Emisión de Partículas siendo los más significativos, con el fin de prevenir lesiones y enfermedades profesionales en sus empleados y cumpliendo a cabalidad los requisitos legales, reglamentarios y de sus Clientes.</p>
      <p class="text-justify"> Adicionalmente, Mild Coffee Company Huila, se compromete a aplicar, en sus procesos y procedimientos, controles que eviten la contaminación de la carga y lavado de dinero provenientes de productos ilícitos y ser usada como vehículo para el desarrollo del terrorismo a través de sus operaciones de exportación, todo bajo el cumplimiento de la legislación nacional e internacional aplicable.</p>
       
      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container" id="footer">
    <h2 class="text-center"> Pie de pagina </h2>
  </div>
</footer>

<script src="file/js/jquery-1.11.2.js"></script>
<script src="file/js/bootstrap.min.js"></script>
</body>
</html>