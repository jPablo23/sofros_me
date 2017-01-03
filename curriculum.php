<?php include 'inc/head_common.php';
 include 'inc/header.php'; ?>
 <!-- container -->
 <div id="bodypage" class="container">
   <?php include 'inc/head_menu.php'; ?>
   <div  class="well">
      <!-- row encabezado -->
     <div class="row">
       <div class="col-xs-12 col-lg-4">
         <div id="headshot" class="quickFade">
           <img src="images/jpablo.jpg" width="300" height="300" alt="JPablo Rodriguez" />
         </div>
       </div>
       <div class="col-xs-12 col-lg-4">
         <p><h2 class="curriculum">Juan Pablo Rodríguez Mendoza</h1></p>
         <p><h3 class="curriculum">Full-Stack Developer</h1></p>
       </div>
       <div class="col-xs-12 col-lg-4">
         <section id="agenda">
           <dl class="dl-horizontal">
             <dt><i class="fa fa-cloud" aria-hidden="true"></i></dt>
             <dd>Sofroscorp.com</dd>
             <dt><i class="fa fa-envelope" aria-hidden="true"></i></dt>
             <dd>pablordzmz@yandex.com</dd>
             <dt><i class="fa fa-map-marker" aria-hidden="true"></i></dt>
             <dd>San Felipe, Torres Mochas, Guanajuato, México.</dd>
           </dl>
         </section>
       </div>
     </div>
     <!-- row encabezado -->
      <!-- row Quien, que hago, en que te ayudo -->
      <div class="row">
        <div class="cube-service col-xs-12 col-lg-4">
            <i class="fa fa-user-secret fa-5x" aria-hidden="true"></i>
            <h3>¿Quién soy?</h3>
            <p>Hola Soy Juan Pablo Rodríguez creador de Sofroscorp,  Full-Stack developer freelancer y líder del proyecto más importante del mundo, el proyecto de 'Mi vida'</p>
        </div>
        <div class="cube-service col-xs-12 col-lg-4">
            <i class="fa fa-laptop fa-5x" aria-hidden="true"></i>
            <h3>¿Qué hago?</h3>
            <p>Creo y/o Mejoró productos de software así como presto servicios de TI, para ayudar a obtener información relevante para la toma de decisiones de su empresa.</p>
            <p>Toda empresa, incluido tú, necesitas analizar información para tomar acción, recuerda que "Tu situación actual es en gran medida el resultado de tus decisiones pasadas".</p>
        </div>
        <div class="cube-service col-xs-12 col-lg-4">
            <i class="fa fa-line-chart fa-5x" aria-hidden="true"></i>
            <h3>¿En que te ayudo?</h3>
            <p>Mis años de experiencia en desarrollo de proyectos y mis contactos podrían resultar de interés para una empresa en crecimiento como la suya. la información es importante, yo puedo ayudar a adquirirla.</p>
        </div>
      </div>
      <!-- row Quien, que hago, en que te ayudo -->
      <!-- row Educacion y experiencia -->
      <div class="row">
        <h3 id="rowEduExpe">Educación y Experiencia</h3>
        <div class="col-xs-12 col-lg-12">
          <ol id="timeline">
            <li>
              <time>2009 - 2011</time>
              <p>Estudios en UTNG carrera: Técnico Superior Universitario en Tecnologías de Información y Comunicación Área Sistemas Informáticos</p>
            </li>
            <li>
              <time>2011 - 2013</time>
              <p>Estudios en UTNG carrera: Ingeniería en Tecnologías de Información y Comunicación</p>
            </li>
            <li>
              <time>19/03/2012-29/04/2013</time>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion" href="#iquasoft" aria-expanded="true" aria-controls="iquasoft">
                        <strong>iQuaSoft, Soluciones tecnológicas ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                      </a>
                      </h4>
                    </div>
                  </div>
                </div>
                <div id="iquasoft" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                  <div class="panel-body">
                    <p><strong>Ciudad:</strong> San Felipe GTO, C.P. 37600 </p>
                    <p><strong>Dirección:</strong> Madero #118</p>
                    <p><strong>Col:</strong> Centro</p>
                    <p><strong>Tel:</strong> 4286850924</p>
                    <p><strong>Web:</strong> <a target="_blank" href="http://iquasoft.com/" class="">iquasoft.com</a> </p>
                    <p><strong>Cargo:</strong> Programador y soporte técnico</p>
                    <p><strong>Función:</strong> Mantenimiento preventivo y correctivo a equipos de cómputo, desarrollo del bloque de reconocimiento de voz sistema POLO (java), scripts para respaldos MySQL y SQL server, Instalación y configuración del sistema MyBusiness POS</p>
                  </div>
                </div>
            </li>
            <li>
              <time>03/05/2013 - 21/04/2014</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#industriasCorp" aria-expanded="true" aria-controls="industriasCorp">
                    <strong>Industrias Corp. Automatización Industrial ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="industriasCorp" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> Villa De Reyes, San Luis Potosí, Mx, CP 79526 </p>
                  <p><strong>Dirección:</strong> Av. Frankfurt # 201</p>
                  <p><strong>Col:</strong> Parque Industrial Logistik 2</p>
                  <p><strong>Tel:</strong> 444 279 8399</p>
                  <p><strong>Cargo:</strong> Analista, Programador, administrador de base de datos, diseñador front-end</p>
                  <p><strong>Función:</strong> Desarrollo en asp.net C#, PHP, JSP, análisis de sistemas, administrador de base de datos, desarrollo y mantenimento del sistema Energy Management System (EMS) </p>
                </div>
              </div>
            </li>
            <li>
              <time>07/06/2014 - 21/01/2015</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#corpogenius" aria-expanded="true" aria-controls="corpogenius">
                    <strong>CORPOGENIUS INDUSTRY Automatización Industrial ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="corpogenius" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> Villa de pozos, S.L.P. C.P. 78421</p>
                  <p><strong>Dirección:</strong> Calle Aragón N.85</p>
                  <p><strong>Tel:</strong>  444 387 4457</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://corpogenius.com" class="">corpogenius.com</a></p>
                  <p><strong>Cargo:</strong> Full-Stack Developer</p>
                  <p><strong>Función:</strong> Desarrollo en asp.net C#, PHP, java, análisis de sistemas, administrador de base de datos</p>
                </div>
              </div>
            </li>
            <li>
              <time>30/03/2015 - 01/06/2015</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#ieeg" aria-expanded="true" aria-controls="ieeg">
                    <strong>Instituto Electoral del Estado de Guanajuato ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="ieeg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> Guanajuato, Gto C.P. 36263</p>
                  <p><strong>Dirección:</strong> Carretera Gto-Puentecillas Km. 2 </p>
                  <p><strong>Col:</strong> Puentecillas</p>
                  <p><strong>Tel:</strong>  01 800 433 44 86</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://www.ieeg.org.mx/" class="">www.ieeg.org.mx</a> </p>
                  <p><strong>Cargo:</strong> Ingeniero de soporte</p>
                  <p><strong>Función:</strong> Soporte de conexiones web, integrador del sistema PREP, instalación de cableado estructurado</p>
                </div>
              </div>
            </li>
            <li>
              <time>01/06/2015 - Actualidad</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#freelancer" aria-expanded="true" aria-controls="freelancer">
                    <strong>Freelancer ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="freelancer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> San Felipe GTO, C.P. 37600</p>
                  <p><strong>Dirección:</strong> Arg&uuml;ello #306</p>
                  <p><strong>Col:</strong> Oriental</p>
                  <p><strong>Tel:</strong> 428 105 5451</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://sofroscorp.com/" class="">sofroscorp.com</a> </p>
                  <p><strong>Cargo:</strong> Full-stack developer</p>
                  <p><strong>Función:</strong> Desarrollo de páginas web y sistemas de información, Desarrollo front-end, Análisis, desarrollo e implementación de base de datos, Desarrollo Movil, Diseño e instalación de redes, Consultoria TI</p>
                </div>
              </div>
            </li>
          </ol>
        </div>
            <!-- row Educacion y Experiencia Moviles -->
          <div id="divMovil" class="col-xs-12 col-lg-12">
            <time>2009 - 2011</time>
            <p>Estudios en UTNG carrera: Técnico Superior Universitario en Tecnologías de Información y Comunicación Área Sistemas Informáticos</p>
            <time>2011 - 2013</time>
            <p>Estudios en UTNG carrera: Ingeniería en Tecnologías de Información y Comunicación</p>
            <time>19/03/2012-29/04/2013</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#movil-iquasoft" aria-expanded="true" aria-controls="movil-iquasoft">
                    <strong>iQuaSoft, Soluciones tecnológicas ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="movil-iquasoft" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> San Felipe GTO, C.P. 37600 </p>
                  <p><strong>Dirección:</strong> Madero #118</p>
                  <p><strong>Col:</strong> Centro</p>
                  <p><strong>Tel:</strong> 4286850924</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://iquasoft.com/" class="">iquasoft.com</a> </p>
                  <p><strong>Cargo:</strong> Programador y soporte técnico</p>
                  <p><strong>Función:</strong> Mantenimiento preventivo y correctivo a equipos de cómputo, desarrollo del bloque de reconocimiento de voz sistema POLO (java), scripts para respaldos MySQL y SQL server, Instalación y configuración del sistema MyBusiness POS</p>
                </div>
              </div>
              <time>03/05/2013 - 21/04/2014</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#movil-industriasCorp" aria-expanded="true" aria-controls="movil-industriasCorp">
                    <strong>Industrias Corp. Automatización Industrial ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="movil-industriasCorp" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> Villa De Reyes, San Luis Potosí, Mx, CP 79526 </p>
                  <p><strong>Dirección:</strong> Av. Frankfurt # 201</p>
                  <p><strong>Col:</strong> Parque Industrial Logistik 2</p>
                  <p><strong>Tel:</strong> 444 279 8399</p>
                  <p><strong>Cargo:</strong> Analista, Programador, administrador de base de datos, diseñador front-end</p>
                  <p><strong>Función:</strong> Desarrollo en asp.net C#, PHP, JSP, análisis de sistemas, administrador de base de datos, desarrollo y mantenimento del sistema Energy Management System (EMS) </p>
                </div>
              </div>
              <time>07/06/2014 - 21/01/2015</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#movil-corpogenius" aria-expanded="true" aria-controls="movil-corpogenius">
                    <strong>CORPOGENIUS INDUSTRY Automatización Industrial ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="movil-corpogenius" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> Villa de pozos, S.L.P. C.P. 78421</p>
                  <p><strong>Dirección:</strong> Calle Aragón N.85</p>
                  <p><strong>Tel:</strong>  444 387 4457</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://corpogenius.com" class="">corpogenius.com</a></p>
                  <p><strong>Cargo:</strong> Full-Stack Developer</p>
                  <p><strong>Función:</strong> Desarrollo en asp.net C#, PHP, java, análisis de sistemas, administrador de base de datos</p>
                </div>
              </div>
              <time>30/03/2015 - 01/06/2015</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#movil-ieeg" aria-expanded="true" aria-controls="movil-ieeg">
                    <strong>Instituto Electoral del Estado de Guanajuato ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="movil-ieeg" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> Guanajuato, Gto C.P. 36263</p>
                  <p><strong>Dirección:</strong> Carretera Gto-Puentecillas Km. 2 </p>
                  <p><strong>Col:</strong> Puentecillas</p>
                  <p><strong>Tel:</strong>  01 800 433 44 86</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://www.ieeg.org.mx/" class="">www.ieeg.org.mx</a> </p>
                  <p><strong>Cargo:</strong> Ingeniero de soporte</p>
                  <p><strong>Función:</strong> Soporte de conexiones web, integrador del sistema PREP, instalación de cableado estructurado</p>
                </div>
              </div>
              <time>01/06/2015 - Actualidad</time>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#movil-freelancer" aria-expanded="true" aria-controls="movil-freelancer">
                    <strong>Freelancer ...<i class="glyphicon glyphicon-chevron-down" aria-hidden="true"></i></strong>
                    </a>
                    </h4>
                  </div>
                </div>
              </div>
              <div id="movil-freelancer" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                  <p><strong>Ciudad:</strong> San Felipe GTO, C.P. 37600</p>
                  <p><strong>Dirección:</strong> Arg&uuml;ello #306</p>
                  <p><strong>Col:</strong> Oriental</p>
                  <p><strong>Tel:</strong> 428 105 5451</p>
                  <p><strong>Web:</strong> <a target="_blank" href="http://sofroscorp.com/" class="">sofroscorp.com</a> </p>
                  <p><strong>Cargo:</strong> Full-stack developer</p>
                  <p><strong>Función:</strong> Desarrollo de páginas web y sistemas de información, Desarrollo front-end, Análisis, desarrollo e implementación de base de datos, Desarrollo Movil, Diseño e instalación de redes, Consultoria TI</p>
                </div>
              </div>
        </div>
          <!-- row Educacion y Experiencia Moviles -->
      </div>
      <!-- row Educacion y experiencia -->
      <!-- row Habilidades y datos tecnicos -->
      <div class="row">
        <h2>Habilidades</h2>
        <div class="col-xs-12 col-lg-6">
          <h3>Web <i class="fa fa-cloud" aria-hidden="true"></i></h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
              JavaScript <i class="fa fa-code" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              CSS <i class="fa fa-css3" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              PHP <i class="fa fa-code" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
              HTML5 <i class="fa fa-html5" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              Ajax <i class="fa fa-code" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
              jQuiery <i class="fa fa-code" aria-hidden="true"></i>
            </div>
          </div>
          <h3>Lenguajes robustos (Escritorio <i class="fa fa-desktop" aria-hidden="true"></i>)</h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
              Java <i class="fa fa-code" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
              Python <i class="fa fa-code" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
              C# <i class="fa fa-windows" aria-hidden="true"></i>
            </div>
          </div>
          <h3>Control de versiones <i class="fa fa-share-alt" aria-hidden="true"></i></h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
              GIT <i class="fa fa-bitbucket" aria-hidden="true"></i>
            </div>
          </div>
          <h3>Herramientas <i class="fa fa-certificate" aria-hidden="true"></i></h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
              Sistemas Gestores de Base de Datos (SGBD) <i class="fa fa-database" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              Vagrant <i class="fa fa-archive" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
              Terminal  <i class="fa fa-terminal" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
              Patrones de diseño  <i class="fa fa-rebel" aria-hidden="true"></i>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-lg-6">
          <h3>Sistemas Operativos</h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
              Windows  <i class="fa fa-windows" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
              Linux  <i class="fa fa-linux" aria-hidden="true"></i>
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
              Mac  <i class="fa fa-apple" aria-hidden="true"></i>
            </div>
          </div>
          <h3>Idiomas</h3>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 35%;">
              Ingles
            </div>
          </div>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
              Español (lengua madre)
            </div>
          </div>
        </div>
        </div>
        <!-- row Habilidades y datos tecnicos -->
        <!-- row referencias -->
        <div class="row">
          <h2>Referencias</h2>
          <div class="cube-service col-xs-12 col-lg-4">
              <i class="fa fa-user fa-5x" aria-hidden="true"></i>
              <h3>Ing. Rogelio Lozano Rodríguez</h3>
              <p><a target="_blank" href="http://iquasoft.com/" class="">CEO iQuaSoft</a>, Soluciones tecnológicas</p>
          </div>
          <div class="cube-service col-xs-12 col-lg-4">
              <i class="fa fa-user fa-5x" aria-hidden="true"></i>
              <h3>Ing. Carlos Montes Flores</h3>
              <p><a target="_blank" href="http://corpogenius.com" class="">CEO CORPOGENIUS INDUSTRY</a> Automatización Industrial</p>
          </div>
          <div class="cube-service col-xs-12 col-lg-4">
              <i class="fa fa-user fa-5x" aria-hidden="true"></i>
              <h3>Ing. Alejandro Vázquez</h3>
              <p><a target="_blank" href="http://wifimax.com.mx/index.php" class="">CEO Wifimax</a> </p>
          </div>
        </div>
        <!-- row referencias -->
      </div>
   </div>
 </div>
 <!-- container -->

 <?php include 'inc/footer.php';
 include 'inc/footer_common.php'; ?>
