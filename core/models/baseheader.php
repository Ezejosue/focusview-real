<?php
  /*Creamos una clase con una funcion que imprime el codigo html del header
    para ahorrar codigo y colocar el header */
 class baseheader {
   static function bhead(){
        print('
        
        <div class="Conteiner">
        <!--esta parte es la barra de navegacion --> 
           <nav class="navbar navbar-expand-lg navbar-light " style="background-color: #000000">
               <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
               </form>
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavId">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
               </button>
               <div class="collapse navbar-collapse" id="collapsibleNavId">
                   <ul class="navbar-nav  mt-2 mt-lg-0 ml-auto">
                   <!-- Trigger the modal with a button -->
                   <button type="button" class="btn btn-outline-success btn-lg" id="myBtn">Login</button>
                 
                   <!-- Modal -->
                   <div class="modal fade" id="myModal" role="dialog">
                     <div class="modal-dialog">
                     
                       <!-- Modal content-->
                       <div class="modal-content">
                         <div class="modal-header" style="padding:35px 50px;">
                            <p><h1>Login</h1></p>
                           <button type="button" class="close" data-dismiss="modal">&times;</button>
                           <h4><span class="glyphicon glyphicon-lock"></span></h4>
                         </div>
                         <div class="modal-body" style="padding:40px 50px;">
                           <form role="form">
                             <div class="form-group">
                               <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                               <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                             </div>
                             <div class="form-group">
                               <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                               <input type="text" class="form-control" id="psw" placeholder="Enter password">
                             </div>
                             <div class="checkbox">
                               <label><input type="checkbox" value="" checked>Remember me</label>
                             </div>
                               <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
                           </form>
                         </div>
                           <button type="button" class="btn btn-info btn-lg" id="myBtn1">Olvide mi contraseña</button>
                           
                         
                           <!-- Modal -->
                           <div class="modal fade" id="myModal1" role="dialog">s
                             <div class="modal-dialog">
                             
                               <!-- Modal content-->
                               <div class="modal-content">
                                 <div class="modal-header" style="padding:35px 50px;">
                                 <h4>Recuperar clave</h4>
                                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                                   <h4><span class="glyphicon glyphicon-lock"></span></h4>
                                 </div>
                                 <div class="modal-body" style="padding:40px 50px;">
                                   <form role="form">
                                     <div class="form-group">
                                       <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                                       <input type="text" class="form-control" id="usrname" placeholder="Enter email">
                                     </div>                
                                       <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span>Send</button>
                                   </form>
                                 </div>
                               </div>                           
                             </div>
                           </div> 
                         </div> 
                       </div>     
                     </div>
                     <li class="nav-item">
                       <a class="nav-link" href="#" style="color: white;">Comprar</a> 
                       </li>
                   </div>          
                   </ul>
               </div>
           </nav>  
       <!-- Esta es la seccion de de el header -->
       <div id="link" class="text-center white-text " style="background-color: #000000">
               <div class="card-body">
                 <ul class="nav justify-content-center">
                   <li class="nav-item">
                     <a class="nav-link active" href="index.php">Inicio</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link active" href="productos.php">Productos</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" href="#footer">Accesorios</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link disable" href="quienes_somos.php" tabindex="-1" aria-disable="true">Sobre Nosotros</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link disable" href="ayuda.php" tabindex="-1" aria-disable="true">Ayuda</a>
                   </li>
                  </ul>
               </div>
             </div>
        </div> 
        
        ');
    }
}