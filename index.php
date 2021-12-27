<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le Dog - Cotizador de ADN</title>
    <!--estilos de bootstrap css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!--mis estilos css-->
    <link rel="stylesheet" href="css/estilos.css">
    <!--para los iconos-->
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
</head>
<body>
    <!--cabecera-->
    <header>
        <section id="logo">
            <div class="ledog">
                <img src="img/logo.png">
            </div>
            <div class="cotizar">
                <a href="#principal">Cotizar</a>
            </div>
        </section>
        <!--QUIERES SABER EL ADN DE TU FRENCHIE-->
        <div class="containerBanner">
            <img src="img/banner.jpg" class="banner">
            <div class="txt">
                <h1>¿Quieres saber el ADN de tu Frenchie?</h1>
            </div>
        </div>
        <!--paso a paso-->
        <section class="pasos">
            <div class="secciones">
                <h2>¡Es muy fácil!</h2>
                <div class="contenedorSecciones">
                    <div class="paso">
                        <div class="imagen">
                            <p>1</p>
                            <img src="img/microscopio.svg">
                        </div>
                        <p class="descripcion">Elige el laboratorio donde quieres realizar el test</p>
                    </div>
                    <i class="fas fa-arrow-right" id="flecha"></i>
                    <div class="paso">
                        <div class="imagen">
                            <p>2</p>
                            <img src="img/contacto.svg">
                        </div>
                        <p class="descripcion">Elige los genes que deseas testear</p>
                    </div>
                    <i class="fas fa-arrow-right" id="flecha"></i>
                    <div class="paso">
                        <div class="imagen">
                            <p>3</p>
                            <img src="img/dna.svg">
                        </div>
                        <p class="descripcion">Toma la muestra de tu bulldog francés</p>
                    </div>
                    <i class="fas fa-arrow-right" id="flecha"></i>
                    <div class="paso">
                        <div class="imagen">
                            <p>4</p>
                            <img src="img/seguimiento.svg">
                        </div>
                        <p class="descripcion">Envíanos la muestra</p>
                    </div>
                    <i class="fas fa-arrow-right" id="flecha"></i>
                    <div class="paso">
                        <div class="imagen">
                            <p>5</p>
                            <img src="img/pago.svg">
                        </div>
                        <p class="descripcion">Contáctanos y haz el pago</p>
                    </div>
                    <i class="fas fa-arrow-right" id="flecha"></i>
                    <div class="paso">
                        <div class="imagen">
                            <p>6</p>
                            <img src="img/email.svg">
                        </div>
                        <p class="descripcion">Espera los resultados</p>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <!--contenido-->
    <main>
        <aside id="left"></aside>
        <a name="principal"></a>
        <article id="contenido">
            <div class="part1">
                <h2>Listado de tarifas</h2>
                <h5>(Selecciona cada gen para cotizar) 〇 <i class="fas fa-hand-point-left"></i></h5>
                <h5>Por favor seleccione su labaroatorio</h5>
            </div>
            <!--primeros botones-->
            <div class="part2">
                <button type="button" class="boton1 btn btn-lg">ANIMAL GENETICS</button>
                <button type="button" class="boton2 btn btn-lg">US DAVIS</button>
                <button type="button" class="boton3 btn btn-lg">LABOKLIN (C LOCUS / PINK)</button>
            </div>
            
            <?php 
                if(!isset($_POST['bt_merle'])=="bt_merle")
                    {
                        $mer=0;                      
                        tablas_1($mer);
                    }
                elseif(!isset($_POST['bt_merle_1'])=="bt_merle_1")
                    {
                        $vmer=164.045;  
                        tablas_2($vmer);
                    }
                    if(!isset($_POST['bt_locus'])=="bt_locus")
                    {   
                        $locus=0;
                        tablas_3($locus);
                    }
                elseif(!isset($_POST['bt_locus_2'])=="bt_locus_2")
                    {              
                        $vlocus=164.045;
                        tablas_4($vlocus);
                    }
            function tablas_1($mer) 
                {
	        ?>
            <!--tabla-->
            <form action="control.php" method="post">
                <table>
                    <thead>
                        <tr>
                            <th class="columna titulo">Merle y Fluffy</th>
                            <th>Cotizar</th>
                            <th>Valor<br>Final<br>(COP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="columna">Merle 
                                <br>
                                $164.074
                            </td>
                            <td class="check">
                                <button class="btn" type="submit" style="height: 24px; border-radius: 100%; border: 2px solid #5c636a;" name="bt_merle" value="1">
                                </button>
                                </td>
						    <td style="text-align: center;">$<?php echo $mer; ?></td>
                        </tr>
                        <?php  
                            
                            }
                            function tablas_3($locus)
                            {
                        ?>
                        <tr>
                            <td class="columna">L Locus (fluffy)
                                <br>
                                $164.045
                            </td>
                            <td class="check">
                                <button class="btn" type="submit" style="height: 24px; border-radius: 100%; border: 2px solid #5c636a;" name="bt_locus" value="">
                                </button>
                            </td>
						    <td style="text-align: center;">$<?php echo $locus; ?></td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <?php  
			    
		        }
		    function tablas_2($vmer)
		        {
	        ?>
			<form action="control.php" method="post">
				<table>
                    <thead>
                        <tr>
                            <th class="columna titulo">Merle y Fluffy</th>
                            <th>Cotizar</th>
                            <th>Valor<br>Final<br>(COP)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="columna">Merle 
                                <br>
                                $164.045
                            </td>
                            <td class="check">
                                <button class="btn btn-secondary" type="submit" value="" style="height: 24px; border-radius: 100%;" name="bt_merle_1">
                                </button>
                            </td>
                            <td style="text-align: center;">$<?php echo $vmer; ?></td>
                        </tr>
            <?php  
			    
		        }
            function tablas_4($vlocus)
		        {
	        ?>
                        <tr>
                            <td class="columna">L Locus (fluffy)
                                <br>
                                $164.045
                            </td>
                            <td class="check">
                                <button class="btn btn-secondary" type="submit" style="height: 24px; border-radius: 100%;" name="bt_locus_2" value="2">
                                </button>
                            </td>
						    <td style="text-align: center;">$<?php echo $vlocus; ?></td>
                        </tr>
                    </tbody>
				</table>				
			</form>
            <?php  
                    
                }
            ?>
            <p class="mensaje">** En Le Dog gestionamos todo el proceso de testeo con los distintos laboratorios para agilizar resultados y trámites, obteniendo resultados desde 8 días enviada la muestra. No obstante, por parte de los laboratorios y empresas de transporte pueden presentarse retrasos, fallos u otros inconvenientes de los cuales no somos responsables, pero realizaremos las comunicaciones y gestiones necesarias para solventar y lograr tener con éxito los resultados, es de comprender que en estos casos aislados el tiempo para obtener los resultados será mayor. **</p>
            <!--tabla de resultados-->
            <div class="conversion">
                <button type="button" class="boton4 btn btn-lg">DOLARES</button>
                <button type="button" class="boton5 btn btn-lg">PESOS COLOMBIANOS</button>

                <div class="resultados">
                    <p>
                        <span>Laboratorio:</span>
                        <span class="rta">Animal Genetics</span>
                    </p>
                    <p>
                        <span>Subtotal (COP):</span>
                        <span class="rta">$
                            <?php
                            if(!isset($_POST['bt_merle'])=="bt_merle")
                            {
                                $mer='';                      
                                echo $mer;
                            }
                        elseif(!isset($_POST['bt_merle_1'])=="bt_merle_1")
                            {
                                $vmer=164.045;  
                                echo $vmer;
                            }
                            if(!isset($_POST['bt_locus'])=="bt_locus")
                            {   
                                $locus='';
                                echo $locus;
                            }
                        elseif(!isset($_POST['bt_locus_2'])=="bt_locus_2")
                            {              
                                $vlocus=164.045;
                                echo $vlocus;
                            }
                        
                            ?>  
                        </span>
                    </p>
                    <p>
                        <span>Comisión 10%(COP)*:</span>
                        <span class="rta">$
                            <?php
                                if(!isset($_POST['bt_merle'])=="bt_merle")
                                {
                                    $mer='';                      
                                    echo $mer;
                                }
                            elseif(!isset($_POST['bt_merle_1'])=="bt_merle_1")
                                {
                                    $vmer=16.404;  
                                    echo $vmer;
                                }
                                if(!isset($_POST['bt_locus'])=="bt_locus")
                                {   
                                    $locus='';
                                    echo $locus;
                                }
                            elseif(!isset($_POST['bt_locus_2'])=="bt_locus_2")
                                {              
                                    $vlocus=16.404;
                                    echo $vlocus;
                                }
                        
                            ?>
                        </span>
                    </p>
                    <p>
                        <span>Envío (COP):</span>
                        <span class="rta">$ 20.000</span>
                    </p>
                    <br>
                    <br>
                    <p>
                        <span>Total (COP):</span>
                        <span class="rta">$
                        <?php

                            if(!isset($_POST['bt_merle'])=="bt_merle")
                                {
                                    $mer='';                      
                                    echo $mer;
                                }
                            elseif(!isset($_POST['bt_merle_1'])=="bt_merle_1")
                                {
                                    $vmer=164.045;  
                                    echo $vmer+20.000+16.404;
                                }
                                if(!isset($_POST['bt_locus'])=="bt_locus")
                                {   
                                    $locus='';
                                    echo $locus;
                                }
                            elseif(!isset($_POST['bt_locus_2'])=="bt_locus_2")
                                {              
                                    $vlocus=164.045;
                                    echo $vlocus+20.000+16.404;
                                }
                            
                        ?>
                        </span>
                    </p>
                    <br>
                    <p class="peligro">Valor aproximado calculando el TRM del día de hoy ($4101.13), el valor final se da al momento de hacer el pago.</p>
                </div>
            </div>
            <!--tabla morada de terminos-->
            <div class="terminos">
                <p>En Le Dog gestionamos todo el proceso de testeo con los distintos laboratorios para agilizar resultados y trámites, obteniendo resultados desde 8 días enviada la muestra. No obstante, por parte de los laboratorios y empresas de transporte pueden presentarse retrasos, fallos u otros inconvenientes de los cuales no somos responsables, pero realizaremos las comunicaciones y gestiones necesarias para solventar y lograr tener con éxito los resultados, es de comprender que en estos casos aislados el tiempo para obtener los resultados será mayor.
                </p>
                <br>
                <p class="chat">Para adquirir este servicio, escríbenos a través de nuestros canales de contacto vía <br>
                    <strong>WhatsApp</strong> o <strong>Chat</strong></p>
            </div>
        </article>
        <aside id="right"></aside>
    </main>
    <!--footer-->
    <footer>
        <div class="redes">
            <a href="https://www.instagram.com/ledogco/?hl=es-la" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCDcWZL9aLF50XT1ekbQDaGA" target="_blank"><i class="fab fa-youtube"></i></a>
            <a href="https://api.whatsapp.com/send/?phone=573052601773&text&app_absent=0" target="_blank"><i class="fab fa-whatsapp"></i></a> 
        </div>
        <h5>Todos los derechos reservados © Tabio - Cundinamarca</h5>
    </footer>
    <!--simbolo flotante de whatsapp-->
    <a href="https://api.whatsapp.com/send?phone=+573052601773" class="btn-wsp" target="_blank">
	    <i class="fab fa-whatsapp icono"></i>
	</a>
    <!--bootstrap js-->
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <!--mis scripts-->
    <script src="main.js"></script>
</body>
</html>