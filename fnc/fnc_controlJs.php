<?php

if(isset($_GET['subopcion'])){
    
}
elseif(isset($_GET['opcion'])){
    switch($_GET['opcion']){
        case 'familias': echo '<script src="mdl/articulos/familias/script.js"></script>'; break;
        case 'articulos': echo '<script src="mdl/articulos/articulos/script.js"></script>'; break;
    }
}

?>