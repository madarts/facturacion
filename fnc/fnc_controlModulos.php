<div id="capaTransparente" class="capaSuperior" ondblclick="cerrarSuperior();"></div>

<div id="contenidoSuperior" class="capaSuperiorContenido"></div>
<div id="cerrarContenidoSuperior" class="btnCerrar"></div>

<?php


if(isset($_SESSION['fac_user']) AND isset($_SESSION['fac_user'])){
    include('mdl/top/index.php');
    
    echo "<div id='contenido' class='contenidoWeb'>";
        echo "<div id='contenidoInt' class='contenidoInterior'>";
        
            controlContenido();
            
        echo "</div>";
    echo "</div>";
}
else{
    include('mdl/registro/index.php');
}



?>