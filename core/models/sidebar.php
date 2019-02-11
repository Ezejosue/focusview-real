<?php  
class sitepack 
{

    public static function menu (){
    print('<div class="sidebar">
    <a href="index.php" class="active">DASHBOARD</a>
    <a href="profile.php">PERFIL</a>
    <a href="pedidos.php">PEDIDOS</a>
    <a href="categorias.php">CATEGORÍAS</a>
    <a href="productos.php">PRODUCTOS</a>
    <a href="usuarios.php">USUARIOS</a>
    <a href="clientes.php">CLIENTES</a>
    <a href="reportes.php">REPORTES</a>
    <a href="../../views/public/index.php">CERRAR SESIÓN</a>
    </div>');
    }
    
}
?>