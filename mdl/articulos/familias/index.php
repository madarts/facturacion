<?php

if(isset($_GET['addFamilia']) AND isset($_POST['txtInsertarFamilia']) AND isset($_POST['slcInsertarWeb'])){
    if($_GET['addFamilia'] == 'ok'){
        $familia     = $_POST['txtInsertarFamilia'];
        $web            = $_POST['slcInsertarWeb'];
        
        addFamilia($familia, $web);
		
        echo "<script language='javascript'> location.href = './?menu=articulos&opcion=familias&busqueda=". $familia ."'; </script>";
    }
}
if(isset($_GET['borrarFamilia']) AND isset($_POST['hddIdDeleteFamilia'])){
    $id = $_POST['hddIdDeleteFamilia'];
    
    deleteFamilia($id);
    
    echo "<script language='javascript'> location.href = './?menu=articulos&opcion=familias'; </script>";
}
if(isset($_GET['addSubFamilia']) AND (isset($_POST['hddIdFamilia'])) AND isset($_POST['txtInsertarSubfamilia']) AND isset($_POST['slcInsertarWeb']) AND isset($_POST['txtInsertarBeneficios'])){
    $id         = $_POST['hddIdFamilia'];
    
    $subfamilia = $_POST['txtInsertarSubfamilia'];
    $web        = $_POST['slcInsertarWeb'];
    $beneficios = $_POST['txtInsertarBeneficios'];

    addSubFamilia($id, $subfamilia, $web, $beneficios);
    
    echo "<script language='javascript'> location.href = './?menu=articulos&opcion=familias'; </script>";
}
if(isset($_GET['borrarSubFamilia']) AND isset($_POST['hddIdDeleteSubFamilia'])){
    $id = $_POST['hddIdDeleteSubFamilia'];
    
    deleteSubFamilia($id);
    
    echo "<script language='javascript'> location.href = './?menu=articulos&opcion=familias'; </script>";
}
if(isset($_GET['modificarFamilia']) AND isset($_POST['hddIdFamilia']) AND isset($_POST['txtModificarFamilia']) AND isset($_POST['slcModificarWeb'])){
    $id         = $_POST['hddIdFamilia'];
    $familia    = $_POST['txtModificarFamilia'];
    $web        = $_POST['slcModificarWeb'];
    
    modificarFamilia($id, $familia, $web);
    
    echo "<script language='javascript'> location.href = './?menu=articulos&opcion=familias'; </script>";
}
if(isset($_GET['modificarSubFamilia']) AND isset($_POST['hddIdSubFamilia']) AND isset($_POST['txtModificarSubfamilia']) AND isset($_POST['slcModificarWeb']) AND isset($_POST['txtModificarBeneficios'])){
    $id         = $_POST['hddIdSubFamilia'];
    $familia    = $_POST['txtModificarSubfamilia'];
    $web        = $_POST['slcModificarWeb'];
    $beneficios = $_POST['txtModificarBeneficios'];
    
    modificarSubFamilia($id, $familia, $web, $beneficios);
    
    echo "<script language='javascript'> location.href = './?menu=articulos&opcion=familias'; </script>";
}

?>

<div id="buscador">
    <form name="searchFamilia" method="POST" action="./?menu=articulos&opcion=familias"><input type="hidden" name="hddBuscar" id="hddBuscar" value="<?php 
                                                                if(isset($_GET['busqueda']))
                                                                    echo $_GET['busqueda']; 
                                                                elseif(isset($_POST['txtBuscar']))
                                                                    echo $_POST['txtBuscar'];    
                                                                elseif(isset($_POST['txtInsertarFamilia']))
                                                                    echo $_POST['txtInsertarFamilia']; 
                                                                ?>" />    
    <input type="text" name="txtBuscar" id="txtBuscar" value="" class="select" /></form>
    
    <input type="button" name="btnAdd" id="btnAdd" value="+" class="stlBoton" />
    <div style="clear: both;"></div>
</div>

<div id="titulo">
    FAMILIAS / SUBFAMILIAS
</div>

<table id="tblDatos" cellpadding="0" cellspacing="1">
    <thead>
        <td align="center" width="30px">Cod.</td>
        <td>Familia / Subfamilia</td>
        <td align="center" width="80px">Tiendasyn</td>
        <td align="center" width="80px">Beneficios</td>
        <td align="center" width="100px">Insertar</td>
        <td align="center" width="100px">Modificar</td>
        <td align="center" width="100px">Eliminar</td>
    </thead>
    
    <?php 
    
    if(isset($_GET['busqueda'])){
        familias($_GET['busqueda']);
    }
    elseif(isset($_POST['txtBuscar']))
        familias($_POST['txtBuscar']);    
    elseif(isset($_POST['txtInsertarFamilia']))
        familias($_POST['txtInsertarFamilia']); 
    else
        familias();
    
    
    ?>
</table>