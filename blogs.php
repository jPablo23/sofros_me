<?php include 'inc/head_common.php';
 include 'inc/header.php'; ?>
     <!-- container -->
     <div id="bodypage" class="container">
       <?php include 'inc/head_menu.php'; ?>
       <div  class="well">
         <div class="col-sm-12 text-center">
           <h1 class="font-bold">¿Qué te apetece leer? </h1>
         </div>
         <div class="row">
           <div id="jpklopmia" class="cube-service col-xs-12 col-lg-6" onclick="fn_ir(this.id)">
             <i class="fa fa-heartbeat fa-5x" aria-hidden="true"></i>
             <h3>JPKLOP-MIA</h3>
             <p>Lasciate ogni speranza, voi ch'entrate</p>
           </div>
           <div id="sofrosblog" class="cube-service col-xs-12 col-lg-6" onclick="fn_ir(this.id)">
             <i class="fa fa-money fa-5x" aria-hidden="true"></i>
             <h3>Sofroscorp BLOG</h3>
             <p>Finanzas, Tecnología, Programación</p>
           </div>
         </div>
       </div>
     </div>
     <!-- container -->

<?php include 'inc/footer.php';
include 'inc/footer_common.php'; ?>
