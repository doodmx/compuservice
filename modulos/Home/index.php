<?php
include 'admin/functions.php';
sql_opciones('slide_active',$valor);
$slide=$valor;
?>
<?php if($slide==1){?>
      <!-- banner -->
      <div class="banner">
         <!--Slider-->
         <div class="slider">
            <div class="callbacks_container">
               <ul class="rslides" id="slider3">
                  <li>
                     <div class="slider-img">
                        <img src="<?php echo $page_url.$path_tema;?>images/banner1.jpg" class="img-responsive" alt="Fantasy World">
                     </div>
                     <div class="slider-info">
                        <h4>Mantenimiento de PC</h4>
                        <p>Reparci&oacute;n y mantenimiento de computadoras</p>
                        <a href="#about" class="hvr-shutter-in-horizontal scroll">Leer M&aacute;s</a>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img">
                        <img src="<?php echo $page_url.$path_tema;?>images/banner2.jpg" class="img-responsive" alt="Fantasy World">
                     </div>
                     <div class="slider-info">
                        <h4>Reparaci&oacute;n de Celulares</h4>
                        <p>Espacialistas en todo tipo de fallas y da&ntilde;os </p>
                        <a href="#about" class="hvr-shutter-in-horizontal scroll">Leer M&aacute;s</a>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img">
                        <img src="<?php echo $page_url.$path_tema;?>images/banner4.jpg" class="img-responsive" alt="Fantasy World">
                     </div>
                     <div class="slider-info">
                        <h4>Reparaci&oacute;n de Drones</h4>
                        <p>Reparaci&oacute;n y mantenimiento a Drones </p>
                        <a href="#about" class="hvr-shutter-in-horizontal scroll">Leer M&aacute;s</a>
                     </div>
                  </li>
               </ul>
            </div>
            <div class="clearfix"></div>
         </div>
         <!--//Slider-->
      </div>
      <!-- //banner -->
<?php }?>
<?php
pages($mod,$ext,$contenido,$activo);
if($activo==1){
	echo $contenido;
}else{
?>

      <!-- Modal1 -->
      <div class="modal fade" id="myModal1" role="dialog">
         <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4>Contracts</h4>
                  <img src="<?php echo $page_url.$path_tema;?>images/ab.jpg" alt=" " class="img-responsive">
                  <h5>La Empresa</h5>
                  <p>Nuestro servicio de reparaci&oacute;n, mantenimiento y actualizaci&oacute;n de computadoras se distingue por el amplio conocimiento que hemos acumulado gracias a a&ntilde;os de estar en contacto con el hardware de las marcas m&aacute;s reconocidas de alto desempe&ntilde;o.</p>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal1 -->
      <!-- about -->
      <div class="about" id="about">
         <div class="container">
            <div class="col-md-4 agileits_about_left">
               <h3 class="w3l_head">La Empresa</h3>
               <p class="w3ls_head_para">quienes somos</p>
            </div>
            <div class="agileits_banner_bottom_grids">
               <div class="col-md-6 agileits_banner_bottom_grid_l">
                  <h4>Profesionales de la Tecnolog&iacute;a</h4>
                  <p><i>Realizamos repraci&oacute;n de computadoras, celulares y drones, todo con equipo especializado dando gran calidad a nuestros servicios.</i>
                     Nuestro servicio de reparaci&oacute;n, mantenimiento y actualizaci&oacute;n de computadoras se distingue por el amplio conocimiento que hemos acumulado gracias a a&ntilde;os de estar en contacto con el hardware de las marcas m&aacute;s reconocidas de alto desempe&ntilde;o.
                  </p>
               </div>
               <div class="col-md-6 agileits_banner_bottom_grid_r">
                  <div class="agileits_banner_btm_grid_r">
                     <img src="<?php echo $page_url.$path_tema;?>images/reparacion-computadoras-no-enciende-1.jpg" alt=" " class="img-responsive">
                     <div class="agileits_banner_btm_grid_r_pos">
                        <img src="<?php echo $page_url.$path_tema;?>images/reparacion.jpg" alt=" " class="img-responsive">
                     </div>
                  </div>
               </div>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      <!-- //about-bottom -->
      <!-- services -->
      <div class="services" id="services">
         <h3 class="w3l_head w3l_head1">Servicios</h3>
         <p class="w3ls_head_para w3ls_head_para1">Ver nustros servicios</p>
         <div class="services-agile-w3l">
            <div class="col-md-3 services-gd text-center">
               <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                  <a href="#" class="hi-icon"><img src="<?php echo $page_url.$path_tema;?>images/s1.png" alt=" " /></a>
               </div>
               <h4>Reparaci&oacute;n</h4>
               <p>de Computadoras</p>
            </div>
            <div class="col-md-3 services-gd text-center">
               <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                  <a href="#" class="hi-icon"><img src="<?php echo $page_url.$path_tema;?>images/s2.png" alt=" " /></a>
               </div>
               <h4>Reparaci&oacute;n</h4>
               <p>de Celulares</p>
            </div>
            <div class="col-md-3 services-gd text-center">
               <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                  <a href="#" class="hi-icon"><img src="<?php echo $page_url.$path_tema;?>images/s3.png" alt=" " /></a>
               </div>
               <h4>Reparaci&oacute;n</h4>
               <p>de Camaras</p>
            </div>
            <div class="col-md-3 services-gd text-center">
               <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9a">
                  <a href="#" class="hi-icon"><img src="<?php echo $page_url.$path_tema;?>images/s4.png" alt=" " /></a>
               </div>
               <h4>Reparaci&oacute;n</h4>
               <p>de Drones</p>
            </div>
            <div class="clearfix"> </div>
         </div>
      </div>
      <!-- //services -->
      <!-- gallery -->
      <div class="team-bottom" id="pc" style="background:#ddd;">
         <div class="container">
            <h3 class="w3l_head w3l_head1">Reparaci&oacute;n de Computadoras</h3>
            <p class="w3ls_head_para w3ls_head_para1">Servicio de Alto Nivel</p>
            <div class="agileits_banner_bottom_grids">
               <div class="col-md-6 agileits_banner_bottom_grid_l">
                  <h4></h4>
                  <p><img src="<?php echo $page_url.$path_tema;?>images/reparacion-computadoras-mac-queretaro.png">
                  <p>
                  <p>
                  <ul class="frb_bullets_wrapper " id="frb_bullets_1336198241">
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Reinstalaci&oacute;n Sistema Operativo</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Soluciones Para Equipo Lento</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Mantto Nivel Formato</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Cambio de Disco Duro a Solido</div>
                     </li>
                  </ul>
                  </p>
               </div>
               <div class="col-md-6 agileits_banner_bottom_grid_l">
                  <h4></h4>
                  <p><img src="<?php echo $page_url.$path_tema;?>images/reparacion-computadoras-queretaro.png">
                  <p>
                  <p>
                  <ul class="frb_bullets_wrapper " id="frb_bullets_1336198241">
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Reinstalaci&oacute;n Sistema Operativo</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Soluciones Para Equipo Lento</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Mantto Nivel Formato</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-check-square-o"></i>
                        <div style="padding-left: 38px;display:inline-block;">Cambio de Disco Duro a Solido</div>
                     </li>
                  </ul>
                  </p>				
               </div>
               <p>&nbsp;</p>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      <div class="team-bottom" id="work">
         <div class="container">
            <h3 class="w3l_head w3l_head1">Mantenimiento de Computadoras</h3>
            <p class="w3ls_head_para w3ls_head_para1">Servicio de Alto Nivel</p>
            <div class="agileits_banner_bottom_grids">
               <div class="col-md-6 agileits_banner_bottom_grid_l">
                  <h4></h4>
                  <p><img src="<?php echo $page_url.$path_tema;?>images/img-003.png">
                  <p>
                  <p>Instalaci&oacute;n, configuraci&oacute;n, actualizaci&oacute;n y Reparaci&oacute;n de Computadores port&aacute;tiles, tanto a nivel de Hardware como de Software: Formateo e instalaci&oacute;n de programas, revisi&oacute;n y eliminaci&oacute;n de virus.</p>
               </div>
               <div class="col-md-6 agileits_banner_bottom_grid_l">
                  <h4>Limpieza Servicio Nivel componentes</h4>
                  <p>
                  <ul class="frb_bullets_wrapper " id="frb_bullets_31108618">
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Diagnostico del buen funcionamiento</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Limpieza de componentes y disipadores</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Cambio de Pasta t&eacute;rmica</div>
                     </li>
                  </ul>
                  </p>
                  <p>&nbsp;</p>
                  <h4>Limpieza Servicio Nivel Software</h4>
                  <p>
                  <ul class="frb_bullets_wrapper " id="frb_bullets_1440258722">
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Optimizaci&oacute;n de sistema operativo</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Desistalai&oacute;n de programas no necesarios</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Limpieza de residuos del uso de internet</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Correcci&oacute;n de errores</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Eliminaci&oacute;n de arranques en segundo plano</div>
                     </li>
                  </ul>
                  </p>
                  <p>&nbsp;</p>
                  <h4>En caso de formato</h4>
                  <p>
                  <ul class="frb_bullets_wrapper " id="frb_bullets_438893313">
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Respaldo</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Sistema Operativo</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Paqueteria Office</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Descompresor winrar</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Lector pdf</div>
                     </li>
                     <li>
                        <i class="frb_icon fa fa-plus"></i>
                        <div style="padding-left: 38px;display:inline-block;">Java</div>
                     </li>
                  </ul>
                  </p>
               </div>
               <p>&nbsp;</p>
               <div class="clearfix"> </div>
            </div>
         </div>
      </div>
      <!-- projects -->
      <div class="projects" id="projects">
         <div class="container">
            <div class="port-head">
               <h3 class="w3l_head w3l_head1">M&aacute;s Servicios</h3>
               <p class="w3ls_head_para w3ls_head_para1">Reparaci&oacute;n de componentes electr&oacute;nicos</p>
            </div>
         </div>
         <div class="projects-grids">
            <div class="sreen-gallery-cursual">
               <div id="owl-demo" class="owl-carousel owl-theme">
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s1.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Reemplazo</h4>
                           <p>de pantalla da&ntilde;ada</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s2.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Mantenimiento</h4>
                           <p>de computadoras</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s3.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Reparaci&oacute;n</h4>
                           <p>de camaras ditales</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s4.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Reparaci&oacute;n</h4>
                           <p>de celulares</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s5.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Reparaci&oacute;n</h4>
                           <p>de Drones</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s6.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Mantenimiento</h4>
                           <p>de Drones</p>
                        </div>
                     </div>
                  </div>
                  <div class="item">
                     <div class="projects-agile-grid-info">
                        <img src="<?php echo $page_url.$path_tema;?>images/s7.jpg" alt="" />
                        <div class="projects-grid-caption">
                           <h4>Reparaci&oacute;n</h4>
                           <p>de computadoras</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- //projects -->
      <!-- mail -->
      <div class="mail" id="mail">
         <div class="container">
            <h3 class="w3l_head w3l_head1">Contactanos</h3>
            <p class="w3ls_head_para w3ls_head_para1">Envianos un mensaje</p>
            <div class="w3_mail_grids">
               <?php include './modulos/contacto/registros.php';?>
            </div>
         </div>
      </div>

<?php
}
?>
