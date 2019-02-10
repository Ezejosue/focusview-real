<?php
  /*Creamos una clase con una funcion que imprime el codigo html del header
    para ahorrar codigo y colocar el header */
 class baseheader {
   static function bhead(){
        print('
        <br>
        <div class="Conteiner">
       <!-- Esta es la seccion de de el header -->
       <div id="link" class="text-center white-text " style="background-color: #000000">
               <div class="card-body">
                 <ul class="nav justify-content-center">
                   <li class="nav-item">
                     <a class="nav-link active" href="#home">Inicio</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" href="#footer">Contáctenos</a>
                   </li>
                   <li class="nav-item">
                     <a class="nav-link active" href="#">Nuevos Productos</a>
                   </li>
                   <li class="nav-item">
                   <a class="nav-link disable" href="#nosotros" tabindex="-1" aria-disable="true">Sobre Nosotros</a>
                   </li>
                  </ul>
               </div>
             </div>
      <!--esta parte es la barra de navegacion --> 
           <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #000000">
               <form class="form-inline my-2 my-lg-0">
                   <input class="form-control mr-sm-2" type="text" placeholder="Buscar">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
               </form>
               <div id="link"   class="collapse navbar-collapse" id="collapsibleNavId">
                   <ul class="navbar-nav  mt-2 mt-lg-0 ml-auto">
                       <li class="nav-item active">
                       <a class="nav-link" href="#">Iniciar Sesion<span class="sr-only">(current)</span></a>
                       </li>
                       <li class="nav-item">
                       <a class="nav-link" href="#">Comprar</a> 
                       </li>
                   </ul>
               </div>
           </nav>  
        </div> 
        
        ');
    }
}